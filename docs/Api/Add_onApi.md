# Reepay\Add_onApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddOn**](Add_onApi.md#createAddOn) | **POST** /v1/add_on | Create add-on
[**deleteAddOn**](Add_onApi.md#deleteAddOn) | **DELETE** /v1/add_on/{handle} | Delete add-on
[**getAddOn**](Add_onApi.md#getAddOn) | **GET** /v1/add_on/{handle} | Get add-on
[**getAddOns**](Add_onApi.md#getAddOns) | **GET** /v1/add_on | Get list of add-ons
[**undeleteAddOn**](Add_onApi.md#undeleteAddOn) | **POST** /v1/add_on/{handle}/undelete | Un-delete add-on
[**updateAddOn**](Add_onApi.md#updateAddOn) | **PUT** /v1/add_on/{handle} | Update add-on


# **createAddOn**
> \Reepay\Model\AddOn createAddOn($body)

Create add-on



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

$apiInstance = new Reepay\Api\Add_onApi();
$body = new \Reepay\Model\CreateAddOn(); // \Reepay\Model\CreateAddOn |

try {
    $result = $apiInstance->createAddOn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Add_onApi->createAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateAddOn**](../Model/CreateAddOn.md)|  | [optional]

### Return type

[**\Reepay\Model\AddOn**](../Model/AddOn.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAddOn**
> \Reepay\Model\AddOn deleteAddOn($handle)

Delete add-on



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

$apiInstance = new Reepay\Api\Add_onApi();
$handle = "handle_example"; // string | Add-on handle

try {
    $result = $apiInstance->deleteAddOn($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Add_onApi->deleteAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Add-on handle |

### Return type

[**\Reepay\Model\AddOn**](../Model/AddOn.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddOn**
> \Reepay\Model\AddOn getAddOn($handle)

Get add-on



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

$apiInstance = new Reepay\Api\Add_onApi();
$handle = "handle_example"; // string | Add-on handle

try {
    $result = $apiInstance->getAddOn($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Add_onApi->getAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Add-on handle |

### Return type

[**\Reepay\Model\AddOn**](../Model/AddOn.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddOns**
> \Reepay\Model\AddOnSearch getAddOns($page, $size, $search, $sort)

Get list of add-ons



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

$apiInstance = new Reepay\Api\Add_onApi();
$page = 1; // int | Page number to get
$size = 20; // int | Page size to use
$search = "search_example"; // string | Optional search expression
$sort = "sort_example"; // string | Optional sorting expression

try {
    $result = $apiInstance->getAddOns($page, $size, $search, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Add_onApi->getAddOns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to get | [optional] [default to 1]
 **size** | **int**| Page size to use | [optional] [default to 20]
 **search** | **string**| Optional search expression | [optional]
 **sort** | **string**| Optional sorting expression | [optional]

### Return type

[**\Reepay\Model\AddOnSearch**](../Model/AddOnSearch.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **undeleteAddOn**
> \Reepay\Model\AddOn undeleteAddOn($handle)

Un-delete add-on



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

$apiInstance = new Reepay\Api\Add_onApi();
$handle = "handle_example"; // string | Add-on handle

try {
    $result = $apiInstance->undeleteAddOn($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Add_onApi->undeleteAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Add-on handle |

### Return type

[**\Reepay\Model\AddOn**](../Model/AddOn.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddOn**
> \Reepay\Model\AddOn updateAddOn($handle, $body)

Update add-on



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

$apiInstance = new Reepay\Api\Add_onApi();
$handle = "handle_example"; // string | Add-on handle
$body = new \Reepay\Model\UpdateAddOn(); // \Reepay\Model\UpdateAddOn |

try {
    $result = $apiInstance->updateAddOn($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Add_onApi->updateAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Add-on handle |
 **body** | [**\Reepay\Model\UpdateAddOn**](../Model/UpdateAddOn.md)|  | [optional]

### Return type

[**\Reepay\Model\AddOn**](../Model/AddOn.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

