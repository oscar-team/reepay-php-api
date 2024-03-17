# Refund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Refund id assigned by Reepay | 
**state** | **string** | The refund state either &#x60;refunded&#x60;, &#x60;failed&#x60; or &#x60;processing&#x60;. The processing state can only be returned for asynchronous payment method (not card). | 
**invoice** | **string** | Invoice/charge handle | 
**amount** | **int** | Refunded amount | 
**currency** | **string** | Currency for the account in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code | 
**transaction** | **string** | Transaction id assigned by Reepay | 
**error** | **string** | Reepay error code if failed. See [transaction errors](https://reference.reepay.com/api/#transaction-errors). | [optional] 
**type** | **string** | Type of refund, either &#x60;card&#x60;, &#x60;mpo&#x60;, &#x60;mobilepay&#x60;, &#x60;vipps&#x60;, &#x60;vipps_recurring&#x60;, &#x60;swish&#x60;, &#x60;viabill&#x60;, &#x60;anyday&#x60;, &#x60;manual&#x60;, &#x60;applepay&#x60;, &#x60;googlepay&#x60;, &#x60;paypal&#x60;, &#x60;klarna_pay_now&#x60;, &#x60;klarna_pay_later&#x60;, &#x60;klarna_slice_it&#x60;, &#x60;klarna_direct_bank_transfer&#x60;, &#x60;klarna_direct_debit&#x60;, &#x60;resurs&#x60;, &#x60;mobilepay_subscriptions&#x60;, &#x60;emv_token&#x60;, &#x60;bcmc&#x60;, &#x60;blik&#x60;, &#x60;pp_blik_oc&#x60;, &#x60;giropay&#x60;, &#x60;ideal&#x60;, &#x60;p24&#x60;, &#x60;sepa&#x60;, or &#x60;verkkopankki&#x60; | 
**created** | [**\DateTime**](\DateTime.md) | When the refund was created, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**credit_note_id** | **string** | Credit note id for successful refund | [optional] 
**ref_transaction** | **string** | Id of a possible settled transaction that has been refunded | [optional] 
**error_state** | **string** | Reepay error state if failed: &#x60;hard_declined&#x60; or &#x60;processing_error&#x60;. A hard decline indicates a refund decline by acquirer. A processing error indicates an error processing the refund either at Reepay, the acquirer, or between Reepay and the acquirer. | [optional] 
**acquirer_message** | **string** | Acquirer message in case of error | [optional] 
**accounting_number** | **string** | Invoice accounting number | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

