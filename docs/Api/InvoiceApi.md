# Reepay\InvoiceApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelAllDunningPending**](InvoiceApi.md#cancelAllDunningPending) | **POST** /v1/invoice/cancel_all_dunning_pending/subscription/{handle} | Cancel all dunning and pending
[**cancelInvoice**](InvoiceApi.md#cancelInvoice) | **POST** /v1/invoice/{id}/cancel | Cancel invoice
[**cancelSettleLater**](InvoiceApi.md#cancelSettleLater) | **POST** /v1/invoice/{id}/settle/cancel | Cancel settle later
[**cancelTransaction**](InvoiceApi.md#cancelTransaction) | **POST** /v1/invoice/{id}/transaction/{transaction}/cancel | Cancel transaction
[**detachFromSubscription**](InvoiceApi.md#detachFromSubscription) | **POST** /v1/invoice/{id}/detach | Detach from subscription
[**getInvoice**](InvoiceApi.md#getInvoice) | **GET** /v1/invoice/{id} | Get invoice
[**getInvoices**](InvoiceApi.md#getInvoices) | **GET** /v1/invoice | Get list of invoices
[**manualSettle**](InvoiceApi.md#manualSettle) | **POST** /v1/invoice/{id}/manual_settle | Manual settle
[**reactivateInvoice**](InvoiceApi.md#reactivateInvoice) | **POST** /v1/invoice/{id}/reactivate | Reactivate invoice
[**settle**](InvoiceApi.md#settle) | **POST** /v1/invoice/{id}/settle | Settle
[**transaction**](InvoiceApi.md#transaction) | **GET** /v1/invoice/{id}/transaction/{transaction} | Get transaction
[**transactionDetails**](InvoiceApi.md#transactionDetails) | **GET** /v1/invoice/{id}/transaction/{transaction}/details | Get transaction details
[**transactionList**](InvoiceApi.md#transactionList) | **GET** /v1/invoice/{id}/transaction | Get transaction list


# **cancelAllDunningPending**
> \Reepay\Model\Invoice[] cancelAllDunningPending($handle)

Cancel all dunning and pending



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

$apiInstance = new Reepay\Api\InvoiceApi();
$handle = "handle_example"; // string | Subscriptiom handle

try {
    $result = $apiInstance->cancelAllDunningPending($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->cancelAllDunningPending: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscriptiom handle |

### Return type

[**\Reepay\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelInvoice**
> \Reepay\Model\Invoice cancelInvoice($id)

Cancel invoice



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

$apiInstance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $apiInstance->cancelInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->cancelInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelSettleLater**
> \Reepay\Model\Invoice cancelSettleLater($id)

Cancel settle later



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

$apiInstance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $apiInstance->cancelSettleLater($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->cancelSettleLater: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelTransaction**
> \Reepay\Model\Transaction cancelTransaction($id, $transaction)

Cancel transaction



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

$apiInstance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$transaction = "transaction_example"; // string | Transaction id

try {
    $result = $apiInstance->cancelTransaction($id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->cancelTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **transaction** | **string**| Transaction id |

### Return type

[**\Reepay\Model\Transaction**](../Model/Transaction.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detachFromSubscription**
> \Reepay\Model\Invoice detachFromSubscription($id)

Detach from subscription



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

$apiInstance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $apiInstance->detachFromSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->detachFromSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoice**
> \Reepay\Model\Invoice getInvoice($id)

Get invoice



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

$apiInstance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $apiInstance->getInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoices**
> \Reepay\Model\InvoiceSearch getInvoices($page, $size, $search, $sort)

Get list of invoices



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

$apiInstance = new Reepay\Api\InvoiceApi();
$page = 1; // int | Page number to get
$size = 20; // int | Page size to use
$search = "search_example"; // string | Optional search expression
$sort = "sort_example"; // string | Optional sorting expression

try {
    $result = $apiInstance->getInvoices($page, $size, $search, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoices: ', $e->getMessage(), PHP_EOL;
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

[**\Reepay\Model\InvoiceSearch**](../Model/InvoiceSearch.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **manualSettle**
> \Reepay\Model\Invoice manualSettle($id, $body)

Manual settle



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

$apiInstance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$body = new \Reepay\Model\ManualSettleTransfer(); // \Reepay\Model\ManualSettleTransfer |

try {
    $result = $apiInstance->manualSettle($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->manualSettle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **body** | [**\Reepay\Model\ManualSettleTransfer**](../Model/ManualSettleTransfer.md)|  | [optional]

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reactivateInvoice**
> \Reepay\Model\Invoice reactivateInvoice($id)

Reactivate invoice



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

$apiInstance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $apiInstance->reactivateInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->reactivateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settle**
> \Reepay\Model\Invoice settle($id, $body)

Settle



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

$apiInstance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$body = new \Reepay\Model\Settle(); // \Reepay\Model\Settle |

try {
    $result = $apiInstance->settle($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->settle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **body** | [**\Reepay\Model\Settle**](../Model/Settle.md)|  | [optional]

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transaction**
> \Reepay\Model\Transaction transaction($id, $transaction)

Get transaction



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

$apiInstance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$transaction = "transaction_example"; // string | Transaction id

try {
    $result = $apiInstance->transaction($id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->transaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **transaction** | **string**| Transaction id |

### Return type

[**\Reepay\Model\Transaction**](../Model/Transaction.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionDetails**
> map[string,object] transactionDetails($id, $transaction)

Get transaction details



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

$apiInstance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$transaction = "transaction_example"; // string | Transaction id

try {
    $result = $apiInstance->transactionDetails($id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->transactionDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **transaction** | **string**| Transaction id |

### Return type

[**map[string,object]**](../Model/map.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionList**
> \Reepay\Model\TransactionSearch transactionList($id, $page, $size, $search, $sort)

Get transaction list



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

$apiInstance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$page = 1; // int | Page number to get
$size = 20; // int | Page size to use
$search = "search_example"; // string | Optional search expression
$sort = "sort_example"; // string | Optional sorting expression

try {
    $result = $apiInstance->transactionList($id, $page, $size, $search, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->transactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **page** | **int**| Page number to get | [optional] [default to 1]
 **size** | **int**| Page size to use | [optional] [default to 20]
 **search** | **string**| Optional search expression | [optional]
 **sort** | **string**| Optional sorting expression | [optional]

### Return type

[**\Reepay\Model\TransactionSearch**](../Model/TransactionSearch.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

