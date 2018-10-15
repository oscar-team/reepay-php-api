# CreateOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique reference to charge/invoice. E.g. order id from own system. Multiple payments can be attempted for the same handle but only one authorized or settled charge can exist per handle. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. |
**key** | **string** | Optional idempotency key. Only one authorization or settle can be performed for the same handle. If two create attempts are attempted and the first succeeds the second will fail because charge is already settled or authorized. An idempotency key identifies uniquely the request and multiple requests with the same key and handle will yield the same result. In case of networking errors the same request with same key can safely be retried. | [optional]
**amount** | **int** | Amount in the smallest unit for the account currency. Either `amount` or `order_lines` must be provided if charge/invoice does not already exists. | [optional]
**currency** | **string** | Optional currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. If not provided the account default currency will be used. The currency of an existing charge or invoice cannot be changed. | [optional]
**customer** | [**\Reepay\Model\CreateCustomer**](CreateCustomer.md) | Optional create customer object. An alternative to using a reference to an already created customer. If this object is provided and the customer already exists, the customer will be updated with the information provided in this object. Notice that customer cannot be changed for existing charge/invoice so if handle is given it must match the customer handle for existing customer. | [optional]
**settle** | **bool** | Whether or not to immediately settle the charge. Default is true. If not settled immediately the charge will be authorized and can later be settled. Normally this have to be done within 7 days. | [optional]
**ordertext** | **string** | Optional order text. Used in conjunction with `amount`. Ignored if `order_lines` is provided. | [optional]
**order_lines** | [**\Reepay\Model\CreateOrderLine[]**](CreateOrderLine.md) | Order lines for the charge. The order lines controls the amount. Only required if charge/invoice does not already exist. If given for existing charge the order lines and amount are adjusted. | [optional]
**customer_handle** | **string** | Customer reference. If charge does not already exist either this reference must be provided or a create customer object must be provided. . | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


