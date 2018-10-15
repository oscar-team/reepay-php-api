# SettleCharge

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Optional idempotency key. Only one settle can be performed for the same handle. If two settle attempts are attempted and the first succeeds the second will fail because charge is already settled or authorized. An idempotency key identifies uniquely the request and multiple requests with the same key will yield the same result. In case of networking errors the same request with same key can safely be retried. | [optional]
**amount** | **int** | Optional amount different from authorized amount to settle. Must be less than or equal to the authorized amount. Either `amount` or `order_lines` can be provided. | [optional]
**ordertext** | **string** | Optional alternative order text to use in conjunction with `amount`. Ignored if `order_lines` is provided. If new `amount` is provided but no new `ordertext` the original order text will be used. | [optional]
**order_lines** | [**\Reepay\Model\CreateOrderLine[]**](CreateOrderLine.md) | Optional new order lines to replace old order lines for the charge. The order lines controls the amount. The new amount must be less than or equal to the authorized amount. | [optional]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


