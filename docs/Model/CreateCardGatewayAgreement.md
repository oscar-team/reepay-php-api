# CreateCardGatewayAgreement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currencies** | **string[]** | Set of currencies supported by agreement. Each currency in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code. | 
**surcharge** | **bool** | Add acquirer surcharge fee if possible | [optional] 
**name** | **string** | Optional name | [optional] 
**provider** | **string** | Card gateway provider type | 
**card_types** | **string[]** | Card types supported by agreement | [optional] 
**payment_types** | **string[]** | Set of supported payment types for agreement: &#x60;card&#x60;, &#x60;applepay&#x60;, &#x60;googlepay&#x60;, &#x60;mobilepay&#x60;, &#x60;vipps&#x60;. If not defined defaults to all. | [optional] 
**provider_settings** | **map[string,object]** | Key value map of provider settings | [optional] 
**fee_configuration** | [**map[string,object][]**](map.md) | Prioritized list of fee configuration entries | [optional] 
**threed_secure** | **bool** | Use 3DSecure for non-recurring payments (if supported by provider) | [optional] 
**threed_secure_recurring** | **bool** | Use 3DSecure for recurring payments (if supported by provider) | [optional] 
**secured_by_nets** | **bool** | Use Secured By Nets for non-recurring payments (if supported by provider) | [optional] 
**secured_by_nets_recurring** | **bool** | Use Secured By Nets for recurring payments (if supported by provider) | [optional] 
**default_require_sca** | **bool** | Default behaviour if no specific SCA handing is defined in payment sessions. If enabled SCA will be required and un-enrolled cards will be declined. | [optional] 
**disallow_threed_secure_attempted** | **bool** | Disallow 3D Secure status attempted which means that card issuer does not support 3D Secure so authentication could not be performed. An attempted 3D Secure flow normally results in liability shift. | [optional] 
**payout** | **bool** | Use agreement for payout (if supported by provider) | [optional] 
**vts_configuration** | [**\Reepay\Model\EmvConfiguration**](EmvConfiguration.md) |  | [optional] 
**scof_configuration** | [**\Reepay\Model\EmvConfiguration**](EmvConfiguration.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

