# Settle

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**due** | **string** | Optional due date and time on the form yyyy-MM-dd, yyyyMMdd, yyyy-MM-ddTHH:mm and yyyy-MM-ddTHH:mm:ss from which the invoice should be tried settled. Only allowed for one-time customer invoices. | [optional] 
**payment_method** | **string** | Payment method id to use to settle invoice. Must be a payment method supporting instant settle, e.g. credit card. A special value &#x60;auto&#x60; can be used to indicate that the newest active customer payment method should be used. Is required for one-time invoices if the amount on the invoice is more than zero. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

