# ChargeSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of charge source: `card` - existing customer card, `card_token` - card token, `mpo` - MobilePay Online, `vipps`, `vipps_recurring`, `swish`, `viabill`, `anyday`, `manual`, `applepay`, `googlepay`, `paypal`, `klarna_pay_now`, `klarna_pay_later`, `klarna_slice_it`, `klarna_direct_bank_transfer`, `klarna_direct_debit`, `resurs`, `mobilepay_subscriptions`, `emv_token`, `bcmc`, `blik`, `pp_blik_oc`, `giropay`, `ideal`, `p24`, `sepa`, `trustly`, `eps`, `estonia_banks`, `latvia_banks`, `lithuania_banks`, `mb_way`, `multibanco`, `mybank`, `payconiq`, `paysafecard`, `paysera`, `postfinance`, `satispay`, `wechatpay`, `santander`, `or verkkopankki` |
**card** | **string** | Reference to customer card if source type `card`  | [optional]
**mps** | **string** | Reference to MobilePay Subscriptions payment method if source type `mobilepay_subscriptions` | [optional]
**iban** | **string** | IBAN number if source type `sepa` | [optional]
**fingerprint** | **string** | Uniquely identifies this particular card number | [optional]
**provider** | **string** | Card acquirer or card payment gateway used if card source: `reepay`, `clearhaus`, `nets`, `swedbank`, `handelsbanken`, `elavon`, `bambora`, `valitor`, `dibs`, `stripe`, `epay`, `test` | [optional]
**frictionless** | **bool** | If the card transaction was exempted from a 3DS challenge | [optional]
**vipps_recurring** | **string** | Reference to Vipps Recurring Subscriptions payment method if source type `vipps_recurring` | [optional]
**sepa_mandate** | **string** | Reference to SEPA Mandatepayment method if source type `sepa` | [optional]
**auth_transaction** | **string** | Reference to authorization transaction if charge is settled after authorization | [optional]
**card_type** | **string** | Card type if credit card source: `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `ffk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb` | [optional]
**transaction_card_type** | **string** | Transaction card type if credit card source. Will differ from card_type if co-branded card. Transaction card type is the card type used for the transaction. `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `ffk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb` | [optional]
**exp_date** | **string** | Card expire date on form MM-YY if card source | [optional]
**masked_card** | **string** | Masked card number if card source | [optional]
**card_country** | **string** | Card issuing country if credit card source, in [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) | [optional]
**strong_authentication_status** | **string** | Status for strong customer authentication: `threed_secure` - 3D Secure authenticated, `threed_secure_not_enrolled` - 3D Secure authentication not performed as card not enrolled, `secured_by_nets` - Secure by Nets authenticated | [optional]
**three_d_secure_status** | **string** | If 3D Secure authenticated the 3D status will either be Y (fully authenticated) or A (attempted authenticated). An attempted authentication means that card issuer (e.g. bank) does not support 3D Secure so no full authentication has been performed. Attempted authentication normally means liability shift, but this can differ between acquirers. | [optional]
**risk_rule** | **string** | If this parameter is set the charge has either been flagged or declined by a Reepay Risk Filter rule. For flag action rules the charge can be successful, but may require special attention. For block action rules the decline error will be `risk_filter_block`. | [optional]
**acquirer_code** | **string** | Card acquirer error code in case of card error | [optional]
**acquirer_message** | **string** | Acquirer message in case of error | [optional]
**acquirer_reference** | **string** | Card acquirer reference to transaction in case of card source. E.g. Nets order id or Clearhaus reference. | [optional]
**text_on_statement** | **string** | Resulting text on bank statement if known | [optional]
**surcharge_fee** | **string** | Potential card surcharge fee added to amount if surcharging enabled | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


