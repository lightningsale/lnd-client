<?php declare(strict_types=1);

namespace LightningSale\LndRest;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use LightningSale\LndRest\Model\ChannelFeeReport;
use LightningSale\LndRest\Model\FeeUpdateRequest;
use LightningSale\LndRest\Model\Invoice;
use LightningSale\LndRest\Model\OpenChannelRequest;
use LightningSale\LndRest\Model\Payment;
use LightningSale\LndRest\Model\Peer;
use LightningSale\LndRest\Model\Route;
use LightningSale\LndRest\Model\SendCoinsRequest;
use LightningSale\LndRest\Model\SendRequest;
use LightningSale\LndRest\Model\PayReq;
use LightningSale\LndRest\Model\AddInvoiceResponse;
use LightningSale\LndRest\Model\NodeInfo;
use LightningSale\LndRest\Model\ActiveChannel;
use LightningSale\LndRest\Model\NetworkInfo;
use LightningSale\LndRest\Model\ChannelEdge;
use LightningSale\LndRest\Model\ChannelGraph;
use LightningSale\LndRest\Model\GetInfoResponse;
use LightningSale\LndRest\Model\CloseStatusUpdate;
use LightningSale\LndRest\Model\SendResponse;
use LightningSale\LndRest\Model\PendingChannelResponse;
use LightningSale\LndRest\Model\ChannelPoint;
use LightningSale\LndRest\Model\Transaction;
use LightningSale\LndRest\Model\WalletBalanceResponse;


/**
 * Class LightningResource
 * @package LightningSale\LndRest\Resource
 * Documentation at http://api.lightning.community/
 */
class LndRestClient
{
    private $httpClient;

    public function __construct(Client $client)
    {
        $this->httpClient = $client;
    }

    private function post(string $uri, array $json): array
    {
        try {
            $response = $this->httpClient->post($uri, ['json' => $json]);
            $body = \GuzzleHttp\json_decode($response->getBody(), true);
            return $body;
        } catch (BadResponseException $exception) {
            throw LndException::fromResponse($exception);
        }
    }

    private function get(string $uri): array
    {
        try {
            $response = $this->httpClient->get($uri);
            $body = \GuzzleHttp\json_decode($response->getBody(), true);
            return $body;
        } catch (BadResponseException $exception) {
            throw LndException::fromResponse($exception);
        }
    }

    private function delete(string $uri){
        try {
            $response = $this->httpClient->delete($uri);
            $body = \GuzzleHttp\json_decode($response->getBody(), true);
            return $body;
        } catch (BadResponseException $exception) {
            throw LndException::fromResponse($exception);
        }
    }


    public function createWallet(string $password): void
    {
        $this->post("/v1/createwallet", ['password' => $password]);
    }

    public function unlockWallet(string $password): void
    {
        $this->post("/v1/unlockwallet", ['password' => $password]);
    }

    public function walletBalance(): WalletBalanceResponse
    {
        $body = $this->get('/v1/balance/blockchain');
        return WalletBalanceResponse::fromResponse($body);
    }

    public function channelBalance(): string
    {
        $body = $this->get('/v1/balance/channels');
        return $body['balance'] ?? "0";
    }

    /** @return ActiveChannel[] */
    public function listChannels(): array
    {
        $body = $this->get('/v1/channels');
        return array_map(function ($f) {return ActiveChannel::fromResponse($f);}, $body['channels'] ?? []);
    }

    public function openChannelSync(string $nodePubkey, string $amount, string $pushSat = "0", int $targetConf = 0, int $satoshiPrByte = 0, bool $private = false): ChannelPoint
    {
        $body = $this->post('/v1/channels', [
            'target_peer_id' => 0, // Not used
            'node_pubkey_string' => $nodePubkey,
            'local_funding_amount' => $amount,
            'push_sat' => $pushSat,
            'target_conf' => $targetConf,
            'sat_per_byte' => $satoshiPrByte,
            'private' => $private,
        ]);
        return ChannelPoint::fromResponse($body);
    }

    public function pendingChannels(): PendingChannelResponse
    {
        $body = $this->get('/v1/channels/pending');
        return PendingChannelResponse::fromResponse($body);
    }

    public function sendPaymentSync(SendRequest $body): SendResponse
    {
        $body = $this->post('/v1/channels', $body);
        return SendResponse::fromResponse($body);
    }

    public function sendPaymentRequest(string $paymentRequest): SendResponse
    {
        $body = $this->post('/v1/channels/transactions', ['payment_request' => $paymentRequest]);
        return SendResponse::fromResponse($body);
    }

    public function closeChannel(string $fundingTxid, string $outputIndex, bool $force = false): CloseStatusUpdate
    {
        $url = '/v1/channels/{funding_txid}/{output_index}';
        $url = str_replace('{funding_txid}', urlencode($fundingTxid), $url);
        $url = str_replace('{output_index}', urlencode($outputIndex), $url);
        if ($force)
            $url .= "?force=true";

        $body = $this->delete($url);
        return CloseStatusUpdate::fromResponse($body);
    }

    /**
     * @return ChannelFeeReport[]
     */
    public function feeReport(): array
    {
        $body = $this->get('/v1/fees');
        return array_map(function($i) {return ChannelFeeReport::fromResponse($i);}, $body['channel_fees'] ?? []);
    }

    public function updateFees(FeeUpdateRequest $body): void
    {
        $this->post('/v1/fees', $body);
    }

    public function getInfo(): GetInfoResponse
    {
        $body = $this->get('/v1/getinfo');
        return GetInfoResponse::fromResponse($body);
    }

    public function describeGraph(): ChannelGraph
    {
        $body = $this->get('/v1/graph');
        return ChannelGraph::fromResponse($body);
    }

    public function getChanInfo(string $channelId): ChannelEdge
    {
        $url = '/v1/graph/edge/{chan_id}';
        $url = str_replace('{chan_id}', urlencode($channelId), $url);

        $body = $this->get($url);
        return ChannelEdge::fromResponse($body);
    }

    public function getNetworkInfo(): NetworkInfo
    {
        $body = $this->get('/v1/graph/info');
        return NetworkInfo::fromResponse($body);
    }

    public function getNodeInfo(string $pubKey): NodeInfo
    {
        $url = '/v1/graph/node/{pub_key}';
        $url = str_replace('{pub_key}', urlencode($pubKey), $url);

        $body = $this->get($url);
        return NodeInfo::fromResponse($body);
    }

    /** @return Route[] */
    public function queryRoutes(string $pubKey, string $amt): array
    {
        $url = '/v1/graph/routes/{pub_key}/{amt}';
        $url = str_replace('{pub_key}', urlencode($pubKey), $url);
        $url = str_replace('{amt}', urlencode($amt), $url);

        $body = $this->get($url);
        return array_map(function($i) {return Route::fromResponse($i);}, $body['routes']);
    }

    public function addInvoice(string $memo, string $value, $expiry = 3600): AddInvoiceResponse
    {
        $this->post('/v1/invoices', [
            'memo' => $memo,
            'value' => $value,
            'expiry' => $expiry,
        ]);
        // handle error:
        // {"error":"payment of 0.33858134 BTC is too large, max payment allowed is 0.04294967 BTC","code":2}

        return AddInvoiceResponse::fromResponse($body);
    }

    /** @return Invoice[] */
    public function listInvoices(bool $pendingOnly = false): array
    {
        $url = '/v1/invoices/{pending_only}';
        $url = str_replace('{pending_only}', $pendingOnly ? "true" : "false", $url);

        $body = $this->get($url);
        return array_map(function($f) {return Invoice::fromResponse($f);}, $body['invoices'] ?? []);
    }

    public function lookupInvoice(string $rHashStr): Invoice
    {
        $url = '/v1/invoices/{r_hash_str}';
        $url = str_replace('{r_hash_str}', urlencode($rHashStr), $url);

        $body = $this->get($url);
        return Invoice::fromResponse($body);
    }

    public function newWitnessAddress(): string
    {
        $body = $this->get('/v1/newaddress');
        return $body['address'];
    }

    public function deleteAllPayments(): void
    {
        $this->delete('/v1/payments');
    }

    /**
     * @return Payment[]
     */
    public function listPayments(): array
    {
        $body = $this->get('/v1/payments');
        return array_map(function($f) {return Payment::fromResponse($f);}, $body['payments']);
    }

    public function decodePayReq(string $payReq): PayReq
    {
        $url = '/v1/payreq/{pay_req}';
        $url = str_replace('{pay_req}', urlencode($payReq), $url);

        $body = $this->get($url);
        return PayReq::fromResponse($body);
    }

    /**
     * @return Peer[]
     */
    public function listPeers(): array
    {
        $body = $this->get('/v1/peers');
        return array_map(function ($f) {return Peer::fromResponse($f);}, $body['peers'] ?? []);
    }

    public function connectPeer(string $pubKey, string $host, bool $perm = false): void
    {
        $this->post('/v1/peers', [
            'perm' => $perm,
            'addr' => [
                'host' => $host,
                'pubkey' => $pubKey
            ]
        ]);
    }

    public function disconnectPeer(string $pubKey): void
    {
        $url = '/v1/peers/{pub_key}';
        $url = str_replace('{pub_key}', urlencode($pubKey), $url);

        $this->delete($url);
    }

    /**
     * @return Transaction[]
     */
    public function getTransactions(): array
    {
        $body = $this->get('/v1/transactions');
        return array_map(function($f) {return Transaction::fromResponse($f);}, $body['transactions'] ?? []);
    }

    public function sendCoins(SendCoinsRequest $body): string
    {
        $body = $this->post('/v1/transactions', $body);
        return $body['txid'];
    }
}