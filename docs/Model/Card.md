# Card

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id for payment method | 
**state** | **string** | State of the payment method: &#x60;active&#x60;, &#x60;inactivated&#x60;, &#x60;failed&#x60;, &#x60;pending&#x60; or &#x60;deleted&#x60; | 
**customer** | **string** | Customer by handle | 
**reference** | **string** | Optional reference provided when creating the payment method. For payment methods created with Reepay Checkout the reference will correspond to the session id for the Checkout session that created the payment method. | [optional] 
**failed** | [**\DateTime**](\DateTime.md) | Date when the payment method failed. In ISO-8601 extended offset date-time format. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Date when the payment method was created. In ISO-8601 extended offset date-time format. | 
**fingerprint** | **string** | Uniquely identifies this particular card number | [optional] 
**reactivated** | [**\DateTime**](\DateTime.md) | Date and time of reactivation if the card has been reactivated from failed state. In ISO-8601 extended offset date-time format. | [optional] 
**gw_ref** | **string** | Card gateway reference id | 
**card_type** | **string** | Card type: &#x60;unknown&#x60;, &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;ffk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | 
**transaction_card_type** | **string** | Card type used in authentication and the card type used for subsequent MIT transactions. Will differ from &#x60;card_type&#x60; if co-branded card. &#x60;unknown&#x60;, &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;ffk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | [optional] 
**exp_date** | **string** | Card expire date on form MM-YY | [optional] 
**masked_card** | **string** | Masked card number | [optional] 
**last_success** | [**\DateTime**](\DateTime.md) | Date and time of last successful use of the card. In ISO-8601 extended offset date-time format. | [optional] 
**last_failed** | [**\DateTime**](\DateTime.md) | Date and time of last failed use of the card. In ISO-8601 extended offset date-time format. | [optional] 
**first_fail** | [**\DateTime**](\DateTime.md) | Date and time of first successful use of the card. In ISO-8601 extended offset date-time format. | [optional] 
**error_code** | **string** | An error code from the last failed use of the card. See [transaction errors](https://reference.reepay.com/api/#transaction-errors). | [optional] 
**error_state** | **string** | Error state from last failed use of the card: &#x60;pending&#x60;, &#x60;soft_declined&#x60;, &#x60;hard_declined&#x60; or &#x60;processing_error&#x60; | [optional] 
**strong_authentication_status** | **string** | Status for strong customer authentication: &#x60;threed_secure&#x60; - 3D Secure authenticated, &#x60;threed_secure_not_enrolled&#x60; - 3D Secure authentication not performed as card not enrolled, &#x60;secured_by_nets&#x60; - Secure by Nets authenticated | [optional] 
**three_d_secure_status** | **string** | If 3D Secure authenticated the 3D status will either be &#x60;Y&#x60; (fully authenticated) or &#x60;A&#x60; (attempted authenticated). An attempted authentication means that card issuer (e.g. bank) does not support 3D Secure so no full authentication has been performed. Attempted authentication normally means liability shift, but this can differ between acquirers. | [optional] 
**risk_rule** | **string** | If this parameter is set the card has been flagged by Reepay Risk Filter with a flag rule. Special attention may be required before using the card for recurring payments or subscription sign-up. | [optional] 
**card_country** | **string** | Card issuing country in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

