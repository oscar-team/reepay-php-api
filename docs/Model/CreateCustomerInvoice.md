# CreateCustomerInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique handle for the invoice. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. |
**settle** | [**\Reepay\Model\Settle**](Settle.md) | Optional settle to perform after creation | [optional]
**order_lines** | [**\Reepay\Model\CreateOrderLine[]**](CreateOrderLine.md) | Order lines for the invoice |
**manual_transfer** | [**\Reepay\Model\ManualSettleTransfer**](ManualSettleTransfer.md) | Optional manual transfer to settle invoice with after creation. | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


