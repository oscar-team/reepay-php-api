# Card

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id for payment method |
**state** | **string** | State of the payment method: `active`, `inactivated`, `failed` or `deleted` |
**customer** | **string** | Customer by handle |
**failed** | [**\DateTime**](\DateTime.md) | Date when the payment method failed. In ISO-8601 extended offset date-time format. | [optional]
**created** | [**\DateTime**](\DateTime.md) | Date when the payment method was created. In ISO-8601 extended offset date-time format. |
**fingerprint** | **string** | Uniquely identifies this particular card number | [optional]
**reactivated** | [**\DateTime**](\DateTime.md) | Date and time of reactivation if the card has been reactivated from failed state. In ISO-8601 extended offset date-time format. | [optional]
**gw_ref** | **string** | Card gateway reference id |
**card_type** | **string** | Card type: `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb` |
**exp_date** | **string** | Card expire date on form MM-YY | [optional]
**masked_card** | **string** | Masked card number | [optional]
**last_success** | [**\DateTime**](\DateTime.md) | Date and time of last succesfull use of the card. In ISO-8601 extended offset date-time format. | [optional]
**last_failed** | [**\DateTime**](\DateTime.md) | Date and time of last failed use of the card. In ISO-8601 extended offset date-time format. | [optional]
**first_fail** | [**\DateTime**](\DateTime.md) | Date and time of first succesfull use of the card. In ISO-8601 extended offset date-time format. | [optional]
**error_code** | **string** | An error code from the last failed use of the card. See [transaction errors](https://docs.reepay.com/api/#transaction-errors). | [optional]
**error_state** | **string** | Error state from last failed use of the card: `pending`, `soft_declined`, `hard_declined` or `processing_error` | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


