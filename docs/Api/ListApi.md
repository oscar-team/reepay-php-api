# Reepay\ListApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddOnList**](ListApi.md#getaddonlist) | **GET** /v1/list/add_on | Get list of add-ons
[**getChargeList**](ListApi.md#getchargelist) | **GET** /v1/list/charge | Get list of charges
[**getCouponList**](ListApi.md#getcouponlist) | **GET** /v1/list/coupon | Get list of coupons
[**getCustomerList**](ListApi.md#getcustomerlist) | **GET** /v1/list/customer | Get list of customers
[**getDiscountList**](ListApi.md#getdiscountlist) | **GET** /v1/list/discount | Get list of discounts
[**getInvoiceCreditNoteList**](ListApi.md#getinvoicecreditnotelist) | **GET** /v1/list/credit_note | 
[**getInvoiceList**](ListApi.md#getinvoicelist) | **GET** /v1/list/invoice | Get list of invoices
[**getPaymentMethodList**](ListApi.md#getpaymentmethodlist) | **GET** /v1/list/payment_method | Get list of payment methods
[**getPayoutList**](ListApi.md#getpayoutlist) | **GET** /v1/list/payout | Get list of payouts
[**getPlanList**](ListApi.md#getplanlist) | **GET** /v1/list/plan | Get list of plans
[**getSubscriptionList**](ListApi.md#getsubscriptionlist) | **GET** /v1/list/subscription | Get list of subscriptions
[**getTaxPolicyList**](ListApi.md#gettaxpolicylist) | **GET** /v1/list/tax_policy | Get list of tax policies
[**getTransactionList**](ListApi.md#gettransactionlist) | **GET** /v1/list/transaction | Get list of transactions
[**getWebhookList**](ListApi.md#getwebhooklist) | **GET** /v1/list/webhook | Get list of webhooks

# **getAddOnList**
> \Reepay\Model\AddOnList getAddOnList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $state, $type, $name, $description, $amount, $amount_incl_vat, $all_plans, $currency)

Get list of add-ons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$range = "created"; // string | 
$handle = "handle_example"; // string | 
$handle_prefix = "handle_prefix_example"; // string | 
$state = "active"; // string | 
$type = "type_example"; // string | 
$name = "name_example"; // string | 
$description = "description_example"; // string | 
$amount = "amount_example"; // string | 
$amount_incl_vat = "amount_incl_vat_example"; // string | 
$all_plans = "all_plans_example"; // string | 
$currency = array("currency_example"); // string[] | 

try {
    $result = $apiInstance->getAddOnList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $state, $type, $name, $description, $amount, $amount_incl_vat, $all_plans, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getAddOnList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **range** | **string**|  | [optional] [default to created]
 **handle** | **string**|  | [optional]
 **handle_prefix** | **string**|  | [optional]
 **state** | **string**|  | [optional] [default to active]
 **type** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **amount** | **string**|  | [optional]
 **amount_incl_vat** | **string**|  | [optional]
 **all_plans** | **string**|  | [optional]
 **currency** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Reepay\Model\AddOnList**](../Model/AddOnList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChargeList**
> \Reepay\Model\ChargeList getChargeList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $handle_contains, $accounting_number, $accounting_number_prefix, $accounting_number_contains, $state, $exclude_state, $customer, $amount, $refunded_amount, $authorized_amount, $currency, $partial_settled, $settled_amount, $debtor_id)

Get list of charges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$range = "created"; // string | 
$handle = "handle_example"; // string | 
$handle_prefix = "handle_prefix_example"; // string | 
$handle_contains = "handle_contains_example"; // string | 
$accounting_number = "accounting_number_example"; // string | 
$accounting_number_prefix = "accounting_number_prefix_example"; // string | 
$accounting_number_contains = "accounting_number_contains_example"; // string | 
$state = array("state_example"); // string[] | 
$exclude_state = array("exclude_state_example"); // string[] | 
$customer = "customer_example"; // string | 
$amount = "amount_example"; // string | 
$refunded_amount = "refunded_amount_example"; // string | 
$authorized_amount = "authorized_amount_example"; // string | 
$currency = array("currency_example"); // string[] | 
$partial_settled = true; // bool | 
$settled_amount = "settled_amount_example"; // string | 
$debtor_id = "debtor_id_example"; // string | 

try {
    $result = $apiInstance->getChargeList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $handle_contains, $accounting_number, $accounting_number_prefix, $accounting_number_contains, $state, $exclude_state, $customer, $amount, $refunded_amount, $authorized_amount, $currency, $partial_settled, $settled_amount, $debtor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getChargeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **range** | **string**|  | [optional] [default to created]
 **handle** | **string**|  | [optional]
 **handle_prefix** | **string**|  | [optional]
 **handle_contains** | **string**|  | [optional]
 **accounting_number** | **string**|  | [optional]
 **accounting_number_prefix** | **string**|  | [optional]
 **accounting_number_contains** | **string**|  | [optional]
 **state** | [**string[]**](../Model/string.md)|  | [optional]
 **exclude_state** | [**string[]**](../Model/string.md)|  | [optional]
 **customer** | **string**|  | [optional]
 **amount** | **string**|  | [optional]
 **refunded_amount** | **string**|  | [optional]
 **authorized_amount** | **string**|  | [optional]
 **currency** | [**string[]**](../Model/string.md)|  | [optional]
 **partial_settled** | **bool**|  | [optional]
 **settled_amount** | **string**|  | [optional]
 **debtor_id** | **string**|  | [optional]

### Return type

[**\Reepay\Model\ChargeList**](../Model/ChargeList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponList**
> \Reepay\Model\CouponList getCouponList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $state, $type, $expire_reason, $discount_handle, $discount_currency, $discount_percentage, $eligible_currency, $code, $name, $all_plans, $max_redemptions, $redemptions, $valid_until)

Get list of coupons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$range = "created"; // string | 
$handle = "handle_example"; // string | 
$handle_prefix = "handle_prefix_example"; // string | 
$state = array("state_example"); // string[] | 
$type = "type_example"; // string | 
$expire_reason = array("expire_reason_example"); // string[] | 
$discount_handle = "discount_handle_example"; // string | 
$discount_currency = array("discount_currency_example"); // string[] | 
$discount_percentage = "discount_percentage_example"; // string | 
$eligible_currency = "eligible_currency_example"; // string | 
$code = "code_example"; // string | 
$name = "name_example"; // string | 
$all_plans = "all_plans_example"; // string | 
$max_redemptions = "max_redemptions_example"; // string | 
$redemptions = "redemptions_example"; // string | 
$valid_until = "valid_until_example"; // string | 

try {
    $result = $apiInstance->getCouponList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $state, $type, $expire_reason, $discount_handle, $discount_currency, $discount_percentage, $eligible_currency, $code, $name, $all_plans, $max_redemptions, $redemptions, $valid_until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getCouponList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **range** | **string**|  | [optional] [default to created]
 **handle** | **string**|  | [optional]
 **handle_prefix** | **string**|  | [optional]
 **state** | [**string[]**](../Model/string.md)|  | [optional]
 **type** | **string**|  | [optional]
 **expire_reason** | [**string[]**](../Model/string.md)|  | [optional]
 **discount_handle** | **string**|  | [optional]
 **discount_currency** | [**string[]**](../Model/string.md)|  | [optional]
 **discount_percentage** | **string**|  | [optional]
 **eligible_currency** | **string**|  | [optional]
 **code** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **all_plans** | **string**|  | [optional]
 **max_redemptions** | **string**|  | [optional]
 **redemptions** | **string**|  | [optional]
 **valid_until** | **string**|  | [optional]

### Return type

[**\Reepay\Model\CouponList**](../Model/CouponList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerList**
> \Reepay\Model\CustomerList getCustomerList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $handle_contains, $name, $email, $email_prefix, $first_name, $last_name, $address, $address2, $postal_code, $city, $country, $phone, $company, $vat, $debtor_id)

Get list of customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$range = "created"; // string | 
$handle = "handle_example"; // string | 
$handle_prefix = "handle_prefix_example"; // string | 
$handle_contains = "handle_contains_example"; // string | 
$name = "name_example"; // string | 
$email = "email_example"; // string | 
$email_prefix = "email_prefix_example"; // string | 
$first_name = "first_name_example"; // string | 
$last_name = "last_name_example"; // string | 
$address = "address_example"; // string | 
$address2 = "address2_example"; // string | 
$postal_code = "postal_code_example"; // string | 
$city = "city_example"; // string | 
$country = "country_example"; // string | 
$phone = "phone_example"; // string | 
$company = "company_example"; // string | 
$vat = "vat_example"; // string | 
$debtor_id = "debtor_id_example"; // string | 

try {
    $result = $apiInstance->getCustomerList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $handle_contains, $name, $email, $email_prefix, $first_name, $last_name, $address, $address2, $postal_code, $city, $country, $phone, $company, $vat, $debtor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getCustomerList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **range** | **string**|  | [optional] [default to created]
 **handle** | **string**|  | [optional]
 **handle_prefix** | **string**|  | [optional]
 **handle_contains** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **email_prefix** | **string**|  | [optional]
 **first_name** | **string**|  | [optional]
 **last_name** | **string**|  | [optional]
 **address** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **postal_code** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **country** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **company** | **string**|  | [optional]
 **vat** | **string**|  | [optional]
 **debtor_id** | **string**|  | [optional]

### Return type

[**\Reepay\Model\CustomerList**](../Model/CustomerList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscountList**
> \Reepay\Model\DiscountList getDiscountList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $state, $apply_to, $name, $description, $amount, $percentage, $fixed_count, $currency)

Get list of discounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$range = "created"; // string | 
$handle = "handle_example"; // string | 
$handle_prefix = "handle_prefix_example"; // string | 
$state = "state_example"; // string | 
$apply_to = array("apply_to_example"); // string[] | 
$name = "name_example"; // string | 
$description = "description_example"; // string | 
$amount = "amount_example"; // string | 
$percentage = "percentage_example"; // string | 
$fixed_count = "fixed_count_example"; // string | 
$currency = array("currency_example"); // string[] | 

try {
    $result = $apiInstance->getDiscountList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $state, $apply_to, $name, $description, $amount, $percentage, $fixed_count, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getDiscountList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **range** | **string**|  | [optional] [default to created]
 **handle** | **string**|  | [optional]
 **handle_prefix** | **string**|  | [optional]
 **state** | **string**|  | [optional]
 **apply_to** | [**string[]**](../Model/string.md)|  | [optional]
 **name** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **amount** | **string**|  | [optional]
 **percentage** | **string**|  | [optional]
 **fixed_count** | **string**|  | [optional]
 **currency** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Reepay\Model\DiscountList**](../Model/DiscountList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceCreditNoteList**
> \Reepay\Model\InvoiceCreditNoteListDto getInvoiceCreditNoteList($from, $to, $interval, $size, $next_page_token, $accounting_number, $accounting_number_prefix, $accounting_number_contains, $amount, $customer, $currency, $subscription, $invoice, $debtor_id)



Get list of credit notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$accounting_number = "accounting_number_example"; // string | Credit note exact accounting number
$accounting_number_prefix = "accounting_number_prefix_example"; // string | Credit note accounting number prefix
$accounting_number_contains = "accounting_number_contains_example"; // string | Credit note accounting number contains
$amount = "amount_example"; // string | Amount in minor unit interval. See documentation of intervals.
$customer = "customer_example"; // string | Credit notes for customer by customer handle
$currency = array("currency_example"); // string[] | Credit note currency in [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined.
$subscription = "subscription_example"; // string | Credit note for subscription by subscription handle
$invoice = "invoice_example"; // string | Credit note for invoice by invoice handle
$debtor_id = "debtor_id_example"; // string | 

try {
    $result = $apiInstance->getInvoiceCreditNoteList($from, $to, $interval, $size, $next_page_token, $accounting_number, $accounting_number_prefix, $accounting_number_contains, $amount, $customer, $currency, $subscription, $invoice, $debtor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getInvoiceCreditNoteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **accounting_number** | **string**| Credit note exact accounting number | [optional]
 **accounting_number_prefix** | **string**| Credit note accounting number prefix | [optional]
 **accounting_number_contains** | **string**| Credit note accounting number contains | [optional]
 **amount** | **string**| Amount in minor unit interval. See documentation of intervals. | [optional]
 **customer** | **string**| Credit notes for customer by customer handle | [optional]
 **currency** | [**string[]**](../Model/string.md)| Credit note currency in [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined. | [optional]
 **subscription** | **string**| Credit note for subscription by subscription handle | [optional]
 **invoice** | **string**| Credit note for invoice by invoice handle | [optional]
 **debtor_id** | **string**|  | [optional]

### Return type

[**\Reepay\Model\InvoiceCreditNoteListDto**](../Model/InvoiceCreditNoteListDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceList**
> \Reepay\Model\InvoiceList getInvoiceList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $handle_contains, $accounting_number, $accounting_number_prefix, $accounting_number_contains, $state, $exclude_state, $customer, $amount, $refunded_amount, $authorized_amount, $currency, $partial_settled, $settled_amount, $debtor_id, $type, $subscription, $plan, $dunning_start, $dunning_success, $number, $due)

Get list of invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$range = "created"; // string | 
$handle = "handle_example"; // string | 
$handle_prefix = "handle_prefix_example"; // string | 
$handle_contains = "handle_contains_example"; // string | 
$accounting_number = "accounting_number_example"; // string | 
$accounting_number_prefix = "accounting_number_prefix_example"; // string | 
$accounting_number_contains = "accounting_number_contains_example"; // string | 
$state = array("state_example"); // string[] | 
$exclude_state = array("exclude_state_example"); // string[] | 
$customer = "customer_example"; // string | 
$amount = "amount_example"; // string | 
$refunded_amount = "refunded_amount_example"; // string | 
$authorized_amount = "authorized_amount_example"; // string | 
$currency = array("currency_example"); // string[] | 
$partial_settled = true; // bool | 
$settled_amount = "settled_amount_example"; // string | 
$debtor_id = "debtor_id_example"; // string | 
$type = array("type_example"); // string[] | 
$subscription = "subscription_example"; // string | 
$plan = "plan_example"; // string | 
$dunning_start = "dunning_start_example"; // string | 
$dunning_success = "dunning_success_example"; // string | 
$number = 56; // int | 
$due = "due_example"; // string | 

try {
    $result = $apiInstance->getInvoiceList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $handle_contains, $accounting_number, $accounting_number_prefix, $accounting_number_contains, $state, $exclude_state, $customer, $amount, $refunded_amount, $authorized_amount, $currency, $partial_settled, $settled_amount, $debtor_id, $type, $subscription, $plan, $dunning_start, $dunning_success, $number, $due);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getInvoiceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **range** | **string**|  | [optional] [default to created]
 **handle** | **string**|  | [optional]
 **handle_prefix** | **string**|  | [optional]
 **handle_contains** | **string**|  | [optional]
 **accounting_number** | **string**|  | [optional]
 **accounting_number_prefix** | **string**|  | [optional]
 **accounting_number_contains** | **string**|  | [optional]
 **state** | [**string[]**](../Model/string.md)|  | [optional]
 **exclude_state** | [**string[]**](../Model/string.md)|  | [optional]
 **customer** | **string**|  | [optional]
 **amount** | **string**|  | [optional]
 **refunded_amount** | **string**|  | [optional]
 **authorized_amount** | **string**|  | [optional]
 **currency** | [**string[]**](../Model/string.md)|  | [optional]
 **partial_settled** | **bool**|  | [optional]
 **settled_amount** | **string**|  | [optional]
 **debtor_id** | **string**|  | [optional]
 **type** | [**string[]**](../Model/string.md)|  | [optional]
 **subscription** | **string**|  | [optional]
 **plan** | **string**|  | [optional]
 **dunning_start** | **string**|  | [optional]
 **dunning_success** | **string**|  | [optional]
 **number** | **int**|  | [optional]
 **due** | **string**|  | [optional]

### Return type

[**\Reepay\Model\InvoiceList**](../Model/InvoiceList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentMethodList**
> \Reepay\Model\PaymentMethodList getPaymentMethodList($from, $to, $interval, $size, $next_page_token, $range, $id, $state, $payment_type, $customer, $subscription, $reference, $failed, $card_type, $transaction_card_type, $card_prefix, $card_postfix, $card_fingerprint, $card_country, $card_gateway, $card_agreement, $mps_external_id)

Get list of payment methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$range = "created"; // string | 
$id = "id_example"; // string | 
$state = array("state_example"); // string[] | 
$payment_type = array("payment_type_example"); // string[] | 
$customer = "customer_example"; // string | 
$subscription = "subscription_example"; // string | 
$reference = "reference_example"; // string | 
$failed = "failed_example"; // string | 
$card_type = array("card_type_example"); // string[] | 
$transaction_card_type = array("transaction_card_type_example"); // string[] | 
$card_prefix = "card_prefix_example"; // string | 
$card_postfix = "card_postfix_example"; // string | 
$card_fingerprint = "card_fingerprint_example"; // string | 
$card_country = array("card_country_example"); // string[] | 
$card_gateway = "card_gateway_example"; // string | 
$card_agreement = "card_agreement_example"; // string | 
$mps_external_id = "mps_external_id_example"; // string | 

try {
    $result = $apiInstance->getPaymentMethodList($from, $to, $interval, $size, $next_page_token, $range, $id, $state, $payment_type, $customer, $subscription, $reference, $failed, $card_type, $transaction_card_type, $card_prefix, $card_postfix, $card_fingerprint, $card_country, $card_gateway, $card_agreement, $mps_external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getPaymentMethodList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **range** | **string**|  | [optional] [default to created]
 **id** | **string**|  | [optional]
 **state** | [**string[]**](../Model/string.md)|  | [optional]
 **payment_type** | [**string[]**](../Model/string.md)|  | [optional]
 **customer** | **string**|  | [optional]
 **subscription** | **string**|  | [optional]
 **reference** | **string**|  | [optional]
 **failed** | **string**|  | [optional]
 **card_type** | [**string[]**](../Model/string.md)|  | [optional]
 **transaction_card_type** | [**string[]**](../Model/string.md)|  | [optional]
 **card_prefix** | **string**|  | [optional]
 **card_postfix** | **string**|  | [optional]
 **card_fingerprint** | **string**|  | [optional]
 **card_country** | [**string[]**](../Model/string.md)|  | [optional]
 **card_gateway** | **string**|  | [optional]
 **card_agreement** | **string**|  | [optional]
 **mps_external_id** | **string**|  | [optional]

### Return type

[**\Reepay\Model\PaymentMethodList**](../Model/PaymentMethodList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayoutList**
> \Reepay\Model\PayoutList getPayoutList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $handle_contains, $customer, $state, $amount, $currency, $card, $card_type, $card_prefix, $card_postfix, $card_fingerprint)

Get list of payouts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$range = "created"; // string | 
$handle = "handle_example"; // string | 
$handle_prefix = "handle_prefix_example"; // string | 
$handle_contains = "handle_contains_example"; // string | 
$customer = "customer_example"; // string | 
$state = array("state_example"); // string[] | 
$amount = "amount_example"; // string | 
$currency = array("currency_example"); // string[] | 
$card = "card_example"; // string | 
$card_type = "card_type_example"; // string | 
$card_prefix = "card_prefix_example"; // string | 
$card_postfix = "card_postfix_example"; // string | 
$card_fingerprint = "card_fingerprint_example"; // string | 

try {
    $result = $apiInstance->getPayoutList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $handle_contains, $customer, $state, $amount, $currency, $card, $card_type, $card_prefix, $card_postfix, $card_fingerprint);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getPayoutList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **range** | **string**|  | [optional] [default to created]
 **handle** | **string**|  | [optional]
 **handle_prefix** | **string**|  | [optional]
 **handle_contains** | **string**|  | [optional]
 **customer** | **string**|  | [optional]
 **state** | [**string[]**](../Model/string.md)|  | [optional]
 **amount** | **string**|  | [optional]
 **currency** | [**string[]**](../Model/string.md)|  | [optional]
 **card** | **string**|  | [optional]
 **card_type** | **string**|  | [optional]
 **card_prefix** | **string**|  | [optional]
 **card_postfix** | **string**|  | [optional]
 **card_fingerprint** | **string**|  | [optional]

### Return type

[**\Reepay\Model\PayoutList**](../Model/PayoutList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlanList**
> \Reepay\Model\PlanList getPlanList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $handles, $state, $schedule_type, $partial_period_handling, $setup_fee_handling, $fixed_life_time_unit, $trial_interval_unit, $dunning_plan_handle, $name, $description, $setup_fee_text, $amount, $quantity, $fixed_count, $fixed_life_time_length, $trial_interval_length, $interval_length, $schedule_fixed_day, $renewal_reminder_email_days, $trial_reminder_email_days, $base_month, $notice_periods, $minimum_prorated_amount, $fixation_periods, $setup_fee, $amount_incl_vat, $notice_periods_after_current, $fixation_periods_full, $include_zero_amount, $partial_proration_days, $fixed_trial_days, $currency)

Get list of plans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$range = "created"; // string | 
$handle = "handle_example"; // string | 
$handle_prefix = "handle_prefix_example"; // string | 
$handles = array("handles_example"); // string[] | 
$state = array("state_example"); // string[] | 
$schedule_type = array("schedule_type_example"); // string[] | 
$partial_period_handling = array("partial_period_handling_example"); // string[] | 
$setup_fee_handling = array("setup_fee_handling_example"); // string[] | 
$fixed_life_time_unit = array("fixed_life_time_unit_example"); // string[] | 
$trial_interval_unit = array("trial_interval_unit_example"); // string[] | 
$dunning_plan_handle = "dunning_plan_handle_example"; // string | 
$name = "name_example"; // string | 
$description = "description_example"; // string | 
$setup_fee_text = "setup_fee_text_example"; // string | 
$amount = "amount_example"; // string | 
$quantity = "quantity_example"; // string | 
$fixed_count = "fixed_count_example"; // string | 
$fixed_life_time_length = "fixed_life_time_length_example"; // string | 
$trial_interval_length = "trial_interval_length_example"; // string | 
$interval_length = "interval_length_example"; // string | 
$schedule_fixed_day = "schedule_fixed_day_example"; // string | 
$renewal_reminder_email_days = "renewal_reminder_email_days_example"; // string | 
$trial_reminder_email_days = "trial_reminder_email_days_example"; // string | 
$base_month = "base_month_example"; // string | 
$notice_periods = "notice_periods_example"; // string | 
$minimum_prorated_amount = "minimum_prorated_amount_example"; // string | 
$fixation_periods = "fixation_periods_example"; // string | 
$setup_fee = "setup_fee_example"; // string | 
$amount_incl_vat = "amount_incl_vat_example"; // string | 
$notice_periods_after_current = "notice_periods_after_current_example"; // string | 
$fixation_periods_full = "fixation_periods_full_example"; // string | 
$include_zero_amount = "include_zero_amount_example"; // string | 
$partial_proration_days = "partial_proration_days_example"; // string | 
$fixed_trial_days = "fixed_trial_days_example"; // string | 
$currency = array("currency_example"); // string[] | 

try {
    $result = $apiInstance->getPlanList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $handles, $state, $schedule_type, $partial_period_handling, $setup_fee_handling, $fixed_life_time_unit, $trial_interval_unit, $dunning_plan_handle, $name, $description, $setup_fee_text, $amount, $quantity, $fixed_count, $fixed_life_time_length, $trial_interval_length, $interval_length, $schedule_fixed_day, $renewal_reminder_email_days, $trial_reminder_email_days, $base_month, $notice_periods, $minimum_prorated_amount, $fixation_periods, $setup_fee, $amount_incl_vat, $notice_periods_after_current, $fixation_periods_full, $include_zero_amount, $partial_proration_days, $fixed_trial_days, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getPlanList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **range** | **string**|  | [optional] [default to created]
 **handle** | **string**|  | [optional]
 **handle_prefix** | **string**|  | [optional]
 **handles** | [**string[]**](../Model/string.md)|  | [optional]
 **state** | [**string[]**](../Model/string.md)|  | [optional]
 **schedule_type** | [**string[]**](../Model/string.md)|  | [optional]
 **partial_period_handling** | [**string[]**](../Model/string.md)|  | [optional]
 **setup_fee_handling** | [**string[]**](../Model/string.md)|  | [optional]
 **fixed_life_time_unit** | [**string[]**](../Model/string.md)|  | [optional]
 **trial_interval_unit** | [**string[]**](../Model/string.md)|  | [optional]
 **dunning_plan_handle** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **setup_fee_text** | **string**|  | [optional]
 **amount** | **string**|  | [optional]
 **quantity** | **string**|  | [optional]
 **fixed_count** | **string**|  | [optional]
 **fixed_life_time_length** | **string**|  | [optional]
 **trial_interval_length** | **string**|  | [optional]
 **interval_length** | **string**|  | [optional]
 **schedule_fixed_day** | **string**|  | [optional]
 **renewal_reminder_email_days** | **string**|  | [optional]
 **trial_reminder_email_days** | **string**|  | [optional]
 **base_month** | **string**|  | [optional]
 **notice_periods** | **string**|  | [optional]
 **minimum_prorated_amount** | **string**|  | [optional]
 **fixation_periods** | **string**|  | [optional]
 **setup_fee** | **string**|  | [optional]
 **amount_incl_vat** | **string**|  | [optional]
 **notice_periods_after_current** | **string**|  | [optional]
 **fixation_periods_full** | **string**|  | [optional]
 **include_zero_amount** | **string**|  | [optional]
 **partial_proration_days** | **string**|  | [optional]
 **fixed_trial_days** | **string**|  | [optional]
 **currency** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Reepay\Model\PlanList**](../Model/PlanList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionList**
> \Reepay\Model\SubscriptionList getSubscriptionList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $handle_contains, $customer, $plan, $state, $amount, $quantity, $activated, $cancelled_date, $reactivated, $created, $renewing, $plan_version, $amount_incl_vat, $start_date, $end_date, $grace_duration, $current_period_start, $next_period_start, $first_period_start, $last_period_start, $trial_start, $trial_end, $in_trial, $has_started, $renewal_count, $expired_date, $expire_reason, $on_hold_date, $on_hold_reason, $payment_method_added, $reminder_email_sent, $failed_invoices, $failed_amount, $cancelled_invoices, $cancelled_amount, $pending_invoices, $pending_amount, $dunning_invoices, $dunning_amount, $settled_invoices, $settled_amount, $refunded_amount, $pending_additional_costs, $pending_additional_cost_amount, $transferred_additional_costs, $transferred_additional_cost_amount, $pending_credits, $pending_credit_amount, $transferred_credits, $transferred_credit_amount, $subscription_add_on_handle, $add_on_handle, $subscription_discount_handle, $discount_handle, $coupon_handle, $payment_method)

Get list of subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$range = "created"; // string | 
$handle = "handle_example"; // string | 
$handle_prefix = "handle_prefix_example"; // string | 
$handle_contains = "handle_contains_example"; // string | 
$customer = "customer_example"; // string | 
$plan = "plan_example"; // string | 
$state = array("state_example"); // string[] | 
$amount = "amount_example"; // string | 
$quantity = "quantity_example"; // string | 
$activated = "activated_example"; // string | 
$cancelled_date = "cancelled_date_example"; // string | 
$reactivated = "reactivated_example"; // string | 
$created = "created_example"; // string | 
$renewing = "renewing_example"; // string | 
$plan_version = 56; // int | 
$amount_incl_vat = "amount_incl_vat_example"; // string | 
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 
$grace_duration = "grace_duration_example"; // string | 
$current_period_start = "current_period_start_example"; // string | 
$next_period_start = "next_period_start_example"; // string | 
$first_period_start = "first_period_start_example"; // string | 
$last_period_start = "last_period_start_example"; // string | 
$trial_start = "trial_start_example"; // string | 
$trial_end = "trial_end_example"; // string | 
$in_trial = "in_trial_example"; // string | 
$has_started = "has_started_example"; // string | 
$renewal_count = "renewal_count_example"; // string | 
$expired_date = "expired_date_example"; // string | 
$expire_reason = array("expire_reason_example"); // string[] | 
$on_hold_date = "on_hold_date_example"; // string | 
$on_hold_reason = array("on_hold_reason_example"); // string[] | 
$payment_method_added = "payment_method_added_example"; // string | 
$reminder_email_sent = "reminder_email_sent_example"; // string | 
$failed_invoices = "failed_invoices_example"; // string | 
$failed_amount = "failed_amount_example"; // string | 
$cancelled_invoices = "cancelled_invoices_example"; // string | 
$cancelled_amount = "cancelled_amount_example"; // string | 
$pending_invoices = "pending_invoices_example"; // string | 
$pending_amount = "pending_amount_example"; // string | 
$dunning_invoices = "dunning_invoices_example"; // string | 
$dunning_amount = "dunning_amount_example"; // string | 
$settled_invoices = "settled_invoices_example"; // string | 
$settled_amount = "settled_amount_example"; // string | 
$refunded_amount = "refunded_amount_example"; // string | 
$pending_additional_costs = "pending_additional_costs_example"; // string | 
$pending_additional_cost_amount = "pending_additional_cost_amount_example"; // string | 
$transferred_additional_costs = "transferred_additional_costs_example"; // string | 
$transferred_additional_cost_amount = "transferred_additional_cost_amount_example"; // string | 
$pending_credits = "pending_credits_example"; // string | 
$pending_credit_amount = "pending_credit_amount_example"; // string | 
$transferred_credits = "transferred_credits_example"; // string | 
$transferred_credit_amount = "transferred_credit_amount_example"; // string | 
$subscription_add_on_handle = "subscription_add_on_handle_example"; // string | 
$add_on_handle = "add_on_handle_example"; // string | 
$subscription_discount_handle = "subscription_discount_handle_example"; // string | 
$discount_handle = "discount_handle_example"; // string | 
$coupon_handle = "coupon_handle_example"; // string | 
$payment_method = "payment_method_example"; // string | 

try {
    $result = $apiInstance->getSubscriptionList($from, $to, $interval, $size, $next_page_token, $range, $handle, $handle_prefix, $handle_contains, $customer, $plan, $state, $amount, $quantity, $activated, $cancelled_date, $reactivated, $created, $renewing, $plan_version, $amount_incl_vat, $start_date, $end_date, $grace_duration, $current_period_start, $next_period_start, $first_period_start, $last_period_start, $trial_start, $trial_end, $in_trial, $has_started, $renewal_count, $expired_date, $expire_reason, $on_hold_date, $on_hold_reason, $payment_method_added, $reminder_email_sent, $failed_invoices, $failed_amount, $cancelled_invoices, $cancelled_amount, $pending_invoices, $pending_amount, $dunning_invoices, $dunning_amount, $settled_invoices, $settled_amount, $refunded_amount, $pending_additional_costs, $pending_additional_cost_amount, $transferred_additional_costs, $transferred_additional_cost_amount, $pending_credits, $pending_credit_amount, $transferred_credits, $transferred_credit_amount, $subscription_add_on_handle, $add_on_handle, $subscription_discount_handle, $discount_handle, $coupon_handle, $payment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getSubscriptionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **range** | **string**|  | [optional] [default to created]
 **handle** | **string**|  | [optional]
 **handle_prefix** | **string**|  | [optional]
 **handle_contains** | **string**|  | [optional]
 **customer** | **string**|  | [optional]
 **plan** | **string**|  | [optional]
 **state** | [**string[]**](../Model/string.md)|  | [optional]
 **amount** | **string**|  | [optional]
 **quantity** | **string**|  | [optional]
 **activated** | **string**|  | [optional]
 **cancelled_date** | **string**|  | [optional]
 **reactivated** | **string**|  | [optional]
 **created** | **string**|  | [optional]
 **renewing** | **string**|  | [optional]
 **plan_version** | **int**|  | [optional]
 **amount_incl_vat** | **string**|  | [optional]
 **start_date** | **string**|  | [optional]
 **end_date** | **string**|  | [optional]
 **grace_duration** | **string**|  | [optional]
 **current_period_start** | **string**|  | [optional]
 **next_period_start** | **string**|  | [optional]
 **first_period_start** | **string**|  | [optional]
 **last_period_start** | **string**|  | [optional]
 **trial_start** | **string**|  | [optional]
 **trial_end** | **string**|  | [optional]
 **in_trial** | **string**|  | [optional]
 **has_started** | **string**|  | [optional]
 **renewal_count** | **string**|  | [optional]
 **expired_date** | **string**|  | [optional]
 **expire_reason** | [**string[]**](../Model/string.md)|  | [optional]
 **on_hold_date** | **string**|  | [optional]
 **on_hold_reason** | [**string[]**](../Model/string.md)|  | [optional]
 **payment_method_added** | **string**|  | [optional]
 **reminder_email_sent** | **string**|  | [optional]
 **failed_invoices** | **string**|  | [optional]
 **failed_amount** | **string**|  | [optional]
 **cancelled_invoices** | **string**|  | [optional]
 **cancelled_amount** | **string**|  | [optional]
 **pending_invoices** | **string**|  | [optional]
 **pending_amount** | **string**|  | [optional]
 **dunning_invoices** | **string**|  | [optional]
 **dunning_amount** | **string**|  | [optional]
 **settled_invoices** | **string**|  | [optional]
 **settled_amount** | **string**|  | [optional]
 **refunded_amount** | **string**|  | [optional]
 **pending_additional_costs** | **string**|  | [optional]
 **pending_additional_cost_amount** | **string**|  | [optional]
 **transferred_additional_costs** | **string**|  | [optional]
 **transferred_additional_cost_amount** | **string**|  | [optional]
 **pending_credits** | **string**|  | [optional]
 **pending_credit_amount** | **string**|  | [optional]
 **transferred_credits** | **string**|  | [optional]
 **transferred_credit_amount** | **string**|  | [optional]
 **subscription_add_on_handle** | **string**|  | [optional]
 **add_on_handle** | **string**|  | [optional]
 **subscription_discount_handle** | **string**|  | [optional]
 **discount_handle** | **string**|  | [optional]
 **coupon_handle** | **string**|  | [optional]
 **payment_method** | **string**|  | [optional]

### Return type

[**\Reepay\Model\SubscriptionList**](../Model/SubscriptionList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaxPolicyList**
> \Reepay\Model\TaxPolicyList getTaxPolicyList($from, $to, $interval, $size, $next_page_token)

Get list of tax policies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 

try {
    $result = $apiInstance->getTaxPolicyList($from, $to, $interval, $size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getTaxPolicyList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]

### Return type

[**\Reepay\Model\TaxPolicyList**](../Model/TaxPolicyList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionList**
> \Reepay\Model\TransactionList getTransactionList($from, $to, $interval, $size, $next_page_token, $range, $type, $state, $payment_type, $invoice, $currency, $amount, $card_type, $transaction_card_type, $card_prefix, $card_postfix, $card_fingerprint, $card_country, $card_gateway, $payment_method, $card_acquirer_code, $card_error_state, $card_error, $payment_context, $card_acquirer_reference, $frictionless)

Get list of transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$range = "created"; // string | 
$type = array("type_example"); // string[] | 
$state = array("state_example"); // string[] | 
$payment_type = array("payment_type_example"); // string[] | 
$invoice = "invoice_example"; // string | 
$currency = array("currency_example"); // string[] | 
$amount = "amount_example"; // string | 
$card_type = array("card_type_example"); // string[] | 
$transaction_card_type = array("transaction_card_type_example"); // string[] | 
$card_prefix = "card_prefix_example"; // string | 
$card_postfix = "card_postfix_example"; // string | 
$card_fingerprint = "card_fingerprint_example"; // string | 
$card_country = array("card_country_example"); // string[] | 
$card_gateway = "card_gateway_example"; // string | 
$payment_method = "payment_method_example"; // string | 
$card_acquirer_code = "card_acquirer_code_example"; // string | 
$card_error_state = "card_error_state_example"; // string | 
$card_error = "card_error_example"; // string | 
$payment_context = "payment_context_example"; // string | 
$card_acquirer_reference = "card_acquirer_reference_example"; // string | 
$frictionless = "frictionless_example"; // string | 

try {
    $result = $apiInstance->getTransactionList($from, $to, $interval, $size, $next_page_token, $range, $type, $state, $payment_type, $invoice, $currency, $amount, $card_type, $transaction_card_type, $card_prefix, $card_postfix, $card_fingerprint, $card_country, $card_gateway, $payment_method, $card_acquirer_code, $card_error_state, $card_error, $payment_context, $card_acquirer_reference, $frictionless);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getTransactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **range** | **string**|  | [optional] [default to created]
 **type** | [**string[]**](../Model/string.md)|  | [optional]
 **state** | [**string[]**](../Model/string.md)|  | [optional]
 **payment_type** | [**string[]**](../Model/string.md)|  | [optional]
 **invoice** | **string**|  | [optional]
 **currency** | [**string[]**](../Model/string.md)|  | [optional]
 **amount** | **string**|  | [optional]
 **card_type** | [**string[]**](../Model/string.md)|  | [optional]
 **transaction_card_type** | [**string[]**](../Model/string.md)|  | [optional]
 **card_prefix** | **string**|  | [optional]
 **card_postfix** | **string**|  | [optional]
 **card_fingerprint** | **string**|  | [optional]
 **card_country** | [**string[]**](../Model/string.md)|  | [optional]
 **card_gateway** | **string**|  | [optional]
 **payment_method** | **string**|  | [optional]
 **card_acquirer_code** | **string**|  | [optional]
 **card_error_state** | **string**|  | [optional]
 **card_error** | **string**|  | [optional]
 **payment_context** | **string**|  | [optional]
 **card_acquirer_reference** | **string**|  | [optional]
 **frictionless** | **string**|  | [optional]

### Return type

[**\Reepay\Model\TransactionList**](../Model/TransactionList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookList**
> \Reepay\Model\WebhookList getWebhookList($from, $to, $interval, $size, $next_page_token, $range, $state, $event)

Get list of webhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$interval = "interval_example"; // string | 
$size = 20; // int | 
$next_page_token = "next_page_token_example"; // string | 
$range = "created"; // string | 
$state = "state_example"; // string | 
$event = "event_example"; // string | 

try {
    $result = $apiInstance->getWebhookList($from, $to, $interval, $size, $next_page_token, $range, $state, $event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getWebhookList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **interval** | **string**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **next_page_token** | **string**|  | [optional]
 **range** | **string**|  | [optional] [default to created]
 **state** | **string**|  | [optional]
 **event** | **string**|  | [optional]

### Return type

[**\Reepay\Model\WebhookList**](../Model/WebhookList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

