# CreateCustomerSignup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Customer email. Validated against RFC 822. | [optional] 
**address** | **string** | Customer address | [optional] 
**city** | **string** | Customer city | [optional] 
**country** | **string** | Customer country in ISO 3166-1 alpha-2 | [optional] 
**phone** | **string** | Customer phone number | [optional] 
**company** | **string** | Customer company | [optional] 
**coupons** | **string[]** | Coupons | [optional] 
**signup_page_handle** | **string** | Signup page handle. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. | 
**product_handle** | **string** | Product handle. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. | 
**account_id** | **string** | Account ID. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. | 
**first_name** | **string** | Customer first name | [optional] 
**last_name** | **string** | Customer last name | [optional] 
**postal_code** | **string** | Customer postal code | [optional] 
**vat_number** | **string** | Customer VAT number | [optional] 
**plan_quantity** | **int** | Plan quantity. This parameter allows customers to customize the number of subscriptions that can be purchased simultaneously. This parameter is taken into account only if the product&#x27;s configuration allows quantity overwriting; otherwise, the quantity specified in the subscription plan is used. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

