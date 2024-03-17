# PayoutTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Transaction id assigned by Reepay | 
**state** | **string** | State of the transaction, one of the following: &#x60;paid&#x60;, &#x60;processing&#x60;, &#x60;failed&#x60; | 
**payout** | **string** | Payout handle | 
**amount** | **int** | The transaction amount | 
**paid** | [**\DateTime**](\DateTime.md) | When the transaction was paid, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**failed** | [**\DateTime**](\DateTime.md) | When the transaction failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Date when the transaction was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**card** | [**\Reepay\Model\Card**](Card.md) |  | [optional] 
**error** | **string** | Error code if failed. See [transaction errors](https://reference.reepay.com/api/#transaction-errors). | [optional] 
**fingerprint** | **string** | Uniquely identifies this particular card number | [optional] 
**provider** | **string** | Acquirer or payment gateway used: &#x60;reepay&#x60;, &#x60;clearhaus&#x60;, &#x60;nets&#x60;, &#x60;swedbank&#x60;, &#x60;handelsbanken&#x60;, &#x60;elavon&#x60;, &#x60;bambora&#x60;, &#x60;valitor&#x60;, &#x60;dibs&#x60;, &#x60;stripe&#x60;, &#x60;test&#x60; | [optional] 
**error_state** | **string** | Error state if failed: &#x60;pending&#x60;, &#x60;soft_declined&#x60;, &#x60;hard_declined&#x60; or &#x60;processing_error&#x60; | [optional] 
**card_type** | **string** | Card type: &#x60;unknown&#x60;, &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;ffk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | 
**exp_date** | **string** | Card expire date on form MM-YY | [optional] 
**masked_card** | **string** | Masked card number | [optional] 
**acquirer_code** | **string** | Acquirer error code in case of error | [optional] 
**acquirer_message** | **string** | Acquirer message in case of error | [optional] 
**acquirer_reference** | **string** | Acquirer reference to transaction. E.g. Nets order id or Clearhaus reference. | [optional] 
**text_on_statement** | **string** | Resulting text on bank statement if known | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

