# UserLogin

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | Authentication token to use in X-Auth-Token | 
**user** | [**\Reepay\Model\User**](User.md) |  | 
**account** | [**\Reepay\Model\Account**](Account.md) |  | 
**organisation** | [**\Reepay\Model\Organisation**](Organisation.md) |  | 
**organisations** | [**\Reepay\Model\OrganisationLogin[]**](OrganisationLogin.md) | List of organisations for user | 
**groups** | **string[]** | List user groups | 
**permissions** | **string[]** | List user permissions | 
**token_ttl** | **int** | Token time-to-live in minutes | 
**mfa_required** | **bool** | User needs to add MFA | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

