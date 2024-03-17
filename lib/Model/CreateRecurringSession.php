<?php
/**
 * CreateRecurringSession
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay Checkout API
 *
 * Reepay Checkout REST API
 *
 * OpenAPI spec version: 1
 * Contact: open.source@driveoscar.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.54
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Reepay\Model;

use \ArrayAccess;
use \Reepay\ObjectSerializer;

/**
 * CreateRecurringSession Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateRecurringSession implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateRecurringSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'configuration' => 'string',
        'locale' => 'string',
        'ttl' => 'string',
        'phone' => 'string',
        'customer' => 'string',
        'currency' => 'string',
        'accept_url' => 'string',
        'cancel_url' => 'string',
        'payment_methods' => 'string[]',
        'card_on_file' => 'string',
        'card_on_file_require_cvv' => 'bool',
        'card_on_file_require_exp_date' => 'bool',
        'button_text' => 'string',
        'recurring_average_amount' => 'int',
        'sca_data' => '\Reepay\Model\ScaData',
        'session_data' => '\Reepay\Model\SessionData',
        'payment_method_reference' => 'string',
        'account_funding' => 'bool',
        'account_funding_information' => '\Reepay\Model\AccountFundingInformation',
        'agreement_filter' => 'string[]',
        'offline_agreement_filter' => 'string[]',
        'allowed_ip' => 'string',
        'create_customer' => '\Reepay\Model\CreateCustomer',
        'order_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'configuration' => null,
        'locale' => null,
        'ttl' => null,
        'phone' => null,
        'customer' => null,
        'currency' => null,
        'accept_url' => null,
        'cancel_url' => null,
        'payment_methods' => null,
        'card_on_file' => null,
        'card_on_file_require_cvv' => null,
        'card_on_file_require_exp_date' => null,
        'button_text' => null,
        'recurring_average_amount' => 'int64',
        'sca_data' => null,
        'session_data' => null,
        'payment_method_reference' => null,
        'account_funding' => null,
        'account_funding_information' => null,
        'agreement_filter' => null,
        'offline_agreement_filter' => null,
        'allowed_ip' => null,
        'create_customer' => null,
        'order_text' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'configuration' => 'configuration',
        'locale' => 'locale',
        'ttl' => 'ttl',
        'phone' => 'phone',
        'customer' => 'customer',
        'currency' => 'currency',
        'accept_url' => 'accept_url',
        'cancel_url' => 'cancel_url',
        'payment_methods' => 'payment_methods',
        'card_on_file' => 'card_on_file',
        'card_on_file_require_cvv' => 'card_on_file_require_cvv',
        'card_on_file_require_exp_date' => 'card_on_file_require_exp_date',
        'button_text' => 'button_text',
        'recurring_average_amount' => 'recurring_average_amount',
        'sca_data' => 'sca_data',
        'session_data' => 'session_data',
        'payment_method_reference' => 'payment_method_reference',
        'account_funding' => 'account_funding',
        'account_funding_information' => 'account_funding_information',
        'agreement_filter' => 'agreement_filter',
        'offline_agreement_filter' => 'offline_agreement_filter',
        'allowed_ip' => 'allowed_ip',
        'create_customer' => 'create_customer',
        'order_text' => 'order_text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'configuration' => 'setConfiguration',
        'locale' => 'setLocale',
        'ttl' => 'setTtl',
        'phone' => 'setPhone',
        'customer' => 'setCustomer',
        'currency' => 'setCurrency',
        'accept_url' => 'setAcceptUrl',
        'cancel_url' => 'setCancelUrl',
        'payment_methods' => 'setPaymentMethods',
        'card_on_file' => 'setCardOnFile',
        'card_on_file_require_cvv' => 'setCardOnFileRequireCvv',
        'card_on_file_require_exp_date' => 'setCardOnFileRequireExpDate',
        'button_text' => 'setButtonText',
        'recurring_average_amount' => 'setRecurringAverageAmount',
        'sca_data' => 'setScaData',
        'session_data' => 'setSessionData',
        'payment_method_reference' => 'setPaymentMethodReference',
        'account_funding' => 'setAccountFunding',
        'account_funding_information' => 'setAccountFundingInformation',
        'agreement_filter' => 'setAgreementFilter',
        'offline_agreement_filter' => 'setOfflineAgreementFilter',
        'allowed_ip' => 'setAllowedIp',
        'create_customer' => 'setCreateCustomer',
        'order_text' => 'setOrderText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'configuration' => 'getConfiguration',
        'locale' => 'getLocale',
        'ttl' => 'getTtl',
        'phone' => 'getPhone',
        'customer' => 'getCustomer',
        'currency' => 'getCurrency',
        'accept_url' => 'getAcceptUrl',
        'cancel_url' => 'getCancelUrl',
        'payment_methods' => 'getPaymentMethods',
        'card_on_file' => 'getCardOnFile',
        'card_on_file_require_cvv' => 'getCardOnFileRequireCvv',
        'card_on_file_require_exp_date' => 'getCardOnFileRequireExpDate',
        'button_text' => 'getButtonText',
        'recurring_average_amount' => 'getRecurringAverageAmount',
        'sca_data' => 'getScaData',
        'session_data' => 'getSessionData',
        'payment_method_reference' => 'getPaymentMethodReference',
        'account_funding' => 'getAccountFunding',
        'account_funding_information' => 'getAccountFundingInformation',
        'agreement_filter' => 'getAgreementFilter',
        'offline_agreement_filter' => 'getOfflineAgreementFilter',
        'allowed_ip' => 'getAllowedIp',
        'create_customer' => 'getCreateCustomer',
        'order_text' => 'getOrderText'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['accept_url'] = isset($data['accept_url']) ? $data['accept_url'] : null;
        $this->container['cancel_url'] = isset($data['cancel_url']) ? $data['cancel_url'] : null;
        $this->container['payment_methods'] = isset($data['payment_methods']) ? $data['payment_methods'] : null;
        $this->container['card_on_file'] = isset($data['card_on_file']) ? $data['card_on_file'] : null;
        $this->container['card_on_file_require_cvv'] = isset($data['card_on_file_require_cvv']) ? $data['card_on_file_require_cvv'] : null;
        $this->container['card_on_file_require_exp_date'] = isset($data['card_on_file_require_exp_date']) ? $data['card_on_file_require_exp_date'] : null;
        $this->container['button_text'] = isset($data['button_text']) ? $data['button_text'] : null;
        $this->container['recurring_average_amount'] = isset($data['recurring_average_amount']) ? $data['recurring_average_amount'] : null;
        $this->container['sca_data'] = isset($data['sca_data']) ? $data['sca_data'] : null;
        $this->container['session_data'] = isset($data['session_data']) ? $data['session_data'] : null;
        $this->container['payment_method_reference'] = isset($data['payment_method_reference']) ? $data['payment_method_reference'] : null;
        $this->container['account_funding'] = isset($data['account_funding']) ? $data['account_funding'] : null;
        $this->container['account_funding_information'] = isset($data['account_funding_information']) ? $data['account_funding_information'] : null;
        $this->container['agreement_filter'] = isset($data['agreement_filter']) ? $data['agreement_filter'] : null;
        $this->container['offline_agreement_filter'] = isset($data['offline_agreement_filter']) ? $data['offline_agreement_filter'] : null;
        $this->container['allowed_ip'] = isset($data['allowed_ip']) ? $data['allowed_ip'] : null;
        $this->container['create_customer'] = isset($data['create_customer']) ? $data['create_customer'] : null;
        $this->container['order_text'] = isset($data['order_text']) ? $data['order_text'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets configuration
     *
     * @return string
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param string $configuration Optional handle for a checkout configuration defined in the admin app to be used for this session
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale Optional locale for session. E.g. `en_GB`, `da_DK`, `es_ES`. Defaults to configuration locale or account locale.
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets ttl
     *
     * @return string
     */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
     * Sets ttl
     *
     * @param string $ttl Optional time-to-live duration. The session will expire after the duration from creation, meaning that payment attempts cannot be initiated after this duration. Notice though, that payments initiated within the time-to-live duration might finish after the TTL E.g. MobilePay Online flows. The duration must be given in the following notation: `PTxS` - x seconds, `PTxM` - x minutes, `PTxH` - x hours or `PxD` - x days. E.g. PT3H (three hours). The default time-to-live is three months.
     *
     * @return $this
     */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone number to use for payment methods able to use a prefilled phone number. E.g. MobilePay, Vipps and Swish. If no explicit phone number is defined, the phone number for the customer entity will be used.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return string
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param string $customer Handle for existing customer to add payment method to. Either this argument must be provided or `create_customer`.
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Optional currency to choose acquirer agreement from. Only use this argument if specifically necessary to select agreement based on currency for acquirers not supporting multi-currency.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets accept_url
     *
     * @return string
     */
    public function getAcceptUrl()
    {
        return $this->container['accept_url'];
    }

    /**
     * Sets accept_url
     *
     * @param string $accept_url If checkout is opened in separate window the customer will be directed to this page after success
     *
     * @return $this
     */
    public function setAcceptUrl($accept_url)
    {
        $this->container['accept_url'] = $accept_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string $cancel_url If checkout is opened in separate window the customer will be directed to this page if the customer cancels
     *
     * @return $this
     */
    public function setCancelUrl($cancel_url)
    {
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets payment_methods
     *
     * @return string[]
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param string[] $payment_methods Optional list of payment methods to use for the checkout session. Format: `<payment_methods> = list of <payment_method>` `<payment_method>  = [sca-|nosca-]<payment_name>` `<payment_name>    = The id of payment method, e.g. dankort` See https://docs.reepay.com/reference/checkout-payment-methods for full documentation
     *
     * @return $this
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets card_on_file
     *
     * @return string
     */
    public function getCardOnFile()
    {
        return $this->container['card_on_file'];
    }

    /**
     * Sets card_on_file
     *
     * @param string $card_on_file Reference to existing card payment method (`ca_xxx`) to use instead of having cardholder enter card data. CVV may still be required from cardholder.
     *
     * @return $this
     */
    public function setCardOnFile($card_on_file)
    {
        $this->container['card_on_file'] = $card_on_file;

        return $this;
    }

    /**
     * Gets card_on_file_require_cvv
     *
     * @return bool
     */
    public function getCardOnFileRequireCvv()
    {
        return $this->container['card_on_file_require_cvv'];
    }

    /**
     * Sets card_on_file_require_cvv
     *
     * @param bool $card_on_file_require_cvv Require cvv from cardholder for card-on-file
     *
     * @return $this
     */
    public function setCardOnFileRequireCvv($card_on_file_require_cvv)
    {
        $this->container['card_on_file_require_cvv'] = $card_on_file_require_cvv;

        return $this;
    }

    /**
     * Gets card_on_file_require_exp_date
     *
     * @return bool
     */
    public function getCardOnFileRequireExpDate()
    {
        return $this->container['card_on_file_require_exp_date'];
    }

    /**
     * Sets card_on_file_require_exp_date
     *
     * @param bool $card_on_file_require_exp_date Require expiration date for card-on-file
     *
     * @return $this
     */
    public function setCardOnFileRequireExpDate($card_on_file_require_exp_date)
    {
        $this->container['card_on_file_require_exp_date'] = $card_on_file_require_exp_date;

        return $this;
    }

    /**
     * Gets button_text
     *
     * @return string
     */
    public function getButtonText()
    {
        return $this->container['button_text'];
    }

    /**
     * Sets button_text
     *
     * @param string $button_text Optional alternative button text. Maximum length 32 characters.
     *
     * @return $this
     */
    public function setButtonText($button_text)
    {
        $this->container['button_text'] = $button_text;

        return $this;
    }

    /**
     * Gets recurring_average_amount
     *
     * @return int
     */
    public function getRecurringAverageAmount()
    {
        return $this->container['recurring_average_amount'];
    }

    /**
     * Sets recurring_average_amount
     *
     * @param int $recurring_average_amount For cost based acquirer agreement selection this argument can be used to define the amount used in calculating the least expensive agreement for future recurring payments. Can only be used for sessions saving a payment method for later use. Must be given in minor unit for currency.
     *
     * @return $this
     */
    public function setRecurringAverageAmount($recurring_average_amount)
    {
        $this->container['recurring_average_amount'] = $recurring_average_amount;

        return $this;
    }

    /**
     * Gets sca_data
     *
     * @return \Reepay\Model\ScaData
     */
    public function getScaData()
    {
        return $this->container['sca_data'];
    }

    /**
     * Sets sca_data
     *
     * @param \Reepay\Model\ScaData $sca_data sca_data
     *
     * @return $this
     */
    public function setScaData($sca_data)
    {
        $this->container['sca_data'] = $sca_data;

        return $this;
    }

    /**
     * Gets session_data
     *
     * @return \Reepay\Model\SessionData
     */
    public function getSessionData()
    {
        return $this->container['session_data'];
    }

    /**
     * Sets session_data
     *
     * @param \Reepay\Model\SessionData $session_data session_data
     *
     * @return $this
     */
    public function setSessionData($session_data)
    {
        $this->container['session_data'] = $session_data;

        return $this;
    }

    /**
     * Gets payment_method_reference
     *
     * @return string
     */
    public function getPaymentMethodReference()
    {
        return $this->container['payment_method_reference'];
    }

    /**
     * Sets payment_method_reference
     *
     * @param string $payment_method_reference Optional reference given to the created payment method in case a recurring payment method is created by the session. Session id will be used by default if not defined. Max length 64 with allowable characters [a-zA-Z0-9_.-@].
     *
     * @return $this
     */
    public function setPaymentMethodReference($payment_method_reference)
    {
        $this->container['payment_method_reference'] = $payment_method_reference;

        return $this;
    }

    /**
     * Gets account_funding
     *
     * @return bool
     */
    public function getAccountFunding()
    {
        return $this->container['account_funding'];
    }

    /**
     * Sets account_funding
     *
     * @param bool $account_funding Indicates that Account Funding Transaction (AFT) is requested. It only can be used for instant settle (i.e. 'settle' = true)
     *
     * @return $this
     */
    public function setAccountFunding($account_funding)
    {
        $this->container['account_funding'] = $account_funding;

        return $this;
    }

    /**
     * Gets account_funding_information
     *
     * @return \Reepay\Model\AccountFundingInformation
     */
    public function getAccountFundingInformation()
    {
        return $this->container['account_funding_information'];
    }

    /**
     * Sets account_funding_information
     *
     * @param \Reepay\Model\AccountFundingInformation $account_funding_information account_funding_information
     *
     * @return $this
     */
    public function setAccountFundingInformation($account_funding_information)
    {
        $this->container['account_funding_information'] = $account_funding_information;

        return $this;
    }

    /**
     * Gets agreement_filter
     *
     * @return string[]
     */
    public function getAgreementFilter()
    {
        return $this->container['agreement_filter'];
    }

    /**
     * Sets agreement_filter
     *
     * @param string[] $agreement_filter Optional list of agreement ids to filter which agreements will be used for card payments.
     *
     * @return $this
     */
    public function setAgreementFilter($agreement_filter)
    {
        $this->container['agreement_filter'] = $agreement_filter;

        return $this;
    }

    /**
     * Gets offline_agreement_filter
     *
     * @return string[]
     */
    public function getOfflineAgreementFilter()
    {
        return $this->container['offline_agreement_filter'];
    }

    /**
     * Sets offline_agreement_filter
     *
     * @param string[] $offline_agreement_filter Optional list of offline agreement handles to filter which options are shown to the consumer.
     *
     * @return $this
     */
    public function setOfflineAgreementFilter($offline_agreement_filter)
    {
        $this->container['offline_agreement_filter'] = $offline_agreement_filter;

        return $this;
    }

    /**
     * Gets allowed_ip
     *
     * @return string
     */
    public function getAllowedIp()
    {
        return $this->container['allowed_ip'];
    }

    /**
     * Sets allowed_ip
     *
     * @param string $allowed_ip Optional IP address to restrict the use of the session to
     *
     * @return $this
     */
    public function setAllowedIp($allowed_ip)
    {
        $this->container['allowed_ip'] = $allowed_ip;

        return $this;
    }

    /**
     * Gets create_customer
     *
     * @return \Reepay\Model\CreateCustomer
     */
    public function getCreateCustomer()
    {
        return $this->container['create_customer'];
    }

    /**
     * Sets create_customer
     *
     * @param \Reepay\Model\CreateCustomer $create_customer create_customer
     *
     * @return $this
     */
    public function setCreateCustomer($create_customer)
    {
        $this->container['create_customer'] = $create_customer;

        return $this;
    }

    /**
     * Gets order_text
     *
     * @return string
     */
    public function getOrderText()
    {
        return $this->container['order_text'];
    }

    /**
     * Sets order_text
     *
     * @param string $order_text Optional order text presented in the sign-up form
     *
     * @return $this
     */
    public function setOrderText($order_text)
    {
        $this->container['order_text'] = $order_text;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
