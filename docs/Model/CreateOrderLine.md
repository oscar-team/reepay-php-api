# CreateOrderLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ordertext** | **string** | Order line text | 
**amount** | **int** | Per quantity amount in the smallest unit for the currency | 
**vat** | **float** | Optional vat for order line. Account default is used if none given. | [optional] 
**quantity** | **int** | Quantity. Default 1. | [optional] 
**amount_incl_vat** | **bool** | Whether the per quantity amount is including VAT. Defaults to true. | [optional] 
**tax_policy** | **string** | Optional tax policy handle for this order line. Account default vat is used if none given. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

