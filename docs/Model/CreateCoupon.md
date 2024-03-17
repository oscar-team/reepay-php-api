# CreateCoupon

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Internal name for the coupon. | 
**handle** | **string** | Per account unique handle for the coupon | 
**code** | **string** | The coupon code. Maximum 100 characters. | 
**discount** | **string** | Discount to use for coupon | 
**all_plans** | **bool** | Whether all plans are eligible for this coupon. Defaults to false. | [optional] 
**eligible_plans** | **string[]** | If not all_plans are set to true, then the set of eligible plan handles must be defined. | [optional] 
**max_redemptions** | **int** | Optional maximum number of times this coupon can be redeemed. | [optional] 
**valid_until** | **string** | Optional date and time until which the coupon is redeemable. Date and time on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60; and &#x60;yyyy-MM-ddTHH:mm:ss&#x60;. | [optional] 
**redemption_strategy** | **string** | This field determines the coupon redemption strategy for applying coupons. It accepts the following values: once_per_customer, once_per_plan, once_per_subscription. If no &#x27;redemption strategy&#x27; value is provided, the default strategy of &#x27;once_per_customer&#x27; will be applied. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

