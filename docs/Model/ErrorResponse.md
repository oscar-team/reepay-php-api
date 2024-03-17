# ErrorResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **int** | Reepay API [error codes](https://api.reepay.com/v1/error_codes) | 
**error** | **string** | Short error message | 
**message** | **string** | Optional clarifying error message | [optional] 
**path** | **string** | The path generating the error response | 
**timestamp** | [**\DateTime**](\DateTime.md) | Timestamp for the error response in ISO-8601 extended offset date-time format | 
**http_status** | **int** | HTTP status code of the error | 
**http_reason** | **string** | HTTP reason of the error | 
**request_id** | **string** | Request-Id for the failed request | 
**transaction_error** | **string** | Optional transaction error in the case the request involved a transaction processing. See [transaction errors](https://reference.reepay.com/api/#transaction-errors). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

