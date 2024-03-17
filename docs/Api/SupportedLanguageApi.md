# Reepay\SupportedLanguageApi

All URIs are relative to *https://checkout-api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSupportedLanguage**](SupportedLanguageApi.md#getsupportedlanguage) | **GET** /v1/supported_language/{language} | Get supported language
[**getSupportedLanguages**](SupportedLanguageApi.md#getsupportedlanguages) | **GET** /v1/supported_language | 

# **getSupportedLanguage**
> \Reepay\Model\SupportedLanguage getSupportedLanguage($language)

Get supported language

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\SupportedLanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = "language_example"; // string | Supported language

try {
    $result = $apiInstance->getSupportedLanguage($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportedLanguageApi->getSupportedLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Supported language |

### Return type

[**\Reepay\Model\SupportedLanguage**](../Model/SupportedLanguage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSupportedLanguages**
> \Reepay\Model\SupportedLanguageList getSupportedLanguages()



Get list of supported languages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\SupportedLanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSupportedLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportedLanguageApi->getSupportedLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\SupportedLanguageList**](../Model/SupportedLanguageList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

