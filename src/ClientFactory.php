<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 10.01.18
 * Time: 10:10
 */

namespace LightningSale\LndClient;


class ClientFactory
{
    public static function createRestClient(
        string $lndHost,
        string $lndRestPort,
        string $rpcUsername,
        string $rpcPassword,
        string $lndCertificateFile
    ): RestClient
    {
        $client = new \GuzzleHttp\Client([
            'base_uri' => "https://$rpcUsername:$rpcPassword@$lndHost:$lndRestPort",
            'verify' => $lndCertificateFile,
        ]);

        return new RestClient($client);
    }
}