# InlineResponse2009Content

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique reference to charge/invoice. E.g. order id from own system. Multiple payments can be attempted for the same handle but only one succeeded charge can exist per handle. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. | 
**state** | **string** | The charge state one of the following: &#x60;authorized&#x60;, &#x60;settled&#x60;, &#x60;failed&#x60;, &#x60;cancelled&#x60; | 
**customer** | **string** | Customer handle | 
**amount** | **int** | The invoice amount including VAT | 
**currency** | **string** | Currency for the account in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code | 
**authorized** | [**\DateTime**](\DateTime.md) | When the charge was authorized, if the charge went through an authorize and settle flow, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**settled** | [**\DateTime**](\DateTime.md) | When the charge was settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**cancelled** | [**\DateTime**](\DateTime.md) | When the charge was cancelled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | When the invoice was created, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**transaction** | **string** | Transaction id assigned by Reepay | 
**error** | **string** | Reepay error code if failed. See [transaction errors](https://docs.reepay.com/api/#transaction-errors). | [optional] 
**source** | [**\Swagger\Client\Model\InlineResponse2009Source**](InlineResponse2009Source.md) |  | [optional] 
**order_lines** | [**\Swagger\Client\Model\InlineResponse2009OrderLines[]**](InlineResponse2009OrderLines.md) | Order lines for charge | 
**refunded_amount** | **int** | Refunded amount | 
**error_state** | **string** | Reepay error state if failed: &#x60;soft_declined&#x60;, &#x60;hard_declined&#x60; or &#x60;processing_error&#x60;. Soft and hard declines indicate a card decline. A soft decline is possibly recoverable and a subsequent request with the same card may succeed. E.g. insufficient funds. A processing error indicates an error processing the card either at Reepay, the acquirer, or between Reepay amd the acquirer. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


