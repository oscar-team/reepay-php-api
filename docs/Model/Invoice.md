# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Invoice id assigned by Reepay | 
**handle** | **string** | Per account unique handle. Provided at on-demand invoice/charge creation or set to &#x60;inv-&lt;invoice_number&gt;&#x60; for automatically created subscription invoices | 
**customer** | **string** | Customer handle | 
**subscription** | **string** | Subscription handle, will be null for a one-time customer invoice | [optional] 
**plan** | **string** | Subscription plan handle for the plan used to automatically create the invoice or the case that an on-demand subscription invoice has been created that should include a plan order line | [optional] 
**state** | **string** | The invoice state one of the following: &#x60;created&#x60;, &#x60;pending&#x60;, &#x60;dunning&#x60;, &#x60;settled&#x60;, &#x60;cancelled&#x60;, &#x60;authorized&#x60;, &#x60;failed&#x60; | 
**processing** | **bool** | For asynchronous payment methods, e.g. MobilePay subscriptions, this flag indicates that an invoice transaction is in state processing and is awaiting result. | [optional] 
**type** | **string** | The type of invoice: &#x60;s&#x60; - subscription recurring, &#x60;so&#x60; - subscription one-time, &#x60;soi&#x60; - subscription one-time instant, &#x60;co&#x60; - customer one-time, &#x60;ch&#x60; - charge | 
**amount** | **int** | The invoice amount including VAT | 
**number** | **int** | Sequential invoice number. Only present for subscription and customer invoices. | [optional] 
**currency** | **string** | Invoice currency in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code | 
**due** | [**\DateTime**](\DateTime.md) | When is the invoice due, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**failed** | [**\DateTime**](\DateTime.md) | When the invoice failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**settled** | [**\DateTime**](\DateTime.md) | When the invoice settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**cancelled** | [**\DateTime**](\DateTime.md) | When the invoice was cancelled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**authorized** | [**\DateTime**](\DateTime.md) | When the invoice was authorized, if the invoice went through an authorize and settle flow, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**credits** | [**\Reepay\Model\CreditInvoice[]**](CreditInvoice.md) | Credits applied to invoice | 
**created** | [**\DateTime**](\DateTime.md) | When the invoice was created, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**plan_version** | **int** | Subscription plan version | [optional] 
**dunning_plan** | **string** | Dunning plan handle | [optional] 
**discount_amount** | **int** | The potential discount amount deducted from the invoice amount including VAT | 
**org_amount** | **int** | The invoice original amount including VAT, may differ from amount if adjustments have been applied for the invoice | 
**amount_vat** | **int** | The invoice vat amount calculated as rounded summed fractional vats for each orderline | 
**amount_ex_vat** | **int** | The invoice amount without vat | 
**settled_amount** | **int** | Settled amount | 
**refunded_amount** | **int** | Refunded amount | 
**authorized_amount** | **int** | Authorized amount | [optional] 
**credited_amount** | **int** | Credited amount | [optional] 
**period_number** | **int** | The subscription period this invoice is for | [optional] 
**recurring_payment_method** | **string** | Optional reference to recurring payment method created in conjunction with charging | [optional] 
**order_lines** | [**\Reepay\Model\OrderLine[]**](OrderLine.md) | Order lines for invoice sorted by descending timestamp | 
**additional_costs** | **string[]** | Additional cost handles for any additional costs added to this invoice | 
**transactions** | [**\Reepay\Model\Transaction[]**](Transaction.md) | Invoice transactions | 
**dunning_start** | [**\DateTime**](\DateTime.md) | When dunning for the invoice was started, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**dunning_count** | **int** | Number of dunning events for invoice (number of reminders sent) | [optional] 
**dunning_expired** | [**\DateTime**](\DateTime.md) | When dunning for the invoice expired, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**period_from** | [**\DateTime**](\DateTime.md) | The start of billing period if the invoice is for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**period_to** | [**\DateTime**](\DateTime.md) | The end of billing period if the invoice is for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**settle_later** | **bool** | Whether this is a customer one-time invoice that will be settled later | [optional] 
**settle_later_payment_method** | **string** | The payment method to use for a later settle of a one-time customer invoice | [optional] 
**billing_address** | [**\Reepay\Model\InvoiceBillingAddress**](InvoiceBillingAddress.md) |  | [optional] 
**shipping_address** | [**\Reepay\Model\InvoiceShippingAddress**](InvoiceShippingAddress.md) |  | [optional] 
**accounting_number** | **string** | Invoice accounting number | [optional] 
**debtor_id** | **int** | Customer debtor id | [optional] 
**download_url** | **string** | Url to invoice pdf | [optional] 
**accounting_created_date** | [**\DateTime**](\DateTime.md) | When the accounting invoice was created. An accounting invoice is created when a non-charging invoice is created with the state &#x60;pending&#x60; or the invoice moved from state &#x60;created&#x60;. Timestamp in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**credit_notes** | [**\Reepay\Model\InvoiceCreditNote[]**](InvoiceCreditNote.md) | Invoice credit notes | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

