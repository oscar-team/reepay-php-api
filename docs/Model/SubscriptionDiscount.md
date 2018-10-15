# SubscriptionDiscount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per subscription unique handle for the subscription discount. |
**discount** | **string** | Discount for subscription discount |
**state** | **string** | Discount state `active` or `disabled`. |
**coupon** | **string** | Coupon reference if this discount was released by a coupon code | [optional]
**deleted** | [**\DateTime**](\DateTime.md) | Date when the discount was deleted if deleted. In ISO-8601 extended offset date-time format. | [optional]
**created** | [**\DateTime**](\DateTime.md) | Date when the discount was created. In ISO-8601 extended offset date-time format. |
**name** | **string** | Name of discount. Will be used as order line text. |
**description** | **string** | Optional description of discount | [optional]
**amount** | **int** | Fixed amount discount deducted from order line amounts including VAT | [optional]
**percentage** | **int** | Percentage discount applied to each applicable order line | [optional]
**count** | **int** | Number of invoices this subscription discount has been applied to |
**invoices** | **string[]** | List of invoices this subscription discount has been applied to |
**apply_to** | **string[]** | Which order lines the discount is applicable to: `all`, `setup_fee`, `plan`, `additional_cost`, `add_on` and `ondemand` |
**fixed_count** | **int** | Apply discount to a fixed number of invoices | [optional]
**fixed_period_unit** | **string** | Time unit use for fixed valid period | [optional]
**fixed_period** | **int** | Fixed period length e.g. 12 months or 14 days | [optional]
**fixed_usage_reached** | **bool** | Whether fixed usage for subscription discount has been reached |
**fixed_period_passed** | **bool** | Whether fixed period for subscription discount has been passed |

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


