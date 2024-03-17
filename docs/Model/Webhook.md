# Webhook

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique webhook id assigned by Reepay | 
**event** | **string** | Event id of the event this webhook is for | 
**state** | **string** | The webhook state, one of the following: &#x60;pending&#x60;, &#x60;retrying&#x60;, &#x60;disabled&#x60;, &#x60;failed&#x60;, &#x60;completed&#x60; | 
**url** | **string** | Webhook url | 
**username** | **string** | Optional basic auth username | [optional] 
**password** | **string** | Optional basic auth password (masked) | [optional] 
**content** | **string** | JSON content of the webhook | 
**created** | [**\DateTime**](\DateTime.md) | Creation date in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**success** | [**\DateTime**](\DateTime.md) | Date of successful invocation in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**count** | **int** | Number of invocations performed | 
**last_fail** | [**\DateTime**](\DateTime.md) | Date of last failed invocation in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**first_fail** | [**\DateTime**](\DateTime.md) | Date of first failed invocation in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**alert_count** | **int** | Number of failed invocations before an alert email is sent | [optional] 
**alert_sent** | [**\DateTime**](\DateTime.md) | Date when an optional alert email sending was requested in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

