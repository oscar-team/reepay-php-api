# Refund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Refund id assigned by Reepay | 
**state** | **string** | The refund state either &#x60;refunded&#x60; or &#x60;failed&#x60; | 
**invoice** | **string** | Invoice/charge handle | 
**amount** | **int** | Refunded amount | 
**currency** | **string** | Currency for the account in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code | 
**transaction** | **string** | Transaction id assigned by Reepay | 
**error** | **string** | Reepay error code if failed. See [transaction errors](https://docs.reepay.com/api/#transaction-errors). | [optional] 
**type** | **string** | Type of refund, either &#x60;card&#x60; or &#x60;manual&#x60; | 
**created** | [**\DateTime**](\DateTime.md) | When the refund was created, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**credit_note_id** | **string** | Credit note id for successful refund | [optional] 
**ref_transaction** | **string** | Id of a possible settled transaction that has been refunded | [optional] 
**error_state** | **string** | Reepay error state if failed: &#x60;hard_declined&#x60; or &#x60;processing_error&#x60;. A hard decline indicates a refund decline by acquirer. A processing error indicates an error processing the refund either at Reepay, the acquirer, or between Reepay amd the acquirer. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


