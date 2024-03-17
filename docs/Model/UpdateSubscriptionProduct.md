# UpdateSubscriptionProduct

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**icon** | **string** | The Subscription product icon follows the scheme: &lt;iconType&gt; &lt;iconName&gt;. The icon type can be either \&quot;solid\&quot;, \&quot;regular\&quot; or \&quot;brand\&quot; and the icon name can be anything from FontAwesome library. Example: solid bolt | [optional] 
**name** | **string** | Subscription product name | [optional] 
**badge** | **string** | Signup subscription product badge. Examples: &#x27;POPULAR&#x27;, &#x27;NEW&#x27; | [optional] 
**description** | **string** | Signup subscription product description | [optional] 
**benefits** | **string[]** | A list of benefits for a subscription product | [optional] 
**field_configurations** | [**\Reepay\Model\SignupPageFieldConfiguration[]**](SignupPageFieldConfiguration.md) | Field configurations | [optional] 
**is_highlighted** | **bool** | A flag for highlighting the visuals of a product | [optional] 
**plan_handle** | **string** | Subscription plan | 
**configuration** | [**\Reepay\Model\CreateSubscription**](CreateSubscription.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

