# ChargeSource

## Properties
Name | Type | Description                                                                                                                                            | Notes
------------ | ------------- |--------------------------------------------------------------------------------------------------------------------------------------------------------| -------------
**type** | **string** | Type of charge source: `card` - existing customer card, `card_token` - card token, `mpo` - MobilePay Online, `vipps`, `vipps_recurring`, `swish`, `viabill`, `anyday`, `manual`, `applepay`, `googlepay`, `paypal`, `klarna_pay_now`, `klarna_pay_later`, `klarna_slice_it`, `klarna_direct_bank_transfer`, `klarna_direct_debit`, `resurs`, `bancontact`, `bcmc`, `blik`, `giropay`, `ideal`, `p24`, `sepa`, `verkkopankki` or `mobilepay_subscriptions`                                                                                   |
**card** | **string** | Reference to customer card if source type `card`                                                                                                       | [optional]
**fingerprint** | **string** | Uniquely identifies this particular card number                                                                                                        | [optional]
**auth_transaction** | **string** | Reference to authorization transaction if charge is settled after authorization                                                                        | [optional]
**card_type** | **string** | Card type if credit card source: `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb` | [optional]
**exp_date** | **string** | Card expire date on form MM-YY if card source                                                                                                          | [optional]
**masked_card** | **string** | Masked card number if card source                                                                                                                      | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


