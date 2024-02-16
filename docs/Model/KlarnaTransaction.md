# KlarnaTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **string** | Error code if failed. See [transaction errors](https://docs.reepay.com/api/#transaction-errors). | [optional]
**type** | **string** | Transaction type: `klarna_pay_now`, `klarna_pay_later`, `klarna_slice_it`, `klarna_direct_bank_transfer`, `klarna_direct_debit` |
**ref_transaction** | **string** | Id of a possible referenced transaction | [optional]
**error_state** | **string** | Error state if failed: `pending`, `soft_declined`, `hard_declined` or `processing_error` | [optional]
**acquirer_message** | **string** | Acquirer message in case of error | [optional]
**klarna_id** | **string** | Klarna id | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


