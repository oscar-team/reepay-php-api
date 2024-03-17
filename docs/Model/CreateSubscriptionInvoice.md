# CreateSubscriptionInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique handle for the invoice. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. It is recommended to use a maximum of 20 characters as this will allow for the use of handle as reference on bank statements without truncation. | 
**instant** | **bool** | Create and process invoice instantly and leave as either &#x60;settled&#x60; or &#x60;failed&#x60;. The default is to leave the invoice for automatic processing and potential dunning management as other subscription invoices (default false). | [optional] 
**due** | **string** | Optional due date and time on the form yyyy-MM-dd, yyyyMMdd, yyyy-MM-ddTHH:mm and yyyy-MM-ddTHH:mm:ss from which the invoice is eligible to be collected. Will not be used when &#x60;instant&#x60; is used. | [optional] 
**settle** | [**\Reepay\Model\Settle**](Settle.md) |  | [optional] 
**metadata** | **map[string,object]** | Custom metadata. | [optional] 
**plan_manual** | **bool** | Create manually for plan by adding plan product and potential add-ons as order line (default false) | [optional] 
**collect_additional_costs** | **bool** | Collect pending additional costs and transfer to invoice (default true) | [optional] 
**collect_credit** | **bool** | Collect pending credit and transfer to invoice (default true) | [optional] 
**apply_discounts** | **bool** | Apply potential discounts for the subscription to the invoice order lines (default true) | [optional] 
**order_lines** | [**\Reepay\Model\CreateOrderLine[]**](CreateOrderLine.md) | Optional additional order lines for the invoice. A maximum of 100 order lines is allowed. | [optional] 
**manual_transfer** | [**\Reepay\Model\ManualSettleTransfer**](ManualSettleTransfer.md) |  | [optional] 
**billing_address** | [**\Reepay\Model\InvoiceBillingAddress**](InvoiceBillingAddress.md) |  | [optional] 
**shipping_address** | [**\Reepay\Model\InvoiceShippingAddress**](InvoiceShippingAddress.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

