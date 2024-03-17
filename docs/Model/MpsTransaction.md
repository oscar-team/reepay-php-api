# MpsTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **string** | Error code if failed. See [transaction errors](https://reference.reepay.com/api/#transaction-errors). | [optional] 
**ref_transaction** | **string** | Id of a possible referenced transaction | [optional] 
**error_state** | **string** | Error state if failed: &#x60;pending&#x60;, &#x60;soft_declined&#x60;, &#x60;hard_declined&#x60; or &#x60;processing_error&#x60; | [optional] 
**acquirer_message** | **string** | Acquirer message in case of error | [optional] 
**mps_id** | **string** | MobilePay Subscriptions id | 
**mps_subscription** | [**\Reepay\Model\MpsSubscription**](MpsSubscription.md) |  | 
**mps_payment_type** | **string** | MobilePay Subscriptions payment type: &#x60;regular&#x60;, &#x60;one_off_cit&#x60; (customer initiated), &#x60;one_off_mit&#x60; (merchant initiated auto reserve) | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

