# Swagger\Client\AuthenticateApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**login**](AuthenticateApi.md#login) | **POST** /v1/authenticate/login | User login
[**renew**](AuthenticateApi.md#renew) | **POST** /v1/authenticate/renew | Renew user login
[**verifyAuthentication**](AuthenticateApi.md#verifyAuthentication) | **GET** /v1/authenticate/verify | Verify authentication


# **login**
> \Swagger\Client\Model\InlineResponse2009 login($email, $password, $organisation, $account)

User login



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AuthenticateApi();
$email = "email_example"; // string | User email
$password = "password_example"; // string | User password
$organisation = "organisation_example"; // string | Organisation subdomain to login to
$account = "account_example"; // string | Account handle or id to login to

try {
    $result = $api_instance->login($email, $password, $organisation, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| User email | [optional]
 **password** | **string**| User password | [optional]
 **organisation** | **string**| Organisation subdomain to login to | [optional]
 **account** | **string**| Account handle or id to login to | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renew**
> \Swagger\Client\Model\InlineResponse20010 renew()

Renew user login



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AuthenticateApi();

try {
    $result = $api_instance->renew();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->renew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyAuthentication**
> verifyAuthentication()

Verify authentication



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AuthenticateApi();

try {
    $api_instance->verifyAuthentication();
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->verifyAuthentication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

