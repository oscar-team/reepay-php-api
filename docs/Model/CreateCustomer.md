# CreateCustomer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Customer email. Validated against RFC 822. | [optional] 
**address** | **string** | Customer address | [optional] 
**address2** | **string** | Customer address2 | [optional] 
**city** | **string** | Customer city | [optional] 
**country** | **string** | Customer country in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). E.g. US. | [optional] 
**phone** | **string** | Customer phone number | [optional] 
**company** | **string** | Customer company | [optional] 
**vat** | **string** | Customer vat number | [optional] 
**handle** | **string** | Per account unique handle for the customer. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. Must be provided if generate_handle is not defined. | [optional] 
**test** | **bool** | Test flag. If given it will be verified that the account state matches the intended create state. | [optional] 
**metadata** | **map[string,object]** | Custom metadata. | [optional] 
**first_name** | **string** | Customer first name | [optional] 
**last_name** | **string** | Customer last name | [optional] 
**postal_code** | **string** | Customer postal code | [optional] 
**debtor_id** | **int** | Debtor identifier for this customer. If set this is unique and cannot be changed anymore. | [optional] 
**generate_handle** | **bool** | Auto generate handle on the form cust-[sequence_number] | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

