# MpsSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id for payment method |
**state** | **string** | State of the payment method: `active`, `inactivated`, `failed`, `pending` or `deleted` |
**customer** | **string** | Customer by handle |
**reference** | **string** | Reference code | [optional]
**failed** | [**\DateTime**](\DateTime.md) | Date when the payment method failed. In ISO-8601 extended offset date-time format. | [optional]
**created** | [**\DateTime**](\DateTime.md) | Date when the payment method was created. In ISO-8601 extended offset date-time format. |
**external_id** | **string** | External Mobilepay id | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


