# Coupon

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique handle for the coupon |
**code** | **string** | The coupon code. Maximum 100 characters. |
**discount** | **string** | Discount to use for coupon |
**name** | **string** | Internal name for the coupon. |
**state** | **string** | Coupon state `active`, `expired`, `deleted` or `generating` |
**type** | **string** | Coupon type either `single` or `set` |
**redemptions** | **int** | Number of times the coupon has been redeemed |
**expired** | [**\DateTime**](\DateTime.md) | Date and time for expire if state expired. In ISO-8601 extended offset date-time format. | [optional]
**created** | [**\DateTime**](\DateTime.md) | Date when the coupon was created. In ISO-8601 extended offset date-time format. |
**all_plans** | **bool** | Whether all plans are eligible for this coupon. Defaults to false. | [optional]
**eligible_plans** | **string[]** | If not all_plans are set to true, then the set of eligible plan handles must be defined. | [optional]
**max_redemptions** | **int** | Optional maximum number of times this coupon can be redeemed. | [optional]
**valid_until** | [**\DateTime**](\DateTime.md) | Optional date and time until which the coupon is redeemable. In ISO-8601 extended offset date-time format. | [optional]
**expire_reason** | **string** | The expire reason if expired. One of `early`, `valid_until` or `max`. Respectively on demand early expire, valid until has passed or max redemptions has been reached. | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


