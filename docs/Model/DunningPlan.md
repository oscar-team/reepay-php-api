# DunningPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Dunning plan name |
**schedule** | **int[]** | The schedule as list of intervals in days |
**handle** | **string** | Per account unique handle for the customer. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. |
**state** | **string** | State of dunning plan, one of the following: `active`, `deleted`. |
**created** | [**\DateTime**](\DateTime.md) | Date when the dunning plan was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. |
**default_plan** | **bool** | If this is default plan |
**final_subscription_action** | **string** | Action to take for subscription if dunning fails, one of the following: `expire`, `on_hold`, `none` |

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


