# Body7

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique reference to charge/invoice. E.g. order id from own system. Multiple payments can be attempted for the same handle but only one authorized or settled charge can exist per handle. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. | 
**key** | **string** | Optional idempotency key. Only one authorization or settle can be performed for the same handle. If two create attempts are attempted and the first succeeds the second will fail because charge is already settled or authorized. An idempotency key identifies uniquely the request and multiple requests with the same key and handle will yield the same result. In case of networking errors the same request with same key can safely be retried. | [optional] 
**amount** | **int** | Amount in the smallest unit for the account currency. Either &#x60;amount&#x60; or &#x60;order_lines&#x60; must be provided if charge/invoice does not already exists. | [optional] 
**customer** | [**\Swagger\Client\Model\V1chargeCustomer**](V1chargeCustomer.md) |  | [optional] 
**source** | **string** | The source for the payment. Either an existing payment method for the customer, e.g. &#x60;ca_...&#x60; or a card token &#x60;ct_...&#x60; generated with token API or Reepay JS library. | 
**settle** | **bool** | Whether or not to immediately settle the charge. Default is true. If not settled immediately the charge will be authorized and can later be settled. Normally this have to be done within 7 days. | [optional] 
**ordertext** | **string** | Optional order text. Used in conjunction with &#x60;amount&#x60;. Ignored if &#x60;order_lines&#x60; is provided. | [optional] 
**order_lines** | [**\Swagger\Client\Model\V1chargeOrderLines[]**](V1chargeOrderLines.md) | Order lines for the charge. The order lines controls the amount. Only required if charge/invoice does not already exist. If given for existing charge the order lines and amount are adjusted. | [optional] 
**customer_handle** | **string** | Customer reference. If charge does not already exist either this reference must be provided or a create customer object must be provided. . | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


