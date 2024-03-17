# Reepay\AdminSignupApi

All URIs are relative to *https://checkout-api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSignupPage**](AdminSignupApi.md#createsignuppage) | **POST** /v1/admin/signup_page | Create a signup page
[**createSubscriptionProduct**](AdminSignupApi.md#createsubscriptionproduct) | **POST** /v1/admin/signup_page/product | Create a subscription product for signup pages
[**deleteSignupPage**](AdminSignupApi.md#deletesignuppage) | **DELETE** /v1/admin/signup_page/{handle} | Delete a sign-up page
[**deleteSubscriptionProduct**](AdminSignupApi.md#deletesubscriptionproduct) | **DELETE** /v1/admin/signup_page/product/{handle} | Delete a subscription product
[**getAllSignupPages**](AdminSignupApi.md#getallsignuppages) | **GET** /v1/admin/signup_page | Get all signup pages
[**getAllSubscriptionProducts**](AdminSignupApi.md#getallsubscriptionproducts) | **GET** /v1/admin/signup_page/product | Get all subscription products available for an account
[**getSignupPage**](AdminSignupApi.md#getsignuppage) | **GET** /v1/admin/signup_page/{handle} | Get a signup page
[**getSubscriptionProduct**](AdminSignupApi.md#getsubscriptionproduct) | **GET** /v1/admin/signup_page/product/{handle} | Get a subscription product for signup pages
[**updateSignupPage**](AdminSignupApi.md#updatesignuppage) | **PUT** /v1/admin/signup_page/{handle} | Update a sign-up page
[**updateSubscriptionProduct**](AdminSignupApi.md#updatesubscriptionproduct) | **PUT** /v1/admin/signup_page/product/{handle} | Update a subscription product for signup pages

# **createSignupPage**
> \Reepay\Model\SignupPage createSignupPage($body)

Create a signup page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AdminSignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\CreateSignupPage(); // \Reepay\Model\CreateSignupPage | 

try {
    $result = $apiInstance->createSignupPage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminSignupApi->createSignupPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateSignupPage**](../Model/CreateSignupPage.md)|  |

### Return type

[**\Reepay\Model\SignupPage**](../Model/SignupPage.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscriptionProduct**
> \Reepay\Model\SubscriptionProduct createSubscriptionProduct($body)

Create a subscription product for signup pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AdminSignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\CreateSubscriptionProduct(); // \Reepay\Model\CreateSubscriptionProduct | 

try {
    $result = $apiInstance->createSubscriptionProduct($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminSignupApi->createSubscriptionProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateSubscriptionProduct**](../Model/CreateSubscriptionProduct.md)|  |

### Return type

[**\Reepay\Model\SubscriptionProduct**](../Model/SubscriptionProduct.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSignupPage**
> deleteSignupPage($handle)

Delete a sign-up page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AdminSignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Signup handle

try {
    $apiInstance->deleteSignupPage($handle);
} catch (Exception $e) {
    echo 'Exception when calling AdminSignupApi->deleteSignupPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Signup handle |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscriptionProduct**
> deleteSubscriptionProduct($handle)

Delete a subscription product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AdminSignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription product handle

try {
    $apiInstance->deleteSubscriptionProduct($handle);
} catch (Exception $e) {
    echo 'Exception when calling AdminSignupApi->deleteSubscriptionProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription product handle |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSignupPages**
> \Reepay\Model\SignupPageList getAllSignupPages()

Get all signup pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AdminSignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllSignupPages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminSignupApi->getAllSignupPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\SignupPageList**](../Model/SignupPageList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSubscriptionProducts**
> \Reepay\Model\SubscriptionProductList getAllSubscriptionProducts()

Get all subscription products available for an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AdminSignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllSubscriptionProducts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminSignupApi->getAllSubscriptionProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\SubscriptionProductList**](../Model/SubscriptionProductList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignupPage**
> \Reepay\Model\SignupPage getSignupPage($handle)

Get a signup page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AdminSignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Signup page handle

try {
    $result = $apiInstance->getSignupPage($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminSignupApi->getSignupPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Signup page handle |

### Return type

[**\Reepay\Model\SignupPage**](../Model/SignupPage.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionProduct**
> \Reepay\Model\SubscriptionProduct getSubscriptionProduct($handle)

Get a subscription product for signup pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AdminSignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription product handle

try {
    $result = $apiInstance->getSubscriptionProduct($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminSignupApi->getSubscriptionProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription product handle |

### Return type

[**\Reepay\Model\SubscriptionProduct**](../Model/SubscriptionProduct.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSignupPage**
> \Reepay\Model\SignupPage updateSignupPage($body, $handle)

Update a sign-up page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AdminSignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\CreateSignupPageWithProductHandles(); // \Reepay\Model\CreateSignupPageWithProductHandles | 
$handle = "handle_example"; // string | Signup page handle

try {
    $result = $apiInstance->updateSignupPage($body, $handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminSignupApi->updateSignupPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateSignupPageWithProductHandles**](../Model/CreateSignupPageWithProductHandles.md)|  |
 **handle** | **string**| Signup page handle |

### Return type

[**\Reepay\Model\SignupPage**](../Model/SignupPage.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubscriptionProduct**
> \Reepay\Model\SubscriptionProduct updateSubscriptionProduct($body, $handle)

Update a subscription product for signup pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AdminSignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\UpdateSubscriptionProduct(); // \Reepay\Model\UpdateSubscriptionProduct | 
$handle = "handle_example"; // string | Subscription product handle

try {
    $result = $apiInstance->updateSubscriptionProduct($body, $handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminSignupApi->updateSubscriptionProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\UpdateSubscriptionProduct**](../Model/UpdateSubscriptionProduct.md)|  |
 **handle** | **string**| Subscription product handle |

### Return type

[**\Reepay\Model\SubscriptionProduct**](../Model/SubscriptionProduct.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

