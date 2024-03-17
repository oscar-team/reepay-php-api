# CreateAdditionalCost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique handle for the additional cost. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. | 
**ordertext** | **string** | Order text for the additional cost. Will be on affected invoices. | 
**quantity** | **int** | Quantity for the additional cost. Default 1. | [optional] 
**amount** | **int** | Per quantity amount in the smallest unit for the subscription currency | 
**vat** | **float** | Optional vat for additional cost. Account default is used if none given. | [optional] 
**subscription** | **string** | Subscription by handle to add the additional cost to | 
**amount_incl_vat** | **bool** | Whether the per quantity amount is including VAT. Defaults to true. | [optional] 
**tax_policy** | **string** | Optional tax policy handle for this additional cost. If vat and tax policy is given, vat will be ignored. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

