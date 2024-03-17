# ScaData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Cardholder Name. If not provided information will be taken from customer or invoice addresses. | [optional] 
**email** | **string** | Cardholder Email. If not provided information will be taken from customer or invoice addresses. Must be RFC5322 compliant. | [optional] 
**home_phone** | [**\Reepay\Model\ScaPhoneNumber**](ScaPhoneNumber.md) |  | [optional] 
**mobile_phone** | [**\Reepay\Model\ScaPhoneNumber**](ScaPhoneNumber.md) |  | [optional] 
**work_phone** | [**\Reepay\Model\ScaPhoneNumber**](ScaPhoneNumber.md) |  | [optional] 
**billing_address** | [**\Reepay\Model\ScaBillingAddress**](ScaBillingAddress.md) |  | [optional] 
**shipping_address** | [**\Reepay\Model\ScaShippingAddress**](ScaShippingAddress.md) |  | [optional] 
**address_match** | **bool** | Indicate if Shipping Address and Billing Address are the same | [optional] 
**account_id** | **string** | Cardholder Account Identifier. Customer id from own system. If not provided customer handle will be used. | [optional] 
**challenge_indicator** | **string** | Optional argument to control whether the cardholder should be posed with a challenge instead of a potential frictionless authentication flow. This could e.g. be used the first time a new customer makes a purchase to make sure they are strongly authenticated. Two values can be used: &#x60;preference&#x60; - cardholder should be given a challenge if issuer supports challenges, &#x60;mandate&#x60; - cardholder must be given a challenge and the authentication should be declined if the issuer does not support challenges. | [optional] 
**risk_indicator** | [**\Reepay\Model\ScaRiskIndicator**](ScaRiskIndicator.md) |  | [optional] 
**account_info** | [**\Reepay\Model\ScaAccountInfo**](ScaAccountInfo.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

