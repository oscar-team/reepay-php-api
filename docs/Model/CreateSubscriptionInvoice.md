# CreateSubscriptionInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique handle for the invoice. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. |
**instant** | **bool** | Create and process invoice instantly and leave as either `settled` or `failed`. The default is to leave the invoice for automatic processing and potential dunning management as other subscription invoices (default false). | [optional]
**due** | **string** | Optional due date and time on the form yyyy-MM-dd, yyyyMMdd, yyyy-MM-ddTHH:mm and yyyy-MM-ddTHH:mm:ss from which the invoice is eligible to be collected. Will not be used when `instant` is used. | [optional]
**settle** | [**\Reepay\Model\Settle**](Settle.md) | Optional settle to perform after creation using a different payment method. If the settle fails the status will be `failed` if instant or `pending` if not instant. The `due` date will be ignored for subscription invoice create. | [optional]
**plan_manual** | **bool** | Create manually for plan by adding plan product and potential add-ons as order line (default false) | [optional]
**collect_additional_costs** | **bool** | Collect pending additional costs and transfer to invoice (default true) | [optional]
**collect_credit** | **bool** | Collect pending credit and transfer to invoice (default true) | [optional]
**apply_discounts** | **bool** | Apply potential discounts for the subscription to the invoice order lines (default true) | [optional]
**order_lines** | [**\Reepay\Model\CreateOrderLine[]**](CreateOrderLine.md) | Optional additional order lines for the invoice | [optional]
**manual_transfer** | [**\Reepay\Model\ManualSettleTransfer**](ManualSettleTransfer.md) | Optional manual transfer. If given the invoice will be settled using the manual transfer transaction. | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


