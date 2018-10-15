# Reepay\WebhookApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**disableWebhooks**](WebhookApi.md#disableWebhooks) | **POST** /v1/webhook/disable | Disable webhooks
[**getWebhook**](WebhookApi.md#getWebhook) | **GET** /v1/webhook/{id} | Get webhooks
[**getWebhookRequests**](WebhookApi.md#getWebhookRequests) | **GET** /v1/webhook/{id}/request | Get webhook requests
[**getWebhooks**](WebhookApi.md#getWebhooks) | **GET** /v1/webhook | Get list of webhooks
[**resendJson**](WebhookApi.md#resendJson) | **POST** /v1/webhook/resend | Re-send webhooks
[**updateWebhooks**](WebhookApi.md#updateWebhooks) | **POST** /v1/webhook/update | Update and resend webhooks


# **disableWebhooks**
> \Reepay\Model\Webhook[] disableWebhooks($body)

Disable webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Reepay\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Reepay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$apiInstance = new Reepay\Api\WebhookApi();
$body = new \Reepay\Model\WebhookDisableRequest(); // \Reepay\Model\WebhookDisableRequest |

try {
    $result = $apiInstance->disableWebhooks($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->disableWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\WebhookDisableRequest**](../Model/WebhookDisableRequest.md)|  | [optional]

### Return type

[**\Reepay\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhook**
> \Reepay\Model\Webhook[] getWebhook($id)

Get webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Reepay\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Reepay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$apiInstance = new Reepay\Api\WebhookApi();
$id = "id_example"; // string | Webhook id or event id

try {
    $result = $apiInstance->getWebhook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook id or event id |

### Return type

[**\Reepay\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookRequests**
> \Reepay\Model\WebhookRequest[] getWebhookRequests($id)

Get webhook requests



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Reepay\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Reepay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$apiInstance = new Reepay\Api\WebhookApi();
$id = "id_example"; // string | Webhook id

try {
    $result = $apiInstance->getWebhookRequests($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhookRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook id |

### Return type

[**\Reepay\Model\WebhookRequest[]**](../Model/WebhookRequest.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhooks**
> \Reepay\Model\Webhook[] getWebhooks($created_before, $size, $state)

Get list of webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Reepay\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Reepay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$apiInstance = new Reepay\Api\WebhookApi();
$created_before = "created_before_example"; // string | Get webhooks created before this date, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. Use last created date as filter for next page.
$size = 100; // int | Page size. A maximum of 100 is allowed.
$state = "state_example"; // string | Optional state to filter on, one of the following: `pending`, `disabled`, `failed`, `completed`

try {
    $result = $apiInstance->getWebhooks($created_before, $size, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_before** | **string**| Get webhooks created before this date, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. Use last created date as filter for next page. |
 **size** | **int**| Page size. A maximum of 100 is allowed. | [optional] [default to 100]
 **state** | **string**| Optional state to filter on, one of the following: `pending`, `disabled`, `failed`, `completed` | [optional]

### Return type

[**\Reepay\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendJson**
> \Reepay\Model\Webhook[] resendJson($body)

Re-send webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Reepay\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Reepay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$apiInstance = new Reepay\Api\WebhookApi();
$body = new \Reepay\Model\WebhookResendRequest(); // \Reepay\Model\WebhookResendRequest |

try {
    $result = $apiInstance->resendJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->resendJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\WebhookResendRequest**](../Model/WebhookResendRequest.md)|  | [optional]

### Return type

[**\Reepay\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhooks**
> \Reepay\Model\Webhook[] updateWebhooks($body)

Update and resend webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Reepay\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Reepay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$apiInstance = new Reepay\Api\WebhookApi();
$body = new \Reepay\Model\WebhookUpdateRequest(); // \Reepay\Model\WebhookUpdateRequest |

try {
    $result = $apiInstance->updateWebhooks($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->updateWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\WebhookUpdateRequest**](../Model/WebhookUpdateRequest.md)|  | [optional]

### Return type

[**\Reepay\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

