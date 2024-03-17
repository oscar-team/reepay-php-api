# AdditionalCost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice** | **string** | Invoice id for the invoice the additional cost has been assigned to once it has been transferred | [optional] 
**state** | **string** | State of the additional cost, one of the following: &#x60;pending&#x60;, &#x60;transferred&#x60;, &#x60;cancelled&#x60;. A pending additonal cost has not yet been transferred to a invoice. Cancelled addtional costs have been cancelled manually. | 
**subscription** | **string** | Subscription handle | 
**handle** | **string** | Per account unique handle for the additional cost | 
**ordertext** | **string** | Order text for the additional cost. Will be on affected invoices. | 
**quantity** | **int** | Quantity for the additional cost. Default 1. | [optional] 
**amount** | **int** | Additional cost total amount | 
**vat** | **float** | Optional vat for additional cost. Account default is used if none given. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Date when the additional cost was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**amount_incl_vat** | **bool** | Whether the amount is including VAT. Default true. | 
**amount_vat** | **int** | Additional cost vat amount | 
**amount_ex_vat** | **int** | Additional cost amount without vat | 
**tax_policy** | **string** | Optional tax policy handle for this additional cost. If vat and tax policy is given, vat will be ignored. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

