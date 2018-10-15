# CardTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card** | [**\Reepay\Model\Card**](Card.md) | Card used for transaction |
**error** | **string** | Error code if failed. See [transaction errors](https://docs.reepay.com/api/#transaction-errors). | [optional]
**fingerprint** | **string** | Uniquely identifies this particular card number | [optional]
**ref_transaction** | **string** | Id of a possible referenced transaction | [optional]
**gw_id** | **string** | Gateway id for card | [optional]
**last_failed** | [**\DateTime**](\DateTime.md) | When the card transaction last failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional]
**first_failed** | [**\DateTime**](\DateTime.md) | When the card transaction first failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional]
**error_state** | **string** | Error state if failed: `pending`, `soft_declined`, `hard_declined` or `processing_error` | [optional]
**card_type** | **string** | Card type: `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb` |
**exp_date** | **string** | Card expire date on form MM-YY | [optional]
**masked_card** | **string** | Masked card number | [optional]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


