# TaxPolicy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id of the tax policy | 
**created** | [**\DateTime**](\DateTime.md) | Date of creation | 
**updated** | [**\DateTime**](\DateTime.md) | Date of last update | 
**name** | **string** | Name of the tax policy | 
**handle** | **string** | Per account unique handle for tax policy | 
**rates** | [**\Reepay\Model\TaxRate[]**](TaxRate.md) | Tax rates to apply to the tax policy | [optional] 
**fallbacks** | [**\Reepay\Model\TaxPolicyFallbacks**](TaxPolicyFallbacks.md) |  | 
**is_default** | **bool** |  | [optional] 
**is_deletable** | **bool** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

