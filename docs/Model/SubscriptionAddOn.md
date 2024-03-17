# SubscriptionAddOn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per subscription unique handle for the subscription add-on. | 
**quantity** | **int** | Quantity of the subscription add-on. Only defined for quantity type add-ons | [optional] 
**amount** | **int** | Fixed subscription add-on per quantity price. If not defined the subscription add-on uses the add-on price. | [optional] 
**name** | **string** | Optional name overriding the add-on name. If not defined the add-on name will be used as order line text. | [optional] 
**description** | **string** | Optional description overriding the add-on description. If not defined the add-on description will be used. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Date when the subscription add-on was created. In ISO-8601 extended offset date-time format. | 
**add_on** | [**\Reepay\Model\AddOn**](AddOn.md) |  | 
**amount_incl_vat** | **bool** | If fixed price this parameter tells whether the amount is including VAT | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

