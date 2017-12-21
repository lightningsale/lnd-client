<?php

namespace LightningSale\LndRest\Normalizer;

use LightningSale\LndRest\Jane\ReferenceNormalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new ReferenceNormalizer();
        $normalizers[] = new PendingChannelResponseClosedChannelNormalizer();
        $normalizers[] = new PendingChannelResponseForceClosedChannelNormalizer();
        $normalizers[] = new PendingChannelResponsePendingChannelNormalizer();
        $normalizers[] = new PendingChannelResponsePendingOpenChannelNormalizer();
        $normalizers[] = new ActiveChannelNormalizer();
        $normalizers[] = new AddInvoiceResponseNormalizer();
        $normalizers[] = new ChannelBalanceResponseNormalizer();
        $normalizers[] = new ChannelCloseUpdateNormalizer();
        $normalizers[] = new ChannelEdgeNormalizer();
        $normalizers[] = new ChannelEdgeUpdateNormalizer();
        $normalizers[] = new ChannelFeeReportNormalizer();
        $normalizers[] = new ChannelGraphNormalizer();
        $normalizers[] = new ChannelOpenUpdateNormalizer();
        $normalizers[] = new ChannelPointNormalizer();
        $normalizers[] = new CloseStatusUpdateNormalizer();
        $normalizers[] = new ClosedChannelUpdateNormalizer();
        $normalizers[] = new ConfirmationUpdateNormalizer();
        $normalizers[] = new ConnectPeerRequestNormalizer();
        $normalizers[] = new ConnectPeerResponseNormalizer();
        $normalizers[] = new CreateWalletRequestNormalizer();
        $normalizers[] = new DebugLevelResponseNormalizer();
        $normalizers[] = new FeeReportResponseNormalizer();
        $normalizers[] = new FeeUpdateRequestNormalizer();
        $normalizers[] = new GetInfoResponseNormalizer();
        $normalizers[] = new GraphTopologyUpdateNormalizer();
        $normalizers[] = new HTLCNormalizer();
        $normalizers[] = new HopNormalizer();
        $normalizers[] = new InvoiceNormalizer();
        $normalizers[] = new LightningAddressNormalizer();
        $normalizers[] = new LightningNodeNormalizer();
        $normalizers[] = new ListChannelsResponseNormalizer();
        $normalizers[] = new ListInvoiceResponseNormalizer();
        $normalizers[] = new ListPaymentsResponseNormalizer();
        $normalizers[] = new ListPeersResponseNormalizer();
        $normalizers[] = new NetworkInfoNormalizer();
        $normalizers[] = new NewAddressResponseNormalizer();
        $normalizers[] = new NodeAddressNormalizer();
        $normalizers[] = new NodeInfoNormalizer();
        $normalizers[] = new NodeUpdateNormalizer();
        $normalizers[] = new OpenChannelRequestNormalizer();
        $normalizers[] = new OpenStatusUpdateNormalizer();
        $normalizers[] = new PayReqNormalizer();
        $normalizers[] = new PaymentNormalizer();
        $normalizers[] = new PeerNormalizer();
        $normalizers[] = new PendingChannelResponseNormalizer();
        $normalizers[] = new PendingHTLCNormalizer();
        $normalizers[] = new PendingUpdateNormalizer();
        $normalizers[] = new QueryRoutesResponseNormalizer();
        $normalizers[] = new RouteNormalizer();
        $normalizers[] = new RoutingPolicyNormalizer();
        $normalizers[] = new SendCoinsRequestNormalizer();
        $normalizers[] = new SendCoinsResponseNormalizer();
        $normalizers[] = new SendManyResponseNormalizer();
        $normalizers[] = new SendRequestNormalizer();
        $normalizers[] = new SendResponseNormalizer();
        $normalizers[] = new SignMessageResponseNormalizer();
        $normalizers[] = new TransactionNormalizer();
        $normalizers[] = new TransactionDetailsNormalizer();
        $normalizers[] = new UnlockWalletRequestNormalizer();
        $normalizers[] = new VerifyMessageResponseNormalizer();
        $normalizers[] = new WalletBalanceResponseNormalizer();
        return $normalizers;
    }
}