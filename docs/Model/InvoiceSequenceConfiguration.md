# InvoiceSequenceConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prefix** | **string** | Prefix of invoice number | [optional] 
**placeholder** | **string** | Placeholder depicting the invoice reset type interval | [optional] 
**delimiter_after_prefix** | **string** | Delimiter between prefix and placeholder | [optional] 
**delimiter_after_placeholder** | **string** | Delimiter between placeholder and number | [optional] 
**digits_number** | **int** | Number of digits in invoice numbers. If the invoice number contains less digits, the required count of trailing zeros will be added | [optional] 
**next_number** | **int** | The sequential number of first invoice that will be generated in current period | [optional] 
**number_after_reset** | **int** | The sequential number of first invoice that will be generated in all subsequent periods | [optional] 
**reset_type** | **string** | The frequency of resetting invoice numbers | [optional] 
**credit_note_settings** | [**\Reepay\Model\CreditNoteSettings**](CreditNoteSettings.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

