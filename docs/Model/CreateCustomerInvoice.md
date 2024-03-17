# CreateCustomerInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique handle for the invoice. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. It is recommended to use a maximum of 20 characters as this will allow for the use of handle as reference on bank statements without truncation. | 
**settle** | [**\Reepay\Model\Settle**](Settle.md) |  | [optional] 
**metadata** | **map[string,object]** | Custom metadata. | [optional] 
**currency** | **string** | Optional currency. If not set, the default currency of the account will be used. | [optional] 
**order_lines** | [**\Reepay\Model\CreateOrderLine[]**](CreateOrderLine.md) | Order lines for the invoice. A maximum of 100 order lines is allowed. | 
**manual_transfer** | [**\Reepay\Model\ManualSettleTransfer**](ManualSettleTransfer.md) |  | [optional] 
**billing_address** | [**\Reepay\Model\InvoiceBillingAddress**](InvoiceBillingAddress.md) |  | [optional] 
**shipping_address** | [**\Reepay\Model\InvoiceShippingAddress**](InvoiceShippingAddress.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

