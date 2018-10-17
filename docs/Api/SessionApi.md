# Reepay\Client\SessionApi

All URIs are relative to *https://checkout-api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSession**](SessionApi.md#createSession) | **POST** /v1/session/charge | Create charge session
[**deleteSession**](SessionApi.md#deleteSession) | **DELETE** /v1/session/{id} | Delete session

# **createSession**
> \Reepay\Client\Model\Session createSession($body)

Create charge

### Example
```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

// Configure API key authorization: apiKey
Reepay\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Reepay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$params = [
    'order' => [
        'handle' => 'order-12345',
        'amount' => 100, // amount in the smallest unit for the account currency, e.g. cents for USD
        'currency' => USD,
        'customer' => [
            'email' => 'johndoe@somedomain.com',
            // Use this line to identify the customer in Reepay
            'handle' => 'cust-001',
            // Use this line if you want for Reepay to generate an unique handle for the customer
            // 'generate_handle' => true,
            'first_name' => 'John',
            'last_name' => 'Doe',
        ],
    ],
    'accept_url' => 'https://webshop.com/accept/order-12345',
    'cancel_url' => 'https://webshop.com/decline/order-12345',
];
$apiInstance = new Reepay\Api\SessionApi();
$body = new \Reepay\Model\CreateSession($params); // \Reepay\Model\Session |

try {
    $result = $apiInstance->createSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->createSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateSession**](../Model/CreateSession.md)|  | [optional]

### Return type

[**\Reepay\Model\Session**](../Model/Session.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSession**
> \Reepay\Model\Session deleteSession($id)

Delete session



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

$apiInstance = new Reepay\Api\SessionApi();
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->deleteSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->deleteSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\Session**](../Model/Session.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
