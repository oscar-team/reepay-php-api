# UserAccountMfa

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id for the user assigned by Reepay | 
**email** | **string** | User email | 
**name** | **string** | User name | [optional] 
**state** | **string** | State of user for account: &#x60;active&#x60;, &#x60;invited&#x60; | 
**groups** | **string[]** | List of user groups | 
**permissions** | **string[]** | List of user permissions | 
**verified_email** | **bool** | Email verified | 
**mfa_method** | **string** | MFA method | [optional] 
**invite_expires** | [**\DateTime**](\DateTime.md) | Expiry date for invite | [optional] 
**totp_qr** | **string** | TOTP QR code | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

