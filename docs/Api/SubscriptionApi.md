# Reepay\SubscriptionApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelSubscription**](SubscriptionApi.md#cancelSubscription) | **POST** /v1/subscription/{handle}/cancel | Cancel subscription
[**changeNextPeriodStartJson**](SubscriptionApi.md#changeNextPeriodStartJson) | **POST** /v1/subscription/{handle}/change_next_period_start | Change next renewal date
[**changeSubscription**](SubscriptionApi.md#changeSubscription) | **PUT** /v1/subscription/{handle} | Change subscription
[**createSubscriptionDiscount**](SubscriptionApi.md#createSubscriptionDiscount) | **POST** /v1/subscription/{handle}/discount | Add subscription discount
[**createSubscriptionInvoice**](SubscriptionApi.md#createSubscriptionInvoice) | **POST** /v1/subscription/{handle}/invoice | Create invoice ondemand for subscription
[**createSubscriptionJson**](SubscriptionApi.md#createSubscriptionJson) | **POST** /v1/subscription | Create subscription
[**deleteSubscriptionDiscount**](SubscriptionApi.md#deleteSubscriptionDiscount) | **DELETE** /v1/subscription/{handle}/discount/{sdHandle} | Delete subscription discount
[**expire**](SubscriptionApi.md#expire) | **POST** /v1/subscription/{handle}/expire | Expire subscription
[**getSubscription**](SubscriptionApi.md#getSubscription) | **GET** /v1/subscription/{handle} | Get subscription
[**getSubscriptionAddOn**](SubscriptionApi.md#getSubscriptionAddOn) | **GET** /v1/subscription/{handle}/add_on/{saHandle} | Get subscription add-on
[**getSubscriptionAddOns**](SubscriptionApi.md#getSubscriptionAddOns) | **GET** /v1/subscription/{handle}/add_on | Get subscription add-ons
[**getSubscriptionDiscount**](SubscriptionApi.md#getSubscriptionDiscount) | **GET** /v1/subscription/{handle}/discount/{sdHandle} | Get subscription discount
[**getSubscriptionDiscounts**](SubscriptionApi.md#getSubscriptionDiscounts) | **GET** /v1/subscription/{handle}/discount | Get subscription discounts
[**getSubscriptionPaymentMethods**](SubscriptionApi.md#getSubscriptionPaymentMethods) | **GET** /v1/subscription/{handle}/payment_method | Get payment methods
[**getSubscriptionPeriodBalance**](SubscriptionApi.md#getSubscriptionPeriodBalance) | **GET** /v1/subscription/{handle}/period_balance | Get the period balance for subscription
[**getSubscriptions**](SubscriptionApi.md#getSubscriptions) | **GET** /v1/subscription | Get list of subscriptions
[**intervalAmount**](SubscriptionApi.md#intervalAmount) | **GET** /v1/subscription/{handle}/interval_amount | Calculate interval amount
[**onHold**](SubscriptionApi.md#onHold) | **POST** /v1/subscription/{handle}/on_hold | Subscription on hold
[**reactivateSubscription**](SubscriptionApi.md#reactivateSubscription) | **POST** /v1/subscription/{handle}/reactivate | Reactivate subscription on hold
[**redeemCouponCode**](SubscriptionApi.md#redeemCouponCode) | **POST** /v1/subscription/{handle}/coupon | Redeem coupon code for subscription
[**removeAllPaymentMethods**](SubscriptionApi.md#removeAllPaymentMethods) | **DELETE** /v1/subscription/{handle}/payment_method | Remove all payment methods
[**removePaymentMethod**](SubscriptionApi.md#removePaymentMethod) | **DELETE** /v1/subscription/{handle}/payment_method/{method_id} | Remove payment method
[**setPaymentMethod**](SubscriptionApi.md#setPaymentMethod) | **POST** /v1/subscription/{handle}/payment_method | Set payment method
[**uncancel**](SubscriptionApi.md#uncancel) | **POST** /v1/subscription/{handle}/uncancel | Uncancel subscription


# **cancelSubscription**
> \Reepay\Model\Subscription cancelSubscription($handle, $body)

Cancel subscription



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\CancelSubscription(); // \Reepay\Model\CancelSubscription |

try {
    $result = $apiInstance->cancelSubscription($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->cancelSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\CancelSubscription**](../Model/CancelSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeNextPeriodStartJson**
> \Reepay\Model\Subscription changeNextPeriodStartJson($handle, $body)

Change next renewal date



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\ChangeNextPeriodStart(); // \Reepay\Model\ChangeNextPeriodStart |

try {
    $result = $apiInstance->changeNextPeriodStartJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->changeNextPeriodStartJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\ChangeNextPeriodStart**](../Model/ChangeNextPeriodStart.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeSubscription**
> \Reepay\Model\Subscription changeSubscription($handle, $body)

Change subscription



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\ChangeSubscription(); // \Reepay\Model\ChangeSubscription |

try {
    $result = $apiInstance->changeSubscription($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->changeSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\ChangeSubscription**](../Model/ChangeSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscriptionDiscount**
> \Reepay\Model\SubscriptionDiscount createSubscriptionDiscount($handle, $body)

Add subscription discount



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\CreateSubscriptionDiscount(); // \Reepay\Model\CreateSubscriptionDiscount |

try {
    $result = $apiInstance->createSubscriptionDiscount($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->createSubscriptionDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\CreateSubscriptionDiscount**](../Model/CreateSubscriptionDiscount.md)|  | [optional]

### Return type

[**\Reepay\Model\SubscriptionDiscount**](../Model/SubscriptionDiscount.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscriptionInvoice**
> \Reepay\Model\Invoice createSubscriptionInvoice($handle, $body)

Create invoice ondemand for subscription



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\CreateSubscriptionInvoice(); // \Reepay\Model\CreateSubscriptionInvoice |

try {
    $result = $apiInstance->createSubscriptionInvoice($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->createSubscriptionInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\CreateSubscriptionInvoice**](../Model/CreateSubscriptionInvoice.md)|  | [optional]

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscriptionJson**
> \Reepay\Model\Subscription createSubscriptionJson($body)

Create subscription



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$body = new \Reepay\Model\CreateSubscription(); // \Reepay\Model\CreateSubscription |

try {
    $result = $apiInstance->createSubscriptionJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->createSubscriptionJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateSubscription**](../Model/CreateSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscriptionDiscount**
> \Reepay\Model\SubscriptionDiscount deleteSubscriptionDiscount($handle, $sd_handle)

Delete subscription discount



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$sd_handle = "sd_handle_example"; // string | Subscription discount handle

try {
    $result = $apiInstance->deleteSubscriptionDiscount($handle, $sd_handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->deleteSubscriptionDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **sd_handle** | **string**| Subscription discount handle |

### Return type

[**\Reepay\Model\SubscriptionDiscount**](../Model/SubscriptionDiscount.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expire**
> \Reepay\Model\Subscription expire($handle, $body)

Expire subscription



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\ExpireSubscription(); // \Reepay\Model\ExpireSubscription |

try {
    $result = $apiInstance->expire($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->expire: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\ExpireSubscription**](../Model/ExpireSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \Reepay\Model\Subscription getSubscription($handle)

Get subscription



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->getSubscription($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionAddOn**
> \Reepay\Model\SubscriptionAddOn getSubscriptionAddOn($handle, $sa_handle)

Get subscription add-on



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$sa_handle = "sa_handle_example"; // string | Subscription add-on handle

try {
    $result = $apiInstance->getSubscriptionAddOn($handle, $sa_handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **sa_handle** | **string**| Subscription add-on handle |

### Return type

[**\Reepay\Model\SubscriptionAddOn**](../Model/SubscriptionAddOn.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionAddOns**
> \Reepay\Model\SubscriptionAddOn[] getSubscriptionAddOns($handle)

Get subscription add-ons



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->getSubscriptionAddOns($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionAddOns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\SubscriptionAddOn[]**](../Model/SubscriptionAddOn.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionDiscount**
> \Reepay\Model\SubscriptionDiscount getSubscriptionDiscount($handle, $sd_handle)

Get subscription discount



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$sd_handle = "sd_handle_example"; // string | Subscription discount handle

try {
    $result = $apiInstance->getSubscriptionDiscount($handle, $sd_handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **sd_handle** | **string**| Subscription discount handle |

### Return type

[**\Reepay\Model\SubscriptionDiscount**](../Model/SubscriptionDiscount.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionDiscounts**
> \Reepay\Model\SubscriptionDiscount[] getSubscriptionDiscounts($handle)

Get subscription discounts



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->getSubscriptionDiscounts($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\SubscriptionDiscount[]**](../Model/SubscriptionDiscount.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionPaymentMethods**
> \Reepay\Model\PaymentMethods getSubscriptionPaymentMethods($handle)

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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->getSubscriptionPaymentMethods($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\PaymentMethods**](../Model/PaymentMethods.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionPeriodBalance**
> \Reepay\Model\SubscriptionPeriodBalance getSubscriptionPeriodBalance($handle, $date)

Get the period balance for subscription



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$date = "date_example"; // string | Optional period date (default now) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss`

try {
    $result = $apiInstance->getSubscriptionPeriodBalance($handle, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionPeriodBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **date** | **string**| Optional period date (default now) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss` | [optional]

### Return type

[**\Reepay\Model\SubscriptionPeriodBalance**](../Model/SubscriptionPeriodBalance.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptions**
> \Reepay\Model\SubscriptionSearch getSubscriptions($page, $size, $search, $sort)

Get list of subscriptions



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$page = 1; // int | Page number to get
$size = 20; // int | Page size to use
$search = "search_example"; // string | Optional search expression
$sort = "sort_example"; // string | Optional sorting expression

try {
    $result = $apiInstance->getSubscriptions($page, $size, $search, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptions: ', $e->getMessage(), PHP_EOL;
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

[**\Reepay\Model\SubscriptionSearch**](../Model/SubscriptionSearch.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **intervalAmount**
> \Reepay\Model\IntervalAmount intervalAmount($handle, $from, $to)

Calculate interval amount



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$from = "from_example"; // string | From date on the form yyyy-MM-dd
$to = "to_example"; // string | To date on the form yyyy-MM-dd

try {
    $result = $apiInstance->intervalAmount($handle, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->intervalAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **from** | **string**| From date on the form yyyy-MM-dd |
 **to** | **string**| To date on the form yyyy-MM-dd |

### Return type

[**\Reepay\Model\IntervalAmount**](../Model/IntervalAmount.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **onHold**
> \Reepay\Model\Subscription onHold($handle, $body)

Subscription on hold



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\OnHoldSubscription(); // \Reepay\Model\OnHoldSubscription |

try {
    $result = $apiInstance->onHold($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->onHold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\OnHoldSubscription**](../Model/OnHoldSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reactivateSubscription**
> \Reepay\Model\Subscription reactivateSubscription($handle, $body)

Reactivate subscription on hold



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\ReactivateSubscription(); // \Reepay\Model\ReactivateSubscription |

try {
    $result = $apiInstance->reactivateSubscription($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->reactivateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\ReactivateSubscription**](../Model/ReactivateSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **redeemCouponCode**
> \Reepay\Model\CouponRedemption redeemCouponCode($handle, $body)

Redeem coupon code for subscription



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\RedeemCouponCode(); // \Reepay\Model\RedeemCouponCode |

try {
    $result = $apiInstance->redeemCouponCode($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->redeemCouponCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\RedeemCouponCode**](../Model/RedeemCouponCode.md)|  | [optional]

### Return type

[**\Reepay\Model\CouponRedemption**](../Model/CouponRedemption.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAllPaymentMethods**
> \Reepay\Model\PaymentMethods removeAllPaymentMethods($handle)

Remove all payment methods



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->removeAllPaymentMethods($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->removeAllPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\PaymentMethods**](../Model/PaymentMethods.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removePaymentMethod**
> \Reepay\Model\PaymentMethods removePaymentMethod($handle, $method_id)

Remove payment method



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$method_id = "method_id_example"; // string | Payment method id

try {
    $result = $apiInstance->removePaymentMethod($handle, $method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->removePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **method_id** | **string**| Payment method id |

### Return type

[**\Reepay\Model\PaymentMethods**](../Model/PaymentMethods.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPaymentMethod**
> \Reepay\Model\PaymentMethods setPaymentMethod($handle, $body)

Set payment method



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\SetPaymentMethod(); // \Reepay\Model\SetPaymentMethod |

try {
    $result = $apiInstance->setPaymentMethod($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->setPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\SetPaymentMethod**](../Model/SetPaymentMethod.md)|  | [optional]

### Return type

[**\Reepay\Model\PaymentMethods**](../Model/PaymentMethods.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uncancel**
> \Reepay\Model\Subscription uncancel($handle)

Uncancel subscription



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

$apiInstance = new Reepay\Api\SubscriptionApi();
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->uncancel($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->uncancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

