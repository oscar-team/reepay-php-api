# Reepay\AccountApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPrivateKey**](AccountApi.md#createPrivateKey) | **POST** /v1/account/privkey | Create private key
[**createPublicKey**](AccountApi.md#createPublicKey) | **POST** /v1/account/pubkey | Create public key
[**expirePrivateKey**](AccountApi.md#expirePrivateKey) | **POST** /v1/account/privkey/{key}/expire | Expire private key
[**expirePublicKey**](AccountApi.md#expirePublicKey) | **POST** /v1/account/pubkey/{key}/expire | Expire public key
[**generateWebhookSecret**](AccountApi.md#generateWebhookSecret) | **POST** /v1/account/webhook_settings/secret | Generate new webhook secret
[**getCurrentAccount**](AccountApi.md#getCurrentAccount) | **GET** /v1/account | Get account
[**getDiscountSettings**](AccountApi.md#getDiscountSettings) | **GET** /v1/account/discount_settings | Get discount settings
[**getMailSettings**](AccountApi.md#getMailSettings) | **GET** /v1/account/mail_settings | Get mail settings
[**getPrivateKeys**](AccountApi.md#getPrivateKeys) | **GET** /v1/account/privkey | Get list of private keys
[**getPublicKeys**](AccountApi.md#getPublicKeys) | **GET** /v1/account/pubkey | Get list of public keys
[**getWebhookSettings**](AccountApi.md#getWebhookSettings) | **GET** /v1/account/webhook_settings | Get webhook settings
[**updateAccountJson**](AccountApi.md#updateAccountJson) | **PUT** /v1/account | Update account
[**updateDiscountSettings**](AccountApi.md#updateDiscountSettings) | **PUT** /v1/account/discount_settings | Update discount settings
[**updateMailSettingsJson**](AccountApi.md#updateMailSettingsJson) | **PUT** /v1/account/mail_settings | Update mail settings
[**updateWebhookSettingsJson**](AccountApi.md#updateWebhookSettingsJson) | **PUT** /v1/account/webhook_settings | Update webhook settings


# **createPrivateKey**
> \Reepay\Model\Key createPrivateKey()

Create private key



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

$apiInstance = new Reepay\Api\AccountApi();

try {
    $result = $apiInstance->createPrivateKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createPrivateKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\Key**](../Model/Key.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPublicKey**
> \Reepay\Model\Key createPublicKey()

Create public key



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

$apiInstance = new Reepay\Api\AccountApi();

try {
    $result = $apiInstance->createPublicKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createPublicKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\Key**](../Model/Key.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expirePrivateKey**
> expirePrivateKey($key)

Expire private key



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

$apiInstance = new Reepay\Api\AccountApi();
$key = "key_example"; // string | Private key

try {
    $apiInstance->expirePrivateKey($key);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->expirePrivateKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Private key |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expirePublicKey**
> expirePublicKey($key)

Expire public key



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

$apiInstance = new Reepay\Api\AccountApi();
$key = "key_example"; // string | Public key

try {
    $apiInstance->expirePublicKey($key);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->expirePublicKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Public key |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateWebhookSecret**
> \Reepay\Model\WebhookSettings generateWebhookSecret()

Generate new webhook secret



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

$apiInstance = new Reepay\Api\AccountApi();

try {
    $result = $apiInstance->generateWebhookSecret();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->generateWebhookSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\WebhookSettings**](../Model/WebhookSettings.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentAccount**
> \Reepay\Model\Account getCurrentAccount()

Get account



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

$apiInstance = new Reepay\Api\AccountApi();

try {
    $result = $apiInstance->getCurrentAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getCurrentAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\Account**](../Model/Account.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscountSettings**
> \Reepay\Model\DiscountSettings getDiscountSettings()

Get discount settings



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

$apiInstance = new Reepay\Api\AccountApi();

try {
    $result = $apiInstance->getDiscountSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getDiscountSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\DiscountSettings**](../Model/DiscountSettings.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailSettings**
> \Reepay\Model\MailSettings getMailSettings()

Get mail settings



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

$apiInstance = new Reepay\Api\AccountApi();

try {
    $result = $apiInstance->getMailSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getMailSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\MailSettings**](../Model/MailSettings.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrivateKeys**
> \Reepay\Model\Key[] getPrivateKeys()

Get list of private keys



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

$apiInstance = new Reepay\Api\AccountApi();

try {
    $result = $apiInstance->getPrivateKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getPrivateKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\Key[]**](../Model/Key.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicKeys**
> \Reepay\Model\Key[] getPublicKeys()

Get list of public keys



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

$apiInstance = new Reepay\Api\AccountApi();

try {
    $result = $apiInstance->getPublicKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getPublicKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\Key[]**](../Model/Key.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookSettings**
> \Reepay\Model\WebhookSettings getWebhookSettings()

Get webhook settings



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

$apiInstance = new Reepay\Api\AccountApi();

try {
    $result = $apiInstance->getWebhookSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getWebhookSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\WebhookSettings**](../Model/WebhookSettings.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountJson**
> \Reepay\Model\Account updateAccountJson($body)

Update account



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

$apiInstance = new Reepay\Api\AccountApi();
$body = new \Reepay\Model\UpdateAccount(); // \Reepay\Model\UpdateAccount |

try {
    $result = $apiInstance->updateAccountJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updateAccountJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\UpdateAccount**](../Model/UpdateAccount.md)|  | [optional]

### Return type

[**\Reepay\Model\Account**](../Model/Account.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDiscountSettings**
> \Reepay\Model\DiscountSettings updateDiscountSettings($body)

Update discount settings



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

$apiInstance = new Reepay\Api\AccountApi();
$body = new \Reepay\Model\DiscountSettings(); // \Reepay\Model\DiscountSettings |

try {
    $result = $apiInstance->updateDiscountSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updateDiscountSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\DiscountSettings**](../Model/DiscountSettings.md)|  | [optional]

### Return type

[**\Reepay\Model\DiscountSettings**](../Model/DiscountSettings.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMailSettingsJson**
> \Reepay\Model\MailSettings updateMailSettingsJson($body)

Update mail settings



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

$apiInstance = new Reepay\Api\AccountApi();
$body = new \Reepay\Model\MailSettings(); // \Reepay\Model\MailSettings |

try {
    $result = $apiInstance->updateMailSettingsJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updateMailSettingsJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\MailSettings**](../Model/MailSettings.md)|  | [optional]

### Return type

[**\Reepay\Model\MailSettings**](../Model/MailSettings.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhookSettingsJson**
> \Reepay\Model\WebhookSettings updateWebhookSettingsJson($body)

Update webhook settings



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

$apiInstance = new Reepay\Api\AccountApi();
$body = new \Reepay\Model\UpdateWebhookSettings(); // \Reepay\Model\UpdateWebhookSettings |

try {
    $result = $apiInstance->updateWebhookSettingsJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updateWebhookSettingsJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\UpdateWebhookSettings**](../Model/UpdateWebhookSettings.md)|  | [optional]

### Return type

[**\Reepay\Model\WebhookSettings**](../Model/WebhookSettings.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

