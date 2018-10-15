# Reepay\UserApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUser**](UserApi.md#deleteUser) | **DELETE** /v1/user/{id} | Delete user
[**getUser**](UserApi.md#getUser) | **GET** /v1/user/{id} | Get user
[**getUsers**](UserApi.md#getUsers) | **GET** /v1/user | Get users
[**inviteUser**](UserApi.md#inviteUser) | **POST** /v1/user/invite | Invite user
[**inviteUserAccept**](UserApi.md#inviteUserAccept) | **POST** /v1/user/invite/{token} | Accept invite
[**inviteUserGet**](UserApi.md#inviteUserGet) | **GET** /v1/user/invite/{token} | Get invite
[**resetPassword**](UserApi.md#resetPassword) | **POST** /v1/user/reset_password | Reset password request
[**resetPasswordWithToken**](UserApi.md#resetPasswordWithToken) | **POST** /v1/user/reset_password/{token} | Reset password
[**updateAuth**](UserApi.md#updateAuth) | **PUT** /v1/user/{id}/groups | Update user groups
[**updatePassword**](UserApi.md#updatePassword) | **PUT** /v1/user/{id}/password | Change password
[**updateUser**](UserApi.md#updateUser) | **PUT** /v1/user/{id} | Update user
[**verifyEmail**](UserApi.md#verifyEmail) | **POST** /v1/user/verify_email/{token} | Verify email
[**verifyEmailRequest**](UserApi.md#verifyEmailRequest) | **POST** /v1/user/{id}/verify_email | Send verification email


# **deleteUser**
> deleteUser($id)

Delete user



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

$apiInstance = new Reepay\Api\UserApi();
$id = "id_example"; // string | User id

try {
    $apiInstance->deleteUser($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \Reepay\Model\UserAccount getUser($id)

Get user



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

$apiInstance = new Reepay\Api\UserApi();
$id = "id_example"; // string | User id

try {
    $result = $apiInstance->getUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |

### Return type

[**\Reepay\Model\UserAccount**](../Model/UserAccount.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \Reepay\Model\UserAccount[] getUsers()

Get users



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

$apiInstance = new Reepay\Api\UserApi();

try {
    $result = $apiInstance->getUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\UserAccount[]**](../Model/UserAccount.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteUser**
> \Reepay\Model\UserAccount inviteUser($body)

Invite user



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

$apiInstance = new Reepay\Api\UserApi();
$body = new \Reepay\Model\InviteUser(); // \Reepay\Model\InviteUser |

try {
    $result = $apiInstance->inviteUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->inviteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\InviteUser**](../Model/InviteUser.md)|  | [optional]

### Return type

[**\Reepay\Model\UserAccount**](../Model/UserAccount.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteUserAccept**
> \Reepay\Model\UserAccount inviteUserAccept($token, $body)

Accept invite



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\UserApi();
$token = "token_example"; // string | Invite token
$body = new \Reepay\Model\InviteUserAccept(); // \Reepay\Model\InviteUserAccept |

try {
    $result = $apiInstance->inviteUserAccept($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->inviteUserAccept: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Invite token |
 **body** | [**\Reepay\Model\InviteUserAccept**](../Model/InviteUserAccept.md)|  | [optional]

### Return type

[**\Reepay\Model\UserAccount**](../Model/UserAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteUserGet**
> \Reepay\Model\UserAccount inviteUserGet($token)

Get invite



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\UserApi();
$token = "token_example"; // string | Invite token

try {
    $result = $apiInstance->inviteUserGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->inviteUserGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Invite token |

### Return type

[**\Reepay\Model\UserAccount**](../Model/UserAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPassword**
> resetPassword($body)

Reset password request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\UserApi();
$body = new \Reepay\Model\UserResetRequestPassword(); // \Reepay\Model\UserResetRequestPassword |

try {
    $apiInstance->resetPassword($body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\UserResetRequestPassword**](../Model/UserResetRequestPassword.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPasswordWithToken**
> \Reepay\Model\User resetPasswordWithToken($token, $body)

Reset password



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\UserApi();
$token = "token_example"; // string | Reset password token
$body = new \Reepay\Model\UpdateUserPassword(); // \Reepay\Model\UpdateUserPassword |

try {
    $result = $apiInstance->resetPasswordWithToken($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->resetPasswordWithToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Reset password token |
 **body** | [**\Reepay\Model\UpdateUserPassword**](../Model/UpdateUserPassword.md)|  | [optional]

### Return type

[**\Reepay\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAuth**
> \Reepay\Model\UserAccount updateAuth($id, $body)

Update user groups



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

$apiInstance = new Reepay\Api\UserApi();
$id = "id_example"; // string | User id
$body = new \Reepay\Model\UpdateUserGroups(); // \Reepay\Model\UpdateUserGroups |

try {
    $result = $apiInstance->updateAuth($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |
 **body** | [**\Reepay\Model\UpdateUserGroups**](../Model/UpdateUserGroups.md)|  | [optional]

### Return type

[**\Reepay\Model\UserAccount**](../Model/UserAccount.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePassword**
> \Reepay\Model\UserAccount updatePassword($id, $body)

Change password



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

$apiInstance = new Reepay\Api\UserApi();
$id = "id_example"; // string | User id
$body = new \Reepay\Model\UpdateUserPassword(); // \Reepay\Model\UpdateUserPassword |

try {
    $result = $apiInstance->updatePassword($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updatePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |
 **body** | [**\Reepay\Model\UpdateUserPassword**](../Model/UpdateUserPassword.md)|  | [optional]

### Return type

[**\Reepay\Model\UserAccount**](../Model/UserAccount.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUser**
> \Reepay\Model\UserAccount updateUser($id, $body)

Update user



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

$apiInstance = new Reepay\Api\UserApi();
$id = "id_example"; // string | User id
$body = new \Reepay\Model\UpdateUser(); // \Reepay\Model\UpdateUser |

try {
    $result = $apiInstance->updateUser($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |
 **body** | [**\Reepay\Model\UpdateUser**](../Model/UpdateUser.md)|  | [optional]

### Return type

[**\Reepay\Model\UserAccount**](../Model/UserAccount.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyEmail**
> \Reepay\Model\User verifyEmail($token)

Verify email



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\UserApi();
$token = "token_example"; // string | Verify email token

try {
    $result = $apiInstance->verifyEmail($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->verifyEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Verify email token |

### Return type

[**\Reepay\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyEmailRequest**
> verifyEmailRequest($id)

Send verification email



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

$apiInstance = new Reepay\Api\UserApi();
$id = "id_example"; // string | User id

try {
    $apiInstance->verifyEmailRequest($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->verifyEmailRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

