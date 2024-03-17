# CancelSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notice_periods** | **int** | Optional override of the notice periods set for plan. See plan for the definition of notice periods. | [optional] 
**notice_periods_after_current** | **bool** | Optional override of the notice periods after current setting for plan. See plan for the definition of notice periods. | [optional] 
**expire_at** | **string** | Optional fixed date and time on when the subscription should expire. Using this option results in prorated billing for the last partial period. Notice that when using this option the cancellation cannot be uncancelled in the last partial period. The fixed expire date takes precedence over notice periods and fixation period. The fixed expire date must be after the end of the current periods. On the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60; and &#x60;yyyy-MM-ddTHH:mm:ss&#x60;. | [optional] 
**trial_with_notice_and_fixation** | **bool** | If subscription is in trial and this flag is set to true, the potential notice and fixation periods will be respected. This can be used in a paid trial scenario where the trial period have custom duration and price collected with a setup fee. E.g. if notice period is set to 2, the subscription will run for the trial period and two full paid periods. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

