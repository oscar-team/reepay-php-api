# RiskRuleSet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A short name for the rule that will be used in the flagging of transactions and cards matching a rule set. Max length 32 with allowable characters [a-zA-Z0-9_.-@]. | 
**description** | **string** | A description for the rule set. Max length 255 characters. | [optional] 
**operator** | **string** | Condition operator for the set. Either ALL or ANY rules must match. | 
**action** | **string** | Action to take if the rule set matches. &#x60;ALLOW&#x60;: White list stopping further matching and allows transaction. &#x60;FLAG&#x60;: Do not decline transaction but flag with rule set name. &#x60;BLOCK&#x60;: Decline transaction and flag with rule set name. &#x60;MUST_USE_SCA&#x60;: Rules with this action are only evaluated before potential SCA has been applied. If matched the transaction is forced to use SCA. On the second risk filtering, after SCA, rules with this action is not evaluated. Place these rules first in the prioritized list. &#x60;NONE&#x60;: Ignore rule set and continue matching. | 
**rules** | [**\Reepay\Model\RiskRule[]**](RiskRule.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

