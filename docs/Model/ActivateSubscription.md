# ActivateSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source** | **string** | The payment method source if signup method &#x60;source&#x60;. Either an existing payment method for the customer, e.g. existing card id &#x60;ca_...&#x60; or a card token &#x60;ct_...&#x60;. | [optional] 
**payment_method_reference** | **string** | Optional reference given to the created payment method in case a new payment method is added. Max length 64 with allowable characters [a-zA-Z0-9_.-@]. | [optional] 
**signup_method** | **string** | The signup method, how to get payment information from customer, one of the following: &#x60;source&#x60;, &#x60;email&#x60;, &#x60;link&#x60;. The &#x60;source&#x60; method takes a reference to an existing customer payment method (e.g. card &#x60;ca_..&#x60;) or a card token for &#x60;ct_...&#x60;. The method &#x60;email&#x60; will send an email to customer requesting payment information with a link to a hosted page. The method &#x60;link&#x60; does not do anything but the hosted page link in the subscription object can be provided to the customer as a link to enter payment information. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

