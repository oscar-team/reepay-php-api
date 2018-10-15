# Reepay\AgreementApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCardGatewayAgreement**](AgreementApi.md#createCardGatewayAgreement) | **POST** /v1/agreement/card_gateway | Create card gateway agreement
[**deleteCardGatewayAgreement**](AgreementApi.md#deleteCardGatewayAgreement) | **DELETE** /v1/agreement/card_gateway/{id} | Delete card gateway agreement
[**disableCardGatewayAgreement**](AgreementApi.md#disableCardGatewayAgreement) | **POST** /v1/agreement/card_gateway/{id}/disable | Disable card gateway agreement
[**enableCardGatewayAgreement**](AgreementApi.md#enableCardGatewayAgreement) | **POST** /v1/agreement/card_gateway/{id}/enable | Enable card gateway agreement
[**getCardGatewayAgreement**](AgreementApi.md#getCardGatewayAgreement) | **GET** /v1/agreement/card_gateway/{id} | Get card gateway agreement
[**getCardGatewayAgreements**](AgreementApi.md#getCardGatewayAgreements) | **GET** /v1/agreement/card_gateway | Get all card gateway agreements
[**updateCardGatewayAgreement**](AgreementApi.md#updateCardGatewayAgreement) | **PUT** /v1/agreement/card_gateway/{id} | Update card gateway agreement


# **createCardGatewayAgreement**
> \Reepay\Model\CardGatewayAgreement createCardGatewayAgreement($body)

Create card gateway agreement



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

$apiInstance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\CreateCardGatewayAgreement(); // \Reepay\Model\CreateCardGatewayAgreement |

try {
    $result = $apiInstance->createCardGatewayAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createCardGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateCardGatewayAgreement**](../Model/CreateCardGatewayAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\CardGatewayAgreement**](../Model/CardGatewayAgreement.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCardGatewayAgreement**
> \Reepay\Model\CardGatewayAgreement deleteCardGatewayAgreement($id)

Delete card gateway agreement



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

$apiInstance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id

try {
    $result = $apiInstance->deleteCardGatewayAgreement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->deleteCardGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |

### Return type

[**\Reepay\Model\CardGatewayAgreement**](../Model/CardGatewayAgreement.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableCardGatewayAgreement**
> \Reepay\Model\CardGatewayAgreement disableCardGatewayAgreement($id)

Disable card gateway agreement



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

$apiInstance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id

try {
    $result = $apiInstance->disableCardGatewayAgreement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->disableCardGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |

### Return type

[**\Reepay\Model\CardGatewayAgreement**](../Model/CardGatewayAgreement.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableCardGatewayAgreement**
> \Reepay\Model\CardGatewayAgreement enableCardGatewayAgreement($id)

Enable card gateway agreement



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

$apiInstance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id

try {
    $result = $apiInstance->enableCardGatewayAgreement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->enableCardGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |

### Return type

[**\Reepay\Model\CardGatewayAgreement**](../Model/CardGatewayAgreement.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCardGatewayAgreement**
> \Reepay\Model\CardGatewayAgreement getCardGatewayAgreement($id)

Get card gateway agreement



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

$apiInstance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id

try {
    $result = $apiInstance->getCardGatewayAgreement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->getCardGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |

### Return type

[**\Reepay\Model\CardGatewayAgreement**](../Model/CardGatewayAgreement.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCardGatewayAgreements**
> \Reepay\Model\CardGatewayAgreement[] getCardGatewayAgreements($only_active, $non_deleted)

Get all card gateway agreements



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

$apiInstance = new Reepay\Api\AgreementApi();
$only_active = false; // bool | Get only active
$non_deleted = false; // bool | Get only non-deleted

try {
    $result = $apiInstance->getCardGatewayAgreements($only_active, $non_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->getCardGatewayAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **only_active** | **bool**| Get only active | [optional] [default to false]
 **non_deleted** | **bool**| Get only non-deleted | [optional] [default to false]

### Return type

[**\Reepay\Model\CardGatewayAgreement[]**](../Model/CardGatewayAgreement.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCardGatewayAgreement**
> \Reepay\Model\CardGatewayAgreement updateCardGatewayAgreement($id, $body)

Update card gateway agreement



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

$apiInstance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateCardGatewayAgreement(); // \Reepay\Model\UpdateCardGatewayAgreement |

try {
    $result = $apiInstance->updateCardGatewayAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateCardGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\UpdateCardGatewayAgreement**](../Model/UpdateCardGatewayAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\CardGatewayAgreement**](../Model/CardGatewayAgreement.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

