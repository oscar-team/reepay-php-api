# Reepay\PlanApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlanJson**](PlanApi.md#createPlanJson) | **POST** /v1/plan | Create plan
[**deletePlan**](PlanApi.md#deletePlan) | **DELETE** /v1/plan/{handle} | Delete plan
[**getCurrentPlan**](PlanApi.md#getCurrentPlan) | **GET** /v1/plan/{handle}/current | Get plan
[**getPlan**](PlanApi.md#getPlan) | **GET** /v1/plan/{handle}/{version} | Get plan version
[**getPlans**](PlanApi.md#getPlans) | **GET** /v1/plan/{handle} | Get list of plan versions
[**getPlansList**](PlanApi.md#getPlansList) | **GET** /v1/plan | Get list of plans
[**supersedePlanJson**](PlanApi.md#supersedePlanJson) | **POST** /v1/plan/{handle} | Supersede plan
[**updatePlanJson**](PlanApi.md#updatePlanJson) | **PUT** /v1/plan/{handle} | Update plan


# **createPlanJson**
> \Reepay\Model\Plan createPlanJson($body)

Create plan



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

$apiInstance = new Reepay\Api\PlanApi();
$body = new \Reepay\Model\CreateSubscriptionPlan(); // \Reepay\Model\CreateSubscriptionPlan |

try {
    $result = $apiInstance->createPlanJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->createPlanJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateSubscriptionPlan**](../Model/CreateSubscriptionPlan.md)|  | [optional]

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePlan**
> \Reepay\Model\Plan deletePlan($handle)

Delete plan



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

$apiInstance = new Reepay\Api\PlanApi();
$handle = "handle_example"; // string | Subscription plan handle

try {
    $result = $apiInstance->deletePlan($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->deletePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription plan handle |

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentPlan**
> \Reepay\Model\Plan getCurrentPlan($handle)

Get plan



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

$apiInstance = new Reepay\Api\PlanApi();
$handle = "handle_example"; // string | Plan handle

try {
    $result = $apiInstance->getCurrentPlan($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->getCurrentPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Plan handle |

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlan**
> \Reepay\Model\Plan getPlan($handle, $version)

Get plan version



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

$apiInstance = new Reepay\Api\PlanApi();
$handle = "handle_example"; // string | Plan handle
$version = 56; // int | Plan version

try {
    $result = $apiInstance->getPlan($handle, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->getPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Plan handle |
 **version** | **int**| Plan version |

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlans**
> \Reepay\Model\Plan[] getPlans($handle)

Get list of plan versions



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

$apiInstance = new Reepay\Api\PlanApi();
$handle = "handle_example"; // string | Plan handle

try {
    $result = $apiInstance->getPlans($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->getPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Plan handle |

### Return type

[**\Reepay\Model\Plan[]**](../Model/Plan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlansList**
> \Reepay\Model\Plan[] getPlansList($only_active)

Get list of plans



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

$apiInstance = new Reepay\Api\PlanApi();
$only_active = false; // bool | Get only active

try {
    $result = $apiInstance->getPlansList($only_active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->getPlansList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **only_active** | **bool**| Get only active | [optional] [default to false]

### Return type

[**\Reepay\Model\Plan[]**](../Model/Plan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supersedePlanJson**
> \Reepay\Model\Plan supersedePlanJson($handle, $body)

Supersede plan



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

$apiInstance = new Reepay\Api\PlanApi();
$handle = "handle_example"; // string | Plan handle
$body = new \Reepay\Model\SupersedeSubscriptionPlan(); // \Reepay\Model\SupersedeSubscriptionPlan |

try {
    $result = $apiInstance->supersedePlanJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->supersedePlanJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Plan handle |
 **body** | [**\Reepay\Model\SupersedeSubscriptionPlan**](../Model/SupersedeSubscriptionPlan.md)|  | [optional]

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlanJson**
> \Reepay\Model\Plan updatePlanJson($handle, $body)

Update plan



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

$apiInstance = new Reepay\Api\PlanApi();
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\UpdateSubscriptionPlan(); // \Reepay\Model\UpdateSubscriptionPlan |

try {
    $result = $apiInstance->updatePlanJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->updatePlanJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\UpdateSubscriptionPlan**](../Model/UpdateSubscriptionPlan.md)|  | [optional]

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

