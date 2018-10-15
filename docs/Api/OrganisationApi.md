# Reepay\OrganisationApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrganisation**](OrganisationApi.md#getOrganisation) | **GET** /v1/organisation | Get organisation
[**update**](OrganisationApi.md#update) | **PUT** /v1/organisation | Update organisation


# **getOrganisation**
> \Reepay\Model\Organisation getOrganisation()

Get organisation



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

$apiInstance = new Reepay\Api\OrganisationApi();

try {
    $result = $apiInstance->getOrganisation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->getOrganisation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\Organisation**](../Model/Organisation.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> \Reepay\Model\Organisation update($body)

Update organisation



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

$apiInstance = new Reepay\Api\OrganisationApi();
$body = new \Reepay\Model\UpdateOrganisation(); // \Reepay\Model\UpdateOrganisation |

try {
    $result = $apiInstance->update($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\UpdateOrganisation**](../Model/UpdateOrganisation.md)|  | [optional]

### Return type

[**\Reepay\Model\Organisation**](../Model/Organisation.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

