<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 10.01.18
 * Time: 09:23
 */

namespace LightningSale\LndClient;

use LightningSale\LndClient\Model\ActiveChannel;
use LightningSale\LndClient\Model\AddInvoiceResponse;
use LightningSale\LndClient\Model\ChannelEdge;
use LightningSale\LndClient\Model\ChannelFeeReport;
use LightningSale\LndClient\Model\ChannelGraph;
use LightningSale\LndClient\Model\ChannelPoint;
use LightningSale\LndClient\Model\CloseStatusUpdate;
use LightningSale\LndClient\Model\GetInfoResponse;
use LightningSale\LndClient\Model\Invoice;
use LightningSale\LndClient\Model\NetworkInfo;
use LightningSale\LndClient\Model\NodeInfo;
use LightningSale\LndClient\Model\Payment;
use LightningSale\LndClient\Model\PayReq;
use LightningSale\LndClient\Model\Peer;
use LightningSale\LndClient\Model\PendingChannelResponse;
use LightningSale\LndClient\Model\Route;
use LightningSale\LndClient\Model\SendCoinsResponse;
use LightningSale\LndClient\Model\Transaction;
use LightningSale\LndClient\Model\WalletBalanceResponse;


/**
 * Class LightningResource
 * @package LightningSale\LndRest\Resource
 * Documentation at http://api.lightning.community/
 */
interface Client
{
    public function createWallet(string $password): void;

    public function unlockWallet(string $password): void;

    public function walletBalance(): WalletBalanceResponse;

    public function channelBalance(): string;

    /** @return ActiveChannel[] */
    public function listChannels(): array;

    public function openChannel(string $nodePubkey, string $amount, string $pushSat = "0", int $targetConf = 0, int $satoshiPrByte = 0, bool $private = false, ?string $minHtlcMsat = "0"): ChannelPoint;

    public function pendingChannels(): PendingChannelResponse;

    public function sendPayment(string $paymentRequest): SendCoinsResponse;

    public function closeChannel(string $fundingTxid, string $outputIndex, ?bool $force = false): CloseStatusUpdate;

    public function updateChannelPolicy(string $baseFeeMsat, int $feeRate, int $timeLockDelta, ?ChannelPoint $channelPoint = null);

    /**
     * @return ChannelFeeReport[]
     */
    public function feeReport(): array;

    public function getInfo(): GetInfoResponse;

    public function describeGraph(): ChannelGraph;

    public function getChanInfo(string $channelId): ChannelEdge;

    public function getNetworkInfo(): NetworkInfo;

    public function getNodeInfo(string $pubKey): NodeInfo;

    /** @return Route[] */
    public function queryRoutes(string $pubKey, string $amt, ?int $numRoutes = 0): array;

    public function addInvoice(string $memo, string $value, $expiry = 3600): AddInvoiceResponse;

    /** @return Invoice[] */
    public function listInvoices(bool $pendingOnly = false): array;

    public function lookupInvoice(string $rHash): Invoice;

    public function newWitnessAddress(): string;

    public function deleteAllPayments(): void;

    /**
     * @return Payment[]
     */
    public function listPayments(): array;

    public function decodePayReq(string $payReq): PayReq;

    /**
     * @return Peer[]
     */
    public function listPeers(): array;

    public function connectPeer(string $pubKey, string $host, bool $perm = false): void;

    public function disconnectPeer(string $pubKey): void;

    /**
     * @return Transaction[]
     */
    public function getTransactions(): array;

    public function sendCoins(string $addr, string $amount,? int $targetConf = 0, ? string $satPrByte = ''): string;
}