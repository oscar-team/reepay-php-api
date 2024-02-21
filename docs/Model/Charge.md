# Charge

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique reference to charge/invoice. E.g. order id from own system. Multiple payments can be attempted for the same handle but only one succeeded charge can exist per handle. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. |
**state** | **string** | The charge state one of the following: `created`, `authorized`, `settled`, `failed`, `cancelled`, `pending`. A pending state after create charge indicates an async processing has been started for an asynchronous payment method. E.g. MobilePay Subscriptions. See also `processing`. The result of the charge will be delivered in webhook as either `invoice_authorized`, `invoice_settled` or `invoice_failed`. |
**customer** | **string** | Customer handle |
**amount** | **int** | The invoice amount including VAT |
**currency** | **string** | Currency for the account in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code |
**authorized** | [**\DateTime**](\DateTime.md) | When the charge was authorized, if the charge went through an authorize and settle flow, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional]
**settled** | [**\DateTime**](\DateTime.md) | When the charge was settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional]
**cancelled** | [**\DateTime**](\DateTime.md) | When the charge was cancelled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional]
**created** | [**\DateTime**](\DateTime.md) | When the invoice was created, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. |
**transaction** | **string** | Transaction id assigned by Reepay. Assigned when transaction is performed. |
**error** | **string** | Reepay error code if failed. See [transaction errors](https://docs.reepay.com/api/#transaction-errors). | [optional]
**processing** | **bool** | For asynchronous payment methods this flag indicates that the charge is awaiting result. The charge/invoice state will be pending. | [optional]
**source** | [**\Reepay\Model\ChargeSource**](ChargeSource.md) | Object describing the source for the charge. E.g. credit card. |
**order_lines** | [**\Reepay\Model\OrderLine[]**](OrderLine.md) | Order lines for charge |
**refunded_amount** | **int** | Refunded amount |
**authorized_amount** | **int** | Authorized amount if authorization was performed. The maximum amount that can be settled. |
**error_state** | **string** | Reepay error state if failed: `soft_declined`, `hard_declined` or `processing_error`. Soft and hard declines indicate a card decline. A soft decline is possibly recoverable and a subsequent request with the same card may succeed. E.g. insufficient funds. A processing error indicates an error processing the card either at Reepay, the acquirer, or between Reepay amd the acquirer. | [optional]
**recurring_payment_method** | **string** | Optional reference to recurring payment method created in conjunction with charging | [optional]
**billing_address** | [**\Reepay\Model\InvoiceBillingAddress**](InvoiceBillingAddress.md) | Optional billing address | [optional]
**shipping_address** | [**\Reepay\Model\InvoiceShippingAddress**](InvoiceShippingAddress.md) | Optional shipping address | [optional]
**payment_context** | **string** | Payment context describing if the transaction is customer or merchant initiated, one of the following values: `cit`, `mit`, `cit_cof` | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


