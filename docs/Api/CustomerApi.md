# Reepay\CustomerApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activatePaymentMethod**](CustomerApi.md#activatePaymentMethod) | **POST** /v1/customer/{handle}/payment_method/{method_id}/activate | Activate payment method
[**addCardJson**](CustomerApi.md#addCardJson) | **POST** /v1/customer/{handle}/payment_method/card | Add card payment method
[**createCustomerInvoice**](CustomerApi.md#createCustomerInvoice) | **POST** /v1/customer/{handle}/invoice | Create invoice for customer
[**createCustomerJson**](CustomerApi.md#createCustomerJson) | **POST** /v1/customer | Create customer
[**createCustomerNoteJson**](CustomerApi.md#createCustomerNoteJson) | **POST** /v1/customer/{handle}/note | Create customer note
[**deleteCustomer**](CustomerApi.md#deleteCustomer) | **DELETE** /v1/customer/{handle} | Delete customer
[**getCard**](CustomerApi.md#getCard) | **GET** /v1/customer/{handle}/payment_method/card/{id} | Get card
[**getCardDetails**](CustomerApi.md#getCardDetails) | **GET** /v1/customer/{handle}/payment_method/card/{id}/details | Get gateway card details
[**getCustomer**](CustomerApi.md#getCustomer) | **GET** /v1/customer/{handle} | Get customer
[**getCustomerNotes**](CustomerApi.md#getCustomerNotes) | **GET** /v1/customer/{handle}/note | Get customer notes
[**getCustomerPaymentMethods**](CustomerApi.md#getCustomerPaymentMethods) | **GET** /v1/customer/{handle}/payment_method | Get payment methods
[**getCustomers**](CustomerApi.md#getCustomers) | **GET** /v1/customer | Get list of customers
[**importCardJson**](CustomerApi.md#importCardJson) | **POST** /v1/customer/{handle}/payment_method/card_import | Import card payment method
[**inactivatePaymentMethod**](CustomerApi.md#inactivatePaymentMethod) | **POST** /v1/customer/{handle}/payment_method/{method_id}/inactivate | Inactivate payment method
[**reactivateCard**](CustomerApi.md#reactivateCard) | **POST** /v1/customer/{handle}/payment_method/{card_id}/card_reactivate | Reactivate failed card
[**updateCustomerJson**](CustomerApi.md#updateCustomerJson) | **PUT** /v1/customer/{handle} | Update customer


# **activatePaymentMethod**
> \Reepay\Model\PaymentMethods activatePaymentMethod($handle, $method_id)

Activate payment method



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$method_id = "method_id_example"; // string | Payment method id

try {
    $result = $apiInstance->activatePaymentMethod($handle, $method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->activatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **method_id** | **string**| Payment method id |

### Return type

[**\Reepay\Model\PaymentMethods**](../Model/PaymentMethods.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCardJson**
> \Reepay\Model\Card addCardJson($handle, $body)

Add card payment method



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$body = new \Reepay\Model\CardToken(); // \Reepay\Model\CardToken |

try {
    $result = $apiInstance->addCardJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->addCardJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **body** | [**\Reepay\Model\CardToken**](../Model/CardToken.md)|  | [optional]

### Return type

[**\Reepay\Model\Card**](../Model/Card.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomerInvoice**
> \Reepay\Model\Invoice createCustomerInvoice($handle, $body)

Create invoice for customer



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$body = new \Reepay\Model\CreateCustomerInvoice(); // \Reepay\Model\CreateCustomerInvoice |

try {
    $result = $apiInstance->createCustomerInvoice($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->createCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **body** | [**\Reepay\Model\CreateCustomerInvoice**](../Model/CreateCustomerInvoice.md)|  | [optional]

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomerJson**
> \Reepay\Model\Customer createCustomerJson($body)

Create customer



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

$apiInstance = new Reepay\Api\CustomerApi();
$body = new \Reepay\Model\CreateCustomer(); // \Reepay\Model\CreateCustomer |

try {
    $result = $apiInstance->createCustomerJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->createCustomerJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateCustomer**](../Model/CreateCustomer.md)|  | [optional]

### Return type

[**\Reepay\Model\Customer**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomerNoteJson**
> \Reepay\Model\CustomerNote createCustomerNoteJson($handle, $body)

Create customer note



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string |
$body = new \Reepay\Model\CreateCustomerNote(); // \Reepay\Model\CreateCustomerNote |

try {
    $result = $apiInstance->createCustomerNoteJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->createCustomerNoteJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**|  |
 **body** | [**\Reepay\Model\CreateCustomerNote**](../Model/CreateCustomerNote.md)|  | [optional]

### Return type

[**\Reepay\Model\CustomerNote**](../Model/CustomerNote.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomer**
> \Reepay\Model\Customer deleteCustomer($handle)

Delete customer



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle

try {
    $result = $apiInstance->deleteCustomer($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |

### Return type

[**\Reepay\Model\Customer**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCard**
> \Reepay\Model\Card getCard($handle, $id)

Get card



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$id = "id_example"; // string | Card id

try {
    $result = $apiInstance->getCard($handle, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **id** | **string**| Card id |

### Return type

[**\Reepay\Model\Card**](../Model/Card.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCardDetails**
> map[string,object] getCardDetails($handle, $id)

Get gateway card details



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$id = "id_example"; // string | Card id

try {
    $result = $apiInstance->getCardDetails($handle, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCardDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **id** | **string**| Card id |

### Return type

[**map[string,object]**](../Model/map.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomer**
> \Reepay\Model\Customer getCustomer($handle)

Get customer



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle

try {
    $result = $apiInstance->getCustomer($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |

### Return type

[**\Reepay\Model\Customer**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerNotes**
> \Reepay\Model\CustomerNote[] getCustomerNotes($handle)

Get customer notes



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle

try {
    $result = $apiInstance->getCustomerNotes($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |

### Return type

[**\Reepay\Model\CustomerNote[]**](../Model/CustomerNote.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerPaymentMethods**
> \Reepay\Model\PaymentMethods getCustomerPaymentMethods($handle, $only_active)

Get payment methods



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$only_active = false; // bool | Get only active

try {
    $result = $apiInstance->getCustomerPaymentMethods($handle, $only_active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **only_active** | **bool**| Get only active | [optional] [default to false]

### Return type

[**\Reepay\Model\PaymentMethods**](../Model/PaymentMethods.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomers**
> \Reepay\Model\CustomerSearch getCustomers($page, $size, $search, $sort)

Get list of customers



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

$apiInstance = new Reepay\Api\CustomerApi();
$page = 1; // int | Page number to get
$size = 20; // int | Page size to use
$search = "search_example"; // string | Optional search expression
$sort = "sort_example"; // string | Optional sorting expression

try {
    $result = $apiInstance->getCustomers($page, $size, $search, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomers: ', $e->getMessage(), PHP_EOL;
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

[**\Reepay\Model\CustomerSearch**](../Model/CustomerSearch.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importCardJson**
> \Reepay\Model\Card importCardJson($handle, $body)

Import card payment method



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$body = new \Reepay\Model\CardImport(); // \Reepay\Model\CardImport |

try {
    $result = $apiInstance->importCardJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->importCardJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **body** | [**\Reepay\Model\CardImport**](../Model/CardImport.md)|  | [optional]

### Return type

[**\Reepay\Model\Card**](../Model/Card.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inactivatePaymentMethod**
> \Reepay\Model\PaymentMethods inactivatePaymentMethod($handle, $method_id)

Inactivate payment method



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$method_id = "method_id_example"; // string | Payment method id

try {
    $result = $apiInstance->inactivatePaymentMethod($handle, $method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->inactivatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **method_id** | **string**| Payment method id |

### Return type

[**\Reepay\Model\PaymentMethods**](../Model/PaymentMethods.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reactivateCard**
> \Reepay\Model\Card reactivateCard($handle, $card_id)

Reactivate failed card



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$card_id = "card_id_example"; // string | Card id

try {
    $result = $apiInstance->reactivateCard($handle, $card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->reactivateCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **card_id** | **string**| Card id |

### Return type

[**\Reepay\Model\Card**](../Model/Card.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerJson**
> \Reepay\Model\Customer updateCustomerJson($handle, $body)

Update customer



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

$apiInstance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$body = new \Reepay\Model\UpdateCustomer(); // \Reepay\Model\UpdateCustomer |

try {
    $result = $apiInstance->updateCustomerJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->updateCustomerJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **body** | [**\Reepay\Model\UpdateCustomer**](../Model/UpdateCustomer.md)|  | [optional]

### Return type

[**\Reepay\Model\Customer**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

