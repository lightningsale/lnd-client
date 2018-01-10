# FeeUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**global** | **bool** | / If set, then this fee update applies to all currently active channels. | [optional] 
**chan_point** | [**\Swagger\Client\Model\ChannelPoint**](ChannelPoint.md) | / If set, this fee update will target a specific channel. | [optional] 
**base_fee_msat** | **string** | / The base fee charged regardless of the number of milli-satoshis sent. | [optional] 
**fee_rate** | **double** | / The effective fee rate in milli-satoshis. The precision of this value goes up to 6 decimal places, so 1e-6. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


