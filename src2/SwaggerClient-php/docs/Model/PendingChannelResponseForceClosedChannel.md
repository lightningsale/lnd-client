# PendingChannelResponseForceClosedChannel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | [**\Swagger\Client\Model\PendingChannelResponsePendingChannel**](PendingChannelResponsePendingChannel.md) |  | [optional] 
**closing_txid** | **string** |  | [optional] 
**limbo_balance** | **string** |  | [optional] 
**maturity_height** | **int** |  | [optional] 
**blocks_til_maturity** | **int** | Remaining # of blocks until the commitment output can be swept. Negative values indicate how many blocks have passed since becoming mature. | [optional] 
**recovered_balance** | **string** |  | [optional] 
**pending_htlcs** | [**\Swagger\Client\Model\PendingHTLC[]**](PendingHTLC.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


