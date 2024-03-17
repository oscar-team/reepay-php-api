# SubscriptionPeriodBalance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | Date in period for this period balance | [optional] 
**invoice** | [**\Reepay\Model\Invoice**](Invoice.md) |  | [optional] 
**paid** | **int** | The plan amount paid and settled for this period | [optional] 
**consumed** | **int** | The partial plan amount consumed up to date for this period | [optional] 
**remaining** | **int** | The partial plan amount remaining for this period. This amount can be refunded in the case the subscription is expired or put on hold and the amount has been paid. | [optional] 
**creditable** | **int** | The amount that can be credited for the period invoice | [optional] 
**period_amount** | **int** | Full period amount for period | [optional] 
**online_refundable** | **int** | The amount that can be online refunded on the subscription | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

