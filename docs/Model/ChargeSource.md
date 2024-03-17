# ChargeSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of charge source: &#x60;card&#x60; - existing customer card, &#x60;card_token&#x60; - card token, &#x60;mpo&#x60; - MobilePay Online, &#x60;vipps&#x60;, &#x60;vipps_recurring&#x60;, &#x60;swish&#x60;, &#x60;viabill&#x60;, &#x60;anyday&#x60;, &#x60;manual&#x60;, &#x60;applepay&#x60;, &#x60;googlepay&#x60;, &#x60;paypal&#x60;, &#x60;klarna_pay_now&#x60;, &#x60;klarna_pay_later&#x60;, &#x60;klarna_slice_it&#x60;, &#x60;klarna_direct_bank_transfer&#x60;, &#x60;klarna_direct_debit&#x60;, &#x60;resurs&#x60;, &#x60;mobilepay_subscriptions&#x60;, &#x60;emv_token&#x60;, &#x60;bcmc&#x60;, &#x60;blik&#x60;, &#x60;pp_blik_oc&#x60;, &#x60;giropay&#x60;, &#x60;ideal&#x60;, &#x60;p24&#x60;, &#x60;sepa&#x60;, &#x60;trustly&#x60;, &#x60;eps&#x60;, &#x60;estonia_banks&#x60;, &#x60;latvia_banks&#x60;, &#x60;lithuania_banks&#x60;, &#x60;mb_way&#x60;, &#x60;multibanco&#x60;, &#x60;mybank&#x60;, &#x60;payconiq&#x60;, &#x60;paysafecard&#x60;, &#x60;paysera&#x60;, &#x60;postfinance&#x60;, &#x60;satispay&#x60;, &#x60;wechatpay&#x60;, &#x60;santander&#x60;,  or &#x60;verkkopankki&#x60;, &#x60;offline_cash&#x60;, &#x60;offline_bank_transfer&#x60;, &#x60;offline_other&#x60; | 
**card** | **string** | Reference to customer card if source type &#x60;card&#x60; | [optional] 
**mps** | **string** | Reference to MobilePay Subscriptions payment method if source type &#x60;mobilepay_subscriptions&#x60; | [optional] 
**iban** | **string** | IBAN number if source type &#x60;sepa&#x60; | [optional] 
**fingerprint** | **string** | Uniquely identifies this particular card number if credit card source | [optional] 
**provider** | **string** | Card acquirer or card payment gateway used if card source: &#x60;reepay&#x60;, &#x60;clearhaus&#x60;, &#x60;nets&#x60;, &#x60;swedbank&#x60;, &#x60;handelsbanken&#x60;, &#x60;elavon&#x60;, &#x60;bambora&#x60;, &#x60;valitor&#x60;, &#x60;dibs&#x60;, &#x60;stripe&#x60;, &#x60;epay&#x60;, &#x60;test&#x60; | [optional] 
**frictionless** | **bool** | If the card transaction was exempted from a 3DS challenge | [optional] 
**vipps_recurring** | **string** | Reference to Vipps Recurring Subscriptions payment method if source type &#x60;vipps_recurring&#x60; | [optional] 
**sepa_mandate** | **string** | Reference to SEPA Mandate payment method if source type &#x60;sepa&#x60; | [optional] 
**offline_agreement_handle** | **string** | Agreement handle if source type &#x60;offline_cash&#x60;, &#x60;offline_bank_transfer&#x60;, &#x60;offline_other&#x60; | [optional] 
**auth_transaction** | **string** | Reference to authorization transaction if charge is settled after authorization | [optional] 
**card_type** | **string** | Card type if credit card source: &#x60;unknown&#x60;, &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;ffk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | [optional] 
**transaction_card_type** | **string** | Transaction card type if credit card source. Will differ from &#x60;card_type&#x60; if co-branded card. Transaction card type is the card type used for the transaction. &#x60;unknown&#x60;, &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;ffk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | [optional] 
**exp_date** | **string** | Card expire date on form MM-YY if credit card source | [optional] 
**masked_card** | **string** | Masked card number if credit card source | [optional] 
**card_country** | **string** | Card issuing country if credit card source, in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) | [optional] 
**strong_authentication_status** | **string** | Status for strong customer authentication: &#x60;threed_secure&#x60; - 3D Secure authenticated, &#x60;threed_secure_not_enrolled&#x60; - 3D Secure authentication not performed as card not enrolled, &#x60;secured_by_nets&#x60; - Secure by Nets authenticated | [optional] 
**three_d_secure_status** | **string** | If 3D Secure authenticated the 3D status will either be &#x60;Y&#x60; (fully authenticated) or &#x60;A&#x60; (attempted authenticated). An attempted authentication means that card issuer (e.g. bank) does not support 3D Secure so no full authentication has been performed. Attempted authentication normally means liability shift, but this can differ between acquirers. | [optional] 
**risk_rule** | **string** | If this parameter is set the charge has either been flagged or declined by a Reepay Risk Filter rule. For flag action rules the charge can be successful, but may require special attention. For block action rules the decline error will be &#x60;risk_filter_block&#x60;. | [optional] 
**acquirer_code** | **string** | Card acquirer error code in case of card error | [optional] 
**acquirer_message** | **string** | Acquirer message in case of error | [optional] 
**acquirer_reference** | **string** | Card acquirer reference to transaction in case of card source. E.g. Nets order id or Clearhaus reference. | [optional] 
**text_on_statement** | **string** | Resulting text on bank statement if known | [optional] 
**surcharge_fee** | **int** | Potential card surcharge fee added to amount if surcharging enabled | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

