# CreatePayout

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique reference to payout. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. It is recommended to use a maximum of 20 characters as this will allow for the use of handle as reference on bank statements without truncation. | 
**destination** | **string** | The destination for the payout. Either an existing payment method for the customer or a card token. | 
**amount** | **int** | Amount in the smallest unit. Must be provided if charge/invoice does not already exists. | 
**currency** | **string** | Optional currency in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code. If not provided the account default currency will be used. | [optional] 
**text** | **string** | Optional text associated with the payout | [optional] 
**customer** | [**\Reepay\Model\CreateCustomer**](CreateCustomer.md) |  | [optional] 
**customer_handle** | **string** | Customer reference. If payout does not already exist either this reference must be provided, a create customer object must be provided or the destination must be a payment method reference (e.g. &#x60;ca_..&#x60;) identifying customer. Notice that customer cannot be changed for existing payout so if handle is provided it must match the customer handle for existing customer. | [optional] 
**text_on_statement** | **string** | Optional argument to define the text on bank statement. Characters must match regex &#x60;[\\x20-\\x7F]&#x60; | [optional] 
**acquirer_reference** | **string** | Optional reference for the transaction at the acquirer. Notice the following about this argument: 1. It only works for some acquirers. 2. Acquirers may have rigid rules on the content of the acquirer reference.  Not complying to these rules can result in declined payments. 3. It is already possible to define custom acquirer reference using templating in the Reepay Administration.  Contact support for help. We highly recommend to only supply this argument if absolutely necessary,  and the templated default acquirer reference is not sufficient. Maximum length is 128,  but most acquirers require a maximum length of 22 characters.  Truncating will be applied if too long for specific acquirer.  Characters must match regex &#x60;[\\x20-\\x7F]&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

