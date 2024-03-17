# InvoiceCreditNoteV2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Credit note id | 
**invoice** | **string** | Invoice credited by this note | 
**transaction** | **string** | Refund transaction id if credit note has an associated refund | [optional] 
**credit** | **string** | Credit reference if the credit note relates to a subscription credit | [optional] 
**amount** | **int** | Credit note amount | 
**created** | [**\DateTime**](\DateTime.md) | Creation date for note, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**currency** | **string** | Credit note currency in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code | 
**customer** | **string** | Customer handle | 
**subscription** | **string** | Subscription handle, will be null for a one-time customer invoice | [optional] 
**credits** | [**\Reepay\Model\CreditInvoice[]**](CreditInvoice.md) | Credits applied to credit note | 
**amount_vat** | **int** | Credit note vat amount calculated as rounded summed fractional vats for each credit note lines | 
**amount_ex_vat** | **int** | Credit note total amount excluding VAT calculated as summed amounts excl. vats for each credit note lines | [optional] 
**credit_note_lines** | [**\Reepay\Model\CreditNoteLine[]**](CreditNoteLine.md) | Credit note lines | 
**accounting_number** | **string** | Credit note accounting number | [optional] 
**debtor_id** | **int** | Customer debtor id | [optional] 
**download_url** | **string** | Url to credit note pdf | [optional] 
**payable_amount** | **int** | The credit note amount to be payed including VAT | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

