# WebhookRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique webhook id assigned by Reepay | 
**initiated** | [**\DateTime**](\DateTime.md) | Date when the webhook request was initiated, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**duration** | **int** | Duration in milliseconds of request | 
**headers** | **string** | HTTP headers received, null if no response | [optional] 
**content** | **string** | Truncated content received, null if no response | [optional] 
**http_status** | **int** | HTTP status code received, null if no response | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


