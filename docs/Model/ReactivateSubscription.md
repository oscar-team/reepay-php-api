# ReactivateSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | **string** | Optional date and time from which the subscription is eligible to schedule first invoice after reactivation. If no time part is given start of day will be used. A start date in the past can be used, but not before the date when the subscription was put on hold. A start date in the past can result in invoices for past billing periods. Default value is current date and time. On the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60; and &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional] 
**partial_period_handling** | **string** | Optional argument to override plan setting on how to handle a potential initial partial billing period for fixed day scheduling. The options are to bill for a full period, bill prorated for the partial period, bill a zero amoumt, or not to consider the period before first fixed day a billing period. The default is to bill prorated. Options: &#x60;bill_full&#x60;, &#x60;bill_prorated&#x60;, &#x60;bill_zero_amount&#x60;, &#x60;no_bill&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

