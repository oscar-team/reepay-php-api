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
**valid_until** | **string** | Optional date and time until which the coupon is redeemable. Date and time on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss`. | [optional]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


