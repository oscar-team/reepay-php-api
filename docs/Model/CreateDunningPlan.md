# CreateDunningPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Dunning plan name |
**schedule** | **int[]** | The schedule as list of intervals in days |
**handle** | **string** | Per account unique handle for the customer. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. |
**default_plan** | **bool** | If this is default plan |
**final_subscription_action** | **string** | Action to take for subscription if dunning fails, one of the following: `expire`, `on_hold`, `none` |

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


