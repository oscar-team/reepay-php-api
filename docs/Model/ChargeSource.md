# ChargeSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of charge source: `card`, `card_token` or `ideal` |
**card** | **string** | Reference to customer card if source type `card` | [optional]
**fingerprint** | **string** | Uniquely identifies this particular card number | [optional]
**auth_transaction** | **string** | Reference to authorization transaction if charge is settled after authorization | [optional]
**card_type** | **string** | Card type if credit card source: `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb` | [optional]
**exp_date** | **string** | Card expire date on form MM-YY if card source | [optional]
**masked_card** | **string** | Masked card number if card source | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


