# Swagger\Client\WalletUnlockerApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWallet**](WalletUnlockerApi.md#createWallet) | **POST** /v1/createwallet | * lncli: &#x60;create&#x60; CreateWallet is used at lnd startup to set the encryption password for the wallet database.
[**unlockWallet**](WalletUnlockerApi.md#unlockWallet) | **POST** /v1/unlockwallet | * lncli: &#x60;unlock&#x60; UnlockWallet is used at startup of lnd to provide a password to unlock the wallet database.


# **createWallet**
> \Swagger\Client\Model\CreateWalletResponse createWallet($body)

* lncli: `create` CreateWallet is used at lnd startup to set the encryption password for the wallet database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WalletUnlockerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CreateWalletRequest(); // \Swagger\Client\Model\CreateWalletRequest | 

try {
    $result = $apiInstance->createWallet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletUnlockerApi->createWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateWalletRequest**](../Model/CreateWalletRequest.md)|  |

### Return type

[**\Swagger\Client\Model\CreateWalletResponse**](../Model/CreateWalletResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlockWallet**
> \Swagger\Client\Model\UnlockWalletResponse unlockWallet($body)

* lncli: `unlock` UnlockWallet is used at startup of lnd to provide a password to unlock the wallet database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WalletUnlockerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\UnlockWalletRequest(); // \Swagger\Client\Model\UnlockWalletRequest | 

try {
    $result = $apiInstance->unlockWallet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletUnlockerApi->unlockWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UnlockWalletRequest**](../Model/UnlockWalletRequest.md)|  |

### Return type

[**\Swagger\Client\Model\UnlockWalletResponse**](../Model/UnlockWalletResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

