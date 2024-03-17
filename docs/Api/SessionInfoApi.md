# Reepay\SessionInfoApi

All URIs are relative to *https://checkout-api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSession**](SessionInfoApi.md#getsession) | **GET** /v1/session_info/{id} | Get session info
[**getSessions**](SessionInfoApi.md#getsessions) | **GET** /v1/session_info/{relation_type}/{handle} | Get sessions by relation type and handle

# **getSession**
> \Reepay\Model\SessionInfo getSession($id)

Get session info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SessionInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->getSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionInfoApi->getSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\SessionInfo**](../Model/SessionInfo.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSessions**
> \Reepay\Model\SessionInfo[] getSessions($relation_type, $handle)

Get sessions by relation type and handle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SessionInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_type = "relation_type_example"; // string | Relation type
$handle = "handle_example"; // string | Relation handle

try {
    $result = $apiInstance->getSessions($relation_type, $handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionInfoApi->getSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **relation_type** | **string**| Relation type |
 **handle** | **string**| Relation handle |

### Return type

[**\Reepay\Model\SessionInfo[]**](../Model/SessionInfo.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

