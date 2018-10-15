# Credit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscription** | **string** | Subscription by handle to add the credit to |
**handle** | **string** | Per account unique handle for the credit. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. |
**amount** | **int** | Credit amount in the smallest unit for the account currency |
**text** | **string** | Text describing the credit. Will be on affected invoices. |
**state** | **string** | State of the credit, one of the following: `pending`, `transferred`, `cancelled`. Pending credits have not yet been transferred fully to invoices. Cancelled credits have been manually cancelled. |
**created** | [**\DateTime**](\DateTime.md) | Date when the credit was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. |
**valid_from** | **string** | Date on the form yyyy-MM-dd from which the credit is valid. The credit will not be deducted from invoices before this date. | [optional]
**credit_invoices** | [**\Reepay\Model\CreditInvoice[]**](CreditInvoice.md) | List of invoices where the credit is applied | [optional]
**pending_amount** | **int** | Remaining amount not transferred to invoices |

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


