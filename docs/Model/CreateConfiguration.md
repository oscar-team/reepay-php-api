# CreateConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Descriptive name for configuration | [optional] 
**logo** | **string** | Logo url. Must be hosted on a *.reepay.com domain. | [optional] 
**locale** | **string** | Locale to use if not provided when creating session. Defaults to account locale. | [optional] 
**style_config** | [**\Reepay\Model\StyleConfig**](StyleConfig.md) |  | [optional] 
**handle** | **string** |  | 
**payment_methods** | **string[]** | Optional lists of payment methods to use for sessions with this configuration | [optional] 
**co_branded_card_selection** | **bool** | Option to control if the cardholder should be able to choose which part of a co-branded card to use. Defaults to false. | [optional] 
**co_branded_visa_dankort_preference** | **string** | Default selected part of a co-branded Visa-Dankort if &#x60;co_branded_card_selection&#x60; enabled and cardholder makes no specific selection. | [optional] 
**amount_formatting** | **string** | How to format amount and currency: &#x60;currency_code&#x60; - with currency code, e.g. 100 USD (default), or &#x60;currency_symbol&#x60; - with symbol, e.g. $100 | [optional] 
**payment_type_priority** | **string[]** | List of payment types giving the order in the checkout | [optional] 
**show_test_hints** | **bool** | For test accounts, use this setting to control if info boxes with hints on how to perform testing should be shown in Checkout. | [optional] 
**show_subscription_details_expanded** | **bool** | A property, which shows if subscription details should be expanded in Checkout. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

