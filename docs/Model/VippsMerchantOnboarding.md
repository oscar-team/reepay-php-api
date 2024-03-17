# VippsMerchantOnboarding

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization_number** | **string** | Organization number of the merchant, in the correct format for the organization&#x27;s country. For Norway: The orgno must be 9 digits without spaces, the merchant must be active in Brønnøysundregistrene and the orgno must be for the main entity (\&quot;hovedenhet\&quot;), not a sub entity (\&quot;underenhet\&quot;). For other countries: The orgno, address, etc is validated as much as practically possible. | 
**name** | **string** | The merchant&#x27;s name. This name will be displayed in the Vipps app. This may be different from the legal name in companyName. | 
**mcc_code** | **string** | Four-digit number listed in ISO 18245 for retail financial services, used to classify a business by the types of goods or services it provides. | 
**logo** | **string** | Merchant logo url. The logo will be displayed in the Vipps app, both when paying and on receipts. The logo must be in PNG (Portable Network Graphics) format. Square images are recommended. The longest side can not be more than 1000 pixels. The minimum size is 100 x 100 pixels. | 
**email** | **string** | Contact email for the merchant. Can be same as companyEmail | [optional] 
**website** | **string** | The URL for the merchant&#x27;s website | [optional] 
**address_line1** | **string** | Address Line 1 | 
**address_line2** | **string** | Address Line 2 | [optional] 
**city** | **string** | City | 
**post_code** | **string** | Postcode | 
**country** | **string** | Two letter country code based on ISO 3166 | 
**company_name** | **string** | The legal name of the organization. This may be different from name, which is displayed in the Vipps app. | 
**company_email** | **string** | The merchant&#x27;s email address | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

