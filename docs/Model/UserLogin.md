# UserLogin

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | Authentication token to use in X-Auth-Token |
**user** | [**\Reepay\Model\User**](User.md) | Logged in user |
**account** | [**\Reepay\Model\AccountLogin**](AccountLogin.md) | Account logged into |
**organisation** | [**\Reepay\Model\Organisation**](Organisation.md) | Organisation for account logged into |
**organisations** | [**\Reepay\Model\OrganisationLogin[]**](OrganisationLogin.md) | List of organisations for user |
**groups** | **string[]** | List user groups |
**permissions** | **string[]** | List user permissions |
**token_ttl** | **int** | Token time-to-live in minutes |

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


