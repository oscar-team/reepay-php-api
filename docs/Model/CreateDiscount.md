# CreateDiscount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique handle for the discount |
**name** | **string** | Name of discount. Will be used as order line text. |
**description** | **string** | Optional description of discount | [optional]
**amount** | **int** | Fixed amount discount deducted from order line amounts including VAT | [optional]
**percentage** | **int** | Percentage discount applied to each applicable order line | [optional]
**apply_to** | **string[]** | Which order lines the discount is applicable to: `all`, `setup_fee`, `plan`, `additional_cost`, `add_on` and `ondemand` |
**fixed_count** | **int** | Apply discount to a fixed number of invoices | [optional]
**fixed_period_unit** | **string** | Time unit use for fixed valid period either `days` or `months` | [optional]
**fixed_period** | **int** | Fixed period length e.g. 12 months or 14 days | [optional]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


