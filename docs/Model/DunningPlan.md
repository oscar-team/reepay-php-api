# DunningPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Dunning plan name | 
**schedule** | **int[]** | The schedule as list of intervals in days | 
**handle** | **string** | Per account unique handle for the dunning plan. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. | 
**state** | **string** | State of dunning plan, one of the following: &#x60;active&#x60;, &#x60;deleted&#x60;. | 
**created** | [**\DateTime**](\DateTime.md) | Date when the dunning plan was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**default_plan** | **bool** | If this is default plan | 
**final_subscription_action** | **string** | Action to take for subscription if dunning fails, one of the following: &#x60;expire&#x60;, &#x60;on_hold&#x60;, &#x60;none&#x60; | 
**grace_period** | **string** | Optional grace period before starting dunning process. Also see &#x60;no_grace_hard_decline&#x60;. If eligible re-trying will be attempted in the grace period. The period is defined as an ISO-8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations | [optional] 
**no_grace_hard_decline** | **bool** | If a grace period has been defined, this parameter can be used to control whether the grace period is only for soft failing invoices. That is, the used payment method is actually eligible for retrying. Default is true. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

