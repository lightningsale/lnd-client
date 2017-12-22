<?php

namespace LightningSale\LndRest\Resource;

use GuzzleHttp\Client;
use LightningSale\LndRest\Model\ConnectPeerRequest;
use LightningSale\LndRest\Model\FeeUpdateRequest;
use LightningSale\LndRest\Model\Invoice;
use LightningSale\LndRest\Model\OpenChannelRequest;
use LightningSale\LndRest\Model\SendCoinsRequest;
use LightningSale\LndRest\Model\SendRequest;
use LightningSale\LndRest\Model\SendCoinsResponse;
use LightningSale\LndRest\Model\TransactionDetails;
use LightningSale\LndRest\Model\ConnectPeerResponse;
use LightningSale\LndRest\Model\ListPeersResponse;
use LightningSale\LndRest\Model\PayReq;
use LightningSale\LndRest\Model\ListPaymentsResponse;
use LightningSale\LndRest\Model\NewAddressResponse;
use LightningSale\LndRest\Model\AddInvoiceResponse;
use LightningSale\LndRest\Model\QueryRoutesResponse;
use LightningSale\LndRest\Model\NodeInfo;
use LightningSale\LndRest\Model\ActiveChannel;
use LightningSale\LndRest\Model\NetworkInfo;
use LightningSale\LndRest\Model\ChannelEdge;
use LightningSale\LndRest\Model\ChannelGraph;
use LightningSale\LndRest\Model\GetInfoResponse;
use LightningSale\LndRest\Model\FeeReportResponse;
use LightningSale\LndRest\Model\CloseStatusUpdate;
use LightningSale\LndRest\Model\SendResponse;
use LightningSale\LndRest\Model\PendingChannelResponse;
use LightningSale\LndRest\Model\ChannelPoint;
use LightningSale\LndRest\Model\ChannelBalanceResponse;
use LightningSale\LndRest\Model\WalletBalanceResponse;

/**
 * Class LightningResource
 * @package LightningSale\LndRest\Resource
 * Documentation at http://api.lightning.community/
 */
class LndClient
{
    private $httpClient;

    public function __construct(Client $client)
    {
        $this->httpClient = $client;
    }

    public function walletBalance(): WalletBalanceResponse
    {
        $response = $this->httpClient->get('/v1/balance/blockchain');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return WalletBalanceResponse::fromResponse($body);
    }

    public function channelBalance(): ChannelBalanceResponse
    {
        $response = $this->httpClient->get('/v1/balance/channels');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return ChannelBalanceResponse::fromResponse($body);
    }

    /** @return ActiveChannel[] */
    public function listChannels(): array
    {
        $response = $this->httpClient->get('/v1/channels');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return array_map(function ($f) {return ActiveChannel::fromResponse($f);}, $body['channels'] ?? []);
    }

    public function openChannelSync(OpenChannelRequest $body): ChannelPoint
    {
        $response = $this->httpClient->post('/v1/channels', ['json' => $body]);
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return ChannelPoint::fromResponse($body);
    }

    public function pendingChannels(): PendingChannelResponse
    {
        $response = $this->httpClient->get('/v1/channels/pending');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return PendingChannelResponse::fromResponse($body);
    }

    public function sendPaymentSync(SendRequest $body): SendResponse
    {
        $response = $this->httpClient->post('/v1/channels/transactions', ['json' => $body]);
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return SendResponse::fromResponse($body);
    }

    public function closeChannel(string $fundingTxid, string $outputIndex): CloseStatusUpdate
    {
        $url = '/v1/channels/{funding_txid}/{output_index}';
        $url = str_replace('{funding_txid}', urlencode($fundingTxid), $url);
        $url = str_replace('{output_index}', urlencode($outputIndex), $url);

        $response = $this->httpClient->delete($url);
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return CloseStatusUpdate::fromResponse($body);
    }

    public function feeReport(): FeeReportResponse
    {
        $response = $this->httpClient->get('/v1/fees');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return FeeReportResponse::fromResponse($body);
    }

    public function updateFees(FeeUpdateRequest $body): void
    {
        $this->httpClient->post('/v1/fees', ['json' => $body]);
    }

    public function getInfo(): GetInfoResponse
    {
        $response = $this->httpClient->get('/v1/getinfo');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return GetInfoResponse::fromResponse($body);
    }

    public function describeGraph(): ChannelGraph
    {
        $response = $this->httpClient->get('/v1/graph');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return ChannelGraph::fromResponse($body);
    }

    public function getChanInfo(string $channelId): ChannelEdge
    {
        $url = '/v1/graph/edge/{chan_id}';
        $url = str_replace('{chan_id}', urlencode($channelId), $url);

        $response = $this->httpClient->get($url);
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return ChannelEdge::fromResponse($body);
    }

    public function getNetworkInfo(): NetworkInfo
    {
        $response = $this->httpClient->get('/v1/graph/info');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return NetworkInfo::fromResponse($body);
    }

    public function getNodeInfo(string $pubKey): NodeInfo
    {
        $url = '/v1/graph/node/{pub_key}';
        $url = str_replace('{pub_key}', urlencode($pubKey), $url);
        $response = $this->httpClient->get($url);
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return NodeInfo::fromResponse($body);
    }

    public function queryRoutes(string $pubKey, string $amt)
    {
        $url = '/v1/graph/routes/{pub_key}/{amt}';
        $url = str_replace('{pub_key}', urlencode($pubKey), $url);
        $url = str_replace('{amt}', urlencode($amt), $url);
        $response = $this->httpClient->get($url);
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return QueryRoutesResponse::fromResponse($body);
    }

    public function addInvoice(Invoice $body): AddInvoiceResponse
    {
        $response = $this->httpClient->post('/v1/invoices', ['json' => $body]);
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return AddInvoiceResponse::fromResponse($body);
    }

    public function subscribeInvoices(): Invoice
    {
        $response = $this->httpClient->get('/v1/invoices/subscribe');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return Invoice::fromResponse($body);
    }

    /** @return Invoice[] */
    public function listInvoices(bool $pendingOnly = false): array
    {
        $url = '/v1/invoices/{pending_only}';
        $url = str_replace('{pending_only}', urlencode($pendingOnly), $url);
        $response = $this->httpClient->get($url);
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return array_map(function($f) {return Invoice::fromResponse($f);}, $body['invoices']);
    }

    public function lookupInvoice(string $rHashStr): Invoice
    {
        $url = '/v1/invoices/{r_hash_str}';
        $url = str_replace('{r_hash_str}', urlencode($rHashStr), $url);
        $response = $this->httpClient->get($url);
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return Invoice::fromResponse($body);
    }

    public function newWitnessAddress(): NewAddressResponse
    {
        $response = $this->httpClient->get('/v1/newaddress');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return NewAddressResponse::fromResponse($body);
    }

    public function deleteAllPayments(): void
    {
        $this->httpClient->delete('/v1/payments');
    }

    public function listPayments(): ListPaymentsResponse
    {
        $response = $this->httpClient->get('/v1/payments');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return ListPaymentsResponse::fromResponse($body);
    }

    public function decodePayReq(string $payReq): PayReq
    {
        $url = '/v1/payreq/{pay_req}';
        $url = str_replace('{pay_req}', urlencode($payReq), $url);

        $response = $this->httpClient->get($url);
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return PayReq::fromResponse($body);
    }

    public function listPeers(): ListPeersResponse
    {
        $response = $this->httpClient->get('/v1/peers');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return ListPeersResponse::fromResponse($body);
    }

    public function connectPeer(ConnectPeerRequest $body): ConnectPeerResponse
    {
        $response = $this->httpClient->post('/v1/peers', ['json' => $body]);
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return ConnectPeerResponse::fromResponse($body);
    }

    public function disconnectPeer(string $pubKey)
    {
        $url = '/v1/peers/{pub_key}';
        $url = str_replace('{pub_key}', urlencode($pubKey), $url);

        $this->httpClient->delete($url);
    }

    public function getTransactions(): TransactionDetails
    {
        $response = $this->httpClient->get('/v1/transactions');
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return TransactionDetails::fromResponse($body);
    }

    public function sendCoins(SendCoinsRequest $body): SendCoinsResponse
    {
        $response = $this->httpClient->post('/v1/transactions', ['json' => $body]);
        $body = \GuzzleHttp\json_decode($response->getBody(), true);
        return SendCoinsResponse::fromResponse($body);
    }
}