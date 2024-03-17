# ExtendAuthResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | Reepay state: &#x60;accepted&#x60;, &#x60;soft_declined&#x60;, &#x60;hard_declined&#x60; or &#x60;processing_error&#x60;. Soft and hard declines indicate a card decline. A soft decline is possibly recoverable and a subsequent request with the same card may succeed. E.g. insufficient funds. A processing error indicates an error verifying the card either at Reepay, the acquirer, or between Reepay and the acquirer. | [optional] 
**error** | **string** | Reepay error code if not state &#x60;accepted&#x60;. See [transaction errors](https://reference.reepay.com/api/#transaction-errors). | [optional] 
**acquirer_code** | **string** | Card acquirer error code in case of card error | [optional] 
**acquirer_message** | **string** | Acquirer message in case of error | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

