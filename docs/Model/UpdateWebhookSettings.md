# UpdateWebhookSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**urls** | **string[]** | Webhook urls | 
**username** | **string** | Optional HTTP Basic Auth username | [optional] 
**password** | **string** | Optional HTTP Basic Auth password | [optional] 
**disabled** | **bool** | Webhook disabled | 
**alert_emails** | **string[]** | Optional list of emails to send alert to if webhook fails | [optional] 
**alert_count** | **int** | Number of requests to perform before alert email is sent, must be greater than or equal to four (1 hour) | [optional] 
**event_types** | **string[]** | List of event types to receive. See documentation for valid event types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

