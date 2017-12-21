<?php

namespace LightningSale\LndRest\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
use LightningSale\LndRest\Model\CreateWalletRequest;
use LightningSale\LndRest\Model\UnlockWalletRequest;

class WalletUnlockerResource extends Resource
{
    /**
     * 
     *
     * @param CreateWalletRequest $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function createWallet(CreateWalletRequest $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1/createwallet';
        $url .= ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param UnlockWalletRequest $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function unlockWallet(UnlockWalletRequest $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1/unlockwallet';
        $url .= ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
}