# UpdateCoupon

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Internal name for the coupon. | 
**all_plans** | **bool** | Whether all plans are eligible for this coupon. Defaults to false. | [optional] 
**eligible_plans** | **string[]** | If not all_plans are set to true, then the set of eligible plan handles must be defined. | [optional] 
**max_redemptions** | **int** | Optional maximum number of times this coupon can be redeemed. | [optional] 
**valid_until** | **string** | Optional date and time until which the coupon is redeemable. Date and time on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60; and &#x60;yyyy-MM-ddTHH:mm:ss&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

