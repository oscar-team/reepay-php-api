# CreateSubscriptionAddOn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Optional per subscription unique handle for the subscription add-on. If not defined the handle will default to the add-on handle, this means that by default an add-on can only be attached once to each subscription. The handle can be used to link the subscription add-on to an entity like computer serial number or vehicle license plate. | 
**quantity** | **int** | Optional quantity of the of the add-on for this subscription. Defaults to 1. May only be provided for add-on with type &#x60;quantity&#x60;. | [optional] 
**amount** | **int** | Optional custom fixed per quantity add-on price. If provided the add-on price billed for each billing period will be overridden by this price. Implicitly defines &#x60;fixed_amount&#x60; as true. Cannot be provided with &#x60;fixed_amount&#x60; false. | [optional] 
**name** | **string** | Optional name overriding the add-on name. If not defined the add-on name will be used as order line text. | [optional] 
**description** | **string** | Optional description overriding the add-on description. If not defined the add-on description will be used. | [optional] 
**add_on** | **string** | Add-on for subscription add-on | 
**fixed_amount** | **bool** | Whether the price of the subscription add-on should be fixed to the current price of add-on, or the price should follow the add-on price. Defaults to true. If set to false the price of the add-on will be determined by the add-on price at the time of subscription billing. | [optional] 
**amount_incl_vat** | **bool** | Whether the optional amount is including VAT. Defaults to true. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

