# CreateDiscount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of discount. Will be used as order line text. | 
**description** | **string** | Optional description of discount | [optional] 
**amount** | **int** | Fixed amount discount deducted from order line amounts including VAT, either amount or percentage should be provided | [optional] 
**percentage** | **int** | Percentage discount applied to each applicable order line, either amount or percentage should be provided | [optional] 
**handle** | **string** | Per account unique handle for the discount | 
**apply_to** | **string[]** | Which order lines the discount is applicable to: &#x60;all&#x60;, &#x60;setup_fee&#x60;, &#x60;plan&#x60;, &#x60;additional_cost&#x60;, &#x60;add_on&#x60; and &#x60;ondemand&#x60; | 
**fixed_count** | **int** | Apply discount to a fixed number of invoices | [optional] 
**fixed_period_unit** | **string** | Time unit use for fixed valid period either &#x60;days&#x60; or &#x60;months&#x60; | [optional] 
**fixed_period** | **int** | Fixed period length e.g. 12 months or 14 days | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

