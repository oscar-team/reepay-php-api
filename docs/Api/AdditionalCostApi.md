# Swagger\Client\AdditionalCostApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelAdditionalCost**](AdditionalCostApi.md#cancelAdditionalCost) | **POST** /v1/additional_cost/{handle}/cancel | Cancel pending additional cost
[**createAdditionalCostJson**](AdditionalCostApi.md#createAdditionalCostJson) | **POST** /v1/additional_cost | Create additional cost
[**getAdditionalCost**](AdditionalCostApi.md#getAdditionalCost) | **GET** /v1/additional_cost/{handle} | Get additional cost
[**getAdditionalCosts**](AdditionalCostApi.md#getAdditionalCosts) | **GET** /v1/additional_cost/subscription/{handle} | Get additional costs for subscription


# **cancelAdditionalCost**
> \Swagger\Client\Model\AdditionalCost cancelAdditionalCost($handle)

Cancel pending additional cost



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdditionalCostApi();
$handle = "handle_example"; // string | Additonal cost handle

try {
    $result = $api_instance->cancelAdditionalCost($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalCostApi->cancelAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Additonal cost handle |

### Return type

[**\Swagger\Client\Model\AdditionalCost**](../Model/AdditionalCost.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAdditionalCostJson**
> \Swagger\Client\Model\AdditionalCost createAdditionalCostJson($body)

Create additional cost



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdditionalCostApi();
$body = new \Swagger\Client\Model\CreateAdditionalCost(); // \Swagger\Client\Model\CreateAdditionalCost | 

try {
    $result = $api_instance->createAdditionalCostJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalCostApi->createAdditionalCostJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateAdditionalCost**](../Model/CreateAdditionalCost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AdditionalCost**](../Model/AdditionalCost.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdditionalCost**
> \Swagger\Client\Model\AdditionalCost getAdditionalCost($handle)

Get additional cost



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdditionalCostApi();
$handle = "handle_example"; // string | Additonal cost handle

try {
    $result = $api_instance->getAdditionalCost($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalCostApi->getAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Additonal cost handle |

### Return type

[**\Swagger\Client\Model\AdditionalCost**](../Model/AdditionalCost.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdditionalCosts**
> \Swagger\Client\Model\AdditionalCost[] getAdditionalCosts($handle)

Get additional costs for subscription



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdditionalCostApi();
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $api_instance->getAdditionalCosts($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalCostApi->getAdditionalCosts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Swagger\Client\Model\AdditionalCost[]**](../Model/AdditionalCost.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

