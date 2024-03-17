# CreateRefund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice** | **string** | Handle or id for invoice/charge to refund | 
**key** | **string** | Optional idempotency key. Only one refund can be performed for the same key. An idempotency key identifies uniquely the request and multiple requests with the same key and invoice will yield the same result. In case of networking errors the same request with same key can safely be retried. | [optional] 
**amount** | **int** | Optional amount in the smallest unit for the account currency. Either &#x60;amount&#x60; or &#x60;note_lines&#x60; can be provided, if neither is provided the full refundable amount is refunded. | [optional] 
**vat** | **float** | Optional vat for this refund. | [optional] 
**text** | **string** | Optional refund text to use on credit note. Used in conjunction with &#x60;amount&#x60;. Ignored if &#x60;note_lines&#x60; is provided. | [optional] 
**amount_incl_vat** | **bool** | Whether the amount is including VAT. Default true. | [optional] 
**note_lines** | [**\Reepay\Model\CreateCreditNoteLine[]**](CreateCreditNoteLine.md) | Refund credit note lines to give detailed information for credit note. Alternative to &#x60;amount&#x60;. | [optional] 
**manual_transfer** | [**\Reepay\Model\ManualRefundTransfer**](ManualRefundTransfer.md) |  | [optional] 
**acquirer_reference** | **string** | Optional reference for the transaction at the acquirer. Notice the following about this argument: 1. It only works for some acquirers. 2. Acquirers may have rigid rules on the content of the acquirer reference.  Not complying to these rules can result in declined payments. 3. It is already possible to define custom acquirer reference using templating in the Reepay Administration.  Contact support for help. We highly recommend to only supply this argument if absolutely necessary,  and the templated default acquirer reference is not sufficient. Maximum length is 128,  but most acquirers require a maximum length of 22 characters.  Truncating will be applied if too long for specific acquirer.  Characters must match regex &#x60;[\\x20-\\x7F]&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

