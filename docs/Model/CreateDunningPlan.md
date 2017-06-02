# CreateDunningPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Dunning plan name | 
**schedule** | **int[]** | The schedule as list of intervals in days | 
**handle** | **string** | Per account unique handle for the customer. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. | 
**default_plan** | **bool** | If this is default plan | 
**final_subscription_action** | **string** | Action to take for subscription if dunning fails, one of the following: &#x60;expire&#x60;, &#x60;on_hold&#x60;, &#x60;none&#x60; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


