# AccountFundingInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_account_number** | **string** | The sender’s account number, i.e. an identification of the account being funded by the debit. It can be an IBAN, a proprietary wallet number, a prepaid PAN, etc. | [optional] 
**sender_reference** | **string** | Sender&#x27;s reference number. You must be able to uniquely identify the sender using this number. Required if the merchant account’s Business Application Identifier (BAI) is Funds Disbursement (FD). | [optional] 
**sender_first_name** | **string** | Sender’s first name. Required only if &#x27;sender_address&#x27; is provided. | [optional] 
**sender_last_name** | **string** | Sender’s last name. Required only if &#x27;sender_address&#x27; is provided. | [optional] 
**sender_address** | **string** | Sender’s address (street name, house number, etc.) | [optional] 
**sender_city** | **string** | Sender’s city | [optional] 
**sender_postal_code** | **string** | Sender’s postal code | [optional] 
**sender_state** | **string** | Sender’s state. Required for countries US and CA | [optional] 
**sender_country** | **string** | Sender’s country in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) | [optional] 
**sender_date_of_birth** | **string** | Sender’s date of birth in format yyyy-MM-dd. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

