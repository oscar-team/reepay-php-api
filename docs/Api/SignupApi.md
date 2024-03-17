# Reepay\SignupApi

All URIs are relative to *https://checkout-api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSignupPage1**](SignupApi.md#getsignuppage1) | **GET** /v1/signup_page/{accountId}/{handle} | Get a signup page
[**getTerms1**](SignupApi.md#getterms1) | **GET** /v1/signup_page/{accountId}/terms | Get account terms template
[**signupCustomer**](SignupApi.md#signupcustomer) | **POST** /v1/signup_page/signup_customer | Signup a customer
[**validateCoupon**](SignupApi.md#validatecoupon) | **POST** /v1/signup_page/coupon/validate | 

# **getSignupPage1**
> \Reepay\Model\PublicSignupPage getSignupPage1($account_id, $handle, $country)

Get a signup page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\SignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | Account Id
$handle = "handle_example"; // string | Signup page handle
$country = "country_example"; // string | Tax rate for a country

try {
    $result = $apiInstance->getSignupPage1($account_id, $handle, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignupApi->getSignupPage1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account Id |
 **handle** | **string**| Signup page handle |
 **country** | **string**| Tax rate for a country | [optional]

### Return type

[**\Reepay\Model\PublicSignupPage**](../Model/PublicSignupPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTerms1**
> string getTerms1($account_id)

Get account terms template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\SignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | Account Id

try {
    $result = $apiInstance->getTerms1($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignupApi->getTerms1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account Id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signupCustomer**
> \Reepay\Model\CustomerSignup signupCustomer($body)

Signup a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\SignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Reepay\Model\CreateCustomerSignup(); // \Reepay\Model\CreateCustomerSignup | 

try {
    $result = $apiInstance->signupCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignupApi->signupCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateCustomerSignup**](../Model/CreateCustomerSignup.md)|  |

### Return type

[**\Reepay\Model\CustomerSignup**](../Model/CustomerSignup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateCoupon**
> \Reepay\Model\CouponState validateCoupon($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\SignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Reepay\Model\ValidateCouponRequest(); // \Reepay\Model\ValidateCouponRequest | 

try {
    $result = $apiInstance->validateCoupon($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignupApi->validateCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\ValidateCouponRequest**](../Model/ValidateCouponRequest.md)|  |

### Return type

[**\Reepay\Model\CouponState**](../Model/CouponState.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

