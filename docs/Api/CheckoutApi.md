# Reepay\CheckoutApi

All URIs are relative to *https://checkout-api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptSepaMandate**](CheckoutApi.md#acceptsepamandate) | **POST** /v1/checkout/{id}/sepa/{mandateId}/accept | Accept sepa mandate
[**authKlarnaSession**](CheckoutApi.md#authklarnasession) | **POST** /v1/checkout/{id}/klarna/auth | Authorize Klarna session
[**chargeCheckoutSession**](CheckoutApi.md#chargecheckoutsession) | **POST** /v1/checkout/{id}/charge | Finish charge using source
[**createAnydaySession**](CheckoutApi.md#createanydaysession) | **POST** /v1/checkout/{id}/anyday | Create Anyday session
[**createApplepaySession**](CheckoutApi.md#createapplepaysession) | **POST** /v1/checkout/{id}/applepay | Create Apple Pay session
[**createGooglepaySession**](CheckoutApi.md#creategooglepaysession) | **POST** /v1/checkout/{id}/googlepay | Create Google Pay session
[**createIdealSepaSession**](CheckoutApi.md#createidealsepasession) | **POST** /v1/checkout/{id}/sepa/ideal | Create IDEAL sepa session
[**createKlarnaSession**](CheckoutApi.md#createklarnasession) | **POST** /v1/checkout/{id}/klarna | Create Klarna session
[**createMpoSession**](CheckoutApi.md#createmposession) | **POST** /v1/checkout/{id}/mpo | Create MobilePay Online session
[**createMpsSession**](CheckoutApi.md#creatempssession) | **POST** /v1/checkout/{id}/mps | Create MobilePay Subscriptions session
[**createOfflineSession**](CheckoutApi.md#createofflinesession) | **POST** /v1/checkout/{id}/offline | Create Offline session
[**createPayeverSession**](CheckoutApi.md#createpayeversession) | **POST** /v1/checkout/{id}/payever | Create Payever session
[**createPaypalSession**](CheckoutApi.md#createpaypalsession) | **POST** /v1/checkout/{id}/paypal | Create PayPal session
[**createPproSession**](CheckoutApi.md#createpprosession) | **POST** /v1/checkout/{id}/ppro | Create ppro session
[**createResursSession**](CheckoutApi.md#createresurssession) | **POST** /v1/checkout/{id}/resurs | Create Resurs session
[**createSepaSession**](CheckoutApi.md#createsepasession) | **POST** /v1/checkout/{id}/sepa | Create sepa session
[**createSwishSession**](CheckoutApi.md#createswishsession) | **POST** /v1/checkout/{id}/swish | Create Swish session
[**createVerificationSession**](CheckoutApi.md#createverificationsession) | **POST** /v1/checkout/{id}/verification | Create verification session
[**createViabillSession**](CheckoutApi.md#createviabillsession) | **POST** /v1/checkout/{id}/viabill | Create ViaBill session
[**createVippsRecurringSession**](CheckoutApi.md#createvippsrecurringsession) | **POST** /v1/checkout/{id}/vipps_recurring | Create Vipps Recurring session
[**createVippsSession**](CheckoutApi.md#createvippssession) | **POST** /v1/checkout/{id}/vipps | Create Vipps session
[**getCheckoutPreviewSession**](CheckoutApi.md#getcheckoutpreviewsession) | **GET** /v1/checkout/{id}/preview | Get checkout preview session data
[**getCheckoutSession**](CheckoutApi.md#getcheckoutsession) | **GET** /v1/checkout/{id} | Get checkout session data
[**getResursPaymentMethodCost**](CheckoutApi.md#getresurspaymentmethodcost) | **POST** /v1/checkout/{id}/resurs/payment_method_cost | Get HTML with cost of Resurs payment method
[**getResursPaymentMethods**](CheckoutApi.md#getresurspaymentmethods) | **GET** /v1/checkout/{id}/resurs/payment_methods | Get Resurs payment methods
[**getSepaPrefillValues**](CheckoutApi.md#getsepaprefillvalues) | **GET** /v1/checkout/{id}/sepa/prefill | Get prefill values for sepa form
[**getTerms**](CheckoutApi.md#getterms) | **GET** /v1/checkout/{id}/terms | Get account terms template
[**recurringCheckoutSession**](CheckoutApi.md#recurringcheckoutsession) | **POST** /v1/checkout/{id}/recurring | Save recurring customer payment method
[**subscriptionCheckoutSession**](CheckoutApi.md#subscriptioncheckoutsession) | **POST** /v1/checkout/{id}/subscription | Set payment method on subscription

# **acceptSepaMandate**
> \Reepay\Model\CheckoutSession acceptSepaMandate($id, $mandate_id)

Accept sepa mandate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$mandate_id = "mandate_id_example"; // string | Mandate Id

try {
    $result = $apiInstance->acceptSepaMandate($id, $mandate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->acceptSepaMandate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **mandate_id** | **string**| Mandate Id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authKlarnaSession**
> \Reepay\Model\CheckoutSession authKlarnaSession($body, $id)

Authorize Klarna session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Reepay\Model\AuthorizeKlarnaSession(); // \Reepay\Model\AuthorizeKlarnaSession | 
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->authKlarnaSession($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->authKlarnaSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\AuthorizeKlarnaSession**](../Model/AuthorizeKlarnaSession.md)|  |
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chargeCheckoutSession**
> \Reepay\Model\CheckoutSession chargeCheckoutSession($body, $id)

Finish charge using source

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Reepay\Model\SessionChargeDto(); // \Reepay\Model\SessionChargeDto | 
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->chargeCheckoutSession($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->chargeCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\SessionChargeDto**](../Model/SessionChargeDto.md)|  |
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAnydaySession**
> \Reepay\Model\CheckoutSession createAnydaySession($id, $body)

Create Anyday session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Reepay\Model\CreateAnydaySession(); // \Reepay\Model\CreateAnydaySession | 

try {
    $result = $apiInstance->createAnydaySession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createAnydaySession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Reepay\Model\CreateAnydaySession**](../Model/CreateAnydaySession.md)|  | [optional]

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createApplepaySession**
> \Reepay\Model\CheckoutSession createApplepaySession($id)

Create Apple Pay session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->createApplepaySession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createApplepaySession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGooglepaySession**
> \Reepay\Model\CheckoutSession createGooglepaySession($id)

Create Google Pay session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->createGooglepaySession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createGooglepaySession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createIdealSepaSession**
> \Reepay\Model\CheckoutSession createIdealSepaSession($body, $id)

Create IDEAL sepa session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Reepay\Model\CreateIdealSepaSession(); // \Reepay\Model\CreateIdealSepaSession | 
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->createIdealSepaSession($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createIdealSepaSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateIdealSepaSession**](../Model/CreateIdealSepaSession.md)|  |
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKlarnaSession**
> \Reepay\Model\CheckoutSession createKlarnaSession($body, $id)

Create Klarna session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Reepay\Model\CreateKlarnaSession(); // \Reepay\Model\CreateKlarnaSession | 
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->createKlarnaSession($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createKlarnaSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateKlarnaSession**](../Model/CreateKlarnaSession.md)|  |
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMpoSession**
> \Reepay\Model\CheckoutSession createMpoSession($id, $body)

Create MobilePay Online session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Reepay\Model\CreateMpoSession(); // \Reepay\Model\CreateMpoSession | 

try {
    $result = $apiInstance->createMpoSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createMpoSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Reepay\Model\CreateMpoSession**](../Model/CreateMpoSession.md)|  | [optional]

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMpsSession**
> \Reepay\Model\CheckoutSession createMpsSession($id, $body)

Create MobilePay Subscriptions session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Reepay\Model\CreateMpsSession(); // \Reepay\Model\CreateMpsSession | 

try {
    $result = $apiInstance->createMpsSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createMpsSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Reepay\Model\CreateMpsSession**](../Model/CreateMpsSession.md)|  | [optional]

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOfflineSession**
> \Reepay\Model\CheckoutSession createOfflineSession($id, $body)

Create Offline session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Reepay\Model\CreateOfflineSession(); // \Reepay\Model\CreateOfflineSession | 

try {
    $result = $apiInstance->createOfflineSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createOfflineSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Reepay\Model\CreateOfflineSession**](../Model/CreateOfflineSession.md)|  | [optional]

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPayeverSession**
> \Reepay\Model\CheckoutSession createPayeverSession($id, $body)

Create Payever session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Reepay\Model\CreatePayeverSession(); // \Reepay\Model\CreatePayeverSession | 

try {
    $result = $apiInstance->createPayeverSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createPayeverSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Reepay\Model\CreatePayeverSession**](../Model/CreatePayeverSession.md)|  | [optional]

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPaypalSession**
> \Reepay\Model\CheckoutSession createPaypalSession($id)

Create PayPal session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->createPaypalSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createPaypalSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPproSession**
> \Reepay\Model\CheckoutSession createPproSession($body, $id)

Create ppro session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Reepay\Model\CreatePproSession(); // \Reepay\Model\CreatePproSession | 
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->createPproSession($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createPproSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreatePproSession**](../Model/CreatePproSession.md)|  |
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createResursSession**
> \Reepay\Model\CheckoutSession createResursSession($body, $id)

Create Resurs session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Reepay\Model\CreateResursSession(); // \Reepay\Model\CreateResursSession | 
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->createResursSession($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createResursSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateResursSession**](../Model/CreateResursSession.md)|  |
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSepaSession**
> \Reepay\Model\CheckoutSession createSepaSession($body, $id)

Create sepa session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Reepay\Model\CreateSepaSession(); // \Reepay\Model\CreateSepaSession | 
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->createSepaSession($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createSepaSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateSepaSession**](../Model/CreateSepaSession.md)|  |
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwishSession**
> \Reepay\Model\CheckoutSession createSwishSession($id, $body)

Create Swish session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Reepay\Model\CreateSwishSession(); // \Reepay\Model\CreateSwishSession | 

try {
    $result = $apiInstance->createSwishSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createSwishSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Reepay\Model\CreateSwishSession**](../Model/CreateSwishSession.md)|  | [optional]

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVerificationSession**
> \Reepay\Model\CheckoutSession createVerificationSession($body, $id)

Create verification session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Reepay\Model\CreateVerificationSession(); // \Reepay\Model\CreateVerificationSession | 
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->createVerificationSession($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createVerificationSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateVerificationSession**](../Model/CreateVerificationSession.md)|  |
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createViabillSession**
> \Reepay\Model\CheckoutSession createViabillSession($id, $body)

Create ViaBill session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Reepay\Model\CreateViabillSession(); // \Reepay\Model\CreateViabillSession | 

try {
    $result = $apiInstance->createViabillSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createViabillSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Reepay\Model\CreateViabillSession**](../Model/CreateViabillSession.md)|  | [optional]

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVippsRecurringSession**
> \Reepay\Model\CheckoutSession createVippsRecurringSession($id, $body)

Create Vipps Recurring session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Reepay\Model\CreateVippsRecurringSession(); // \Reepay\Model\CreateVippsRecurringSession | 

try {
    $result = $apiInstance->createVippsRecurringSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createVippsRecurringSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Reepay\Model\CreateVippsRecurringSession**](../Model/CreateVippsRecurringSession.md)|  | [optional]

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVippsSession**
> \Reepay\Model\CheckoutSession createVippsSession($id, $body)

Create Vipps session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Reepay\Model\CreateVippsSession(); // \Reepay\Model\CreateVippsSession | 

try {
    $result = $apiInstance->createVippsSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createVippsSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Reepay\Model\CreateVippsSession**](../Model/CreateVippsSession.md)|  | [optional]

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckoutPreviewSession**
> \Reepay\Model\CheckoutSession getCheckoutPreviewSession($id, $handle, $type)

Get checkout preview session data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$handle = "handle_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->getCheckoutPreviewSession($id, $handle, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getCheckoutPreviewSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **handle** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckoutSession**
> \Reepay\Model\CheckoutSession getCheckoutSession($id)

Get checkout session data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->getCheckoutSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResursPaymentMethodCost**
> string getResursPaymentMethodCost($id, $body)

Get HTML with cost of Resurs payment method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Reepay\Model\ResursPaymentMethodDto(); // \Reepay\Model\ResursPaymentMethodDto | 

try {
    $result = $apiInstance->getResursPaymentMethodCost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getResursPaymentMethodCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Reepay\Model\ResursPaymentMethodDto**](../Model/ResursPaymentMethodDto.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResursPaymentMethods**
> \Reepay\Model\ResursPaymentMethodDto[] getResursPaymentMethods($id)

Get Resurs payment methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->getResursPaymentMethods($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getResursPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\ResursPaymentMethodDto[]**](../Model/ResursPaymentMethodDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSepaPrefillValues**
> \Reepay\Model\SepaPrefill getSepaPrefillValues($id)

Get prefill values for sepa form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->getSepaPrefillValues($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getSepaPrefillValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\SepaPrefill**](../Model/SepaPrefill.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTerms**
> string getTerms($id)

Get account terms template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->getTerms($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recurringCheckoutSession**
> \Reepay\Model\CheckoutSession recurringCheckoutSession($body, $id)

Save recurring customer payment method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Reepay\Model\SessionRecurring(); // \Reepay\Model\SessionRecurring | 
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->recurringCheckoutSession($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->recurringCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\SessionRecurring**](../Model/SessionRecurring.md)|  |
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionCheckoutSession**
> \Reepay\Model\CheckoutSession subscriptionCheckoutSession($body, $id)

Set payment method on subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Reepay\Model\SessionRecurring(); // \Reepay\Model\SessionRecurring | 
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->subscriptionCheckoutSession($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->subscriptionCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\SessionRecurring**](../Model/SessionRecurring.md)|  |
 **id** | **string**| Session id |

### Return type

[**\Reepay\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

