# CopyCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | Optional reference given to the created payment method. Max length 64 with allowable characters [a-zA-Z0-9_.-@]. | [optional] 
**customer** | [**\Reepay\Model\CreateCustomer**](CreateCustomer.md) |  | [optional] 
**agreement** | **string** | Optional agreement id to define acquirer agreement to be used. | [optional] 
**currency** | **string** | Optional currency code to control agreement selection | [optional] 
**customer_handle** | **string** | Customer reference to an existing customer. Either this argument or &#x60;customer&#x60; must be provided. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

