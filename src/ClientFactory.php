<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 10.01.18
 * Time: 10:10
 */

namespace LightningSale\LndClient;


use Psr\Log\LoggerInterface;

class ClientFactory
{
    public static function createRestClient(
        string $lndHost,
        string $lndRestPort,
        string $lndCertificateFile,
        string $adminMacaroonFilePath,
        LoggerInterface $logger
    ): RestClient {
        $client = new \GuzzleHttp\Client([
            'base_uri' => "https://$lndHost:$lndRestPort",
            'verify' => $lndCertificateFile,
            'headers' => [
                'Grpc-Metadata-macaroon' => bin2hex(file_get_contents($adminMacaroonFilePath))
            ]
        ]);

        return new RestClient($client, $logger);
    }
}