# Reepay\EntitlementApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEntitlement**](EntitlementApi.md#createentitlement) | **POST** /v1/entitlement | Create entitlement
[**getEntitlements**](EntitlementApi.md#getentitlements) | **GET** /v1/entitlement | Get entitlements
[**updateEntitlement**](EntitlementApi.md#updateentitlement) | **PUT** /v1/entitlement/{handle} | Update entitlement

# **createEntitlement**
> \Reepay\Model\Entitlement createEntitlement($body)

Create entitlement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\EntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\CreateEntitlement(); // \Reepay\Model\CreateEntitlement | 

try {
    $result = $apiInstance->createEntitlement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementApi->createEntitlement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateEntitlement**](../Model/CreateEntitlement.md)|  |

### Return type

[**\Reepay\Model\Entitlement**](../Model/Entitlement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntitlements**
> \Reepay\Model\EntitlementSearch getEntitlements($page, $size, $search)

Get entitlements

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\EntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | 
$size = 20; // int | 
$search = "search_example"; // string | 

try {
    $result = $apiInstance->getEntitlements($page, $size, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementApi->getEntitlements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional] [default to 1]
 **size** | **int**|  | [optional] [default to 20]
 **search** | **string**|  | [optional]

### Return type

[**\Reepay\Model\EntitlementSearch**](../Model/EntitlementSearch.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEntitlement**
> \Reepay\Model\Entitlement updateEntitlement($body, $handle)

Update entitlement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\EntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\UpdateEntitlementDto(); // \Reepay\Model\UpdateEntitlementDto | 
$handle = "handle_example"; // string | 

try {
    $result = $apiInstance->updateEntitlement($body, $handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementApi->updateEntitlement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\UpdateEntitlementDto**](../Model/UpdateEntitlementDto.md)|  |
 **handle** | **string**|  |

### Return type

[**\Reepay\Model\Entitlement**](../Model/Entitlement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

