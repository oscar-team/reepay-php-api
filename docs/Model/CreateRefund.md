# CreateRefund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice** | **string** | Handle or id for invoice/charge to refund | 
**key** | **string** | Optional idempotency key. Only one refund can be performed for the same key. An idempotency key identifies uniquely the request and multiple requests with the same key and invoice will yield the same result. In case of networking errors the same request with same key can safely be retried. | [optional] 
**amount** | **int** | Optional amount in the smallest unit for the account currency. Either &#x60;amount&#x60; or &#x60;note_lines&#x60; can be provided, if neither is provided the full refundable amount is refunded. | [optional] 
**text** | **string** | Optional refund text to use on credit note. Used in conjunction with &#x60;amount&#x60;. Ignored if &#x60;note_lines&#x60; is provided. | [optional] 
**note_lines** | [**\Swagger\Client\Model\CreateCreditNoteLine[]**](CreateCreditNoteLine.md) | Refund credit note lines to give detailed information for credit note. Either this or &#x60;amount&#x60; must be provided. | [optional] 
**manual_transfer** | [**\Swagger\Client\Model\ManualRefundTransfer**](ManualRefundTransfer.md) | Optional manual transfer. If given no refund will be performed on potential online settled transaction like card transaction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


