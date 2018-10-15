# Reepay\DunningPlanApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDunningPlanJson**](DunningPlanApi.md#createDunningPlanJson) | **POST** /v1/dunning_plan | Create dunning plan
[**deleteDunningPlan**](DunningPlanApi.md#deleteDunningPlan) | **DELETE** /v1/dunning_plan/{handle} | Delete dunning plan
[**getDunningPlan**](DunningPlanApi.md#getDunningPlan) | **GET** /v1/dunning_plan/{handle} | Get dunning plan
[**getDunningPlans**](DunningPlanApi.md#getDunningPlans) | **GET** /v1/dunning_plan | Get list of dunning plans
[**updateJson**](DunningPlanApi.md#updateJson) | **PUT** /v1/dunning_plan/{handle} | Update dunning plan


# **createDunningPlanJson**
> \Reepay\Model\DunningPlan createDunningPlanJson($body)

Create dunning plan



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

$apiInstance = new Reepay\Api\DunningPlanApi();
$body = new \Reepay\Model\CreateDunningPlan(); // \Reepay\Model\CreateDunningPlan |

try {
    $result = $apiInstance->createDunningPlanJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DunningPlanApi->createDunningPlanJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateDunningPlan**](../Model/CreateDunningPlan.md)|  | [optional]

### Return type

[**\Reepay\Model\DunningPlan**](../Model/DunningPlan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDunningPlan**
> \Reepay\Model\DunningPlan deleteDunningPlan($handle)

Delete dunning plan



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

$apiInstance = new Reepay\Api\DunningPlanApi();
$handle = "handle_example"; // string | Dunning plan handle

try {
    $result = $apiInstance->deleteDunningPlan($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DunningPlanApi->deleteDunningPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Dunning plan handle |

### Return type

[**\Reepay\Model\DunningPlan**](../Model/DunningPlan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDunningPlan**
> \Reepay\Model\DunningPlan getDunningPlan($handle)

Get dunning plan



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

$apiInstance = new Reepay\Api\DunningPlanApi();
$handle = "handle_example"; // string | Dunning plan handle

try {
    $result = $apiInstance->getDunningPlan($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DunningPlanApi->getDunningPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Dunning plan handle |

### Return type

[**\Reepay\Model\DunningPlan**](../Model/DunningPlan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDunningPlans**
> \Reepay\Model\DunningPlan[] getDunningPlans()

Get list of dunning plans



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

$apiInstance = new Reepay\Api\DunningPlanApi();

try {
    $result = $apiInstance->getDunningPlans();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DunningPlanApi->getDunningPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\DunningPlan[]**](../Model/DunningPlan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJson**
> \Reepay\Model\DunningPlan updateJson($handle, $body)

Update dunning plan



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

$apiInstance = new Reepay\Api\DunningPlanApi();
$handle = "handle_example"; // string | Dunning plan handle
$body = new \Reepay\Model\UpdateDunningPlan(); // \Reepay\Model\UpdateDunningPlan |

try {
    $result = $apiInstance->updateJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DunningPlanApi->updateJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Dunning plan handle |
 **body** | [**\Reepay\Model\UpdateDunningPlan**](../Model/UpdateDunningPlan.md)|  | [optional]

### Return type

[**\Reepay\Model\DunningPlan**](../Model/DunningPlan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

