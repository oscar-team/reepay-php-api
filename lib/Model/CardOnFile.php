<?php
/**
 * CardOnFile
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
 * CardOnFile Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CardOnFile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CardOnFile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment_type' => 'string',
        'card_type' => 'string',
        'exp_date' => 'string',
        'masked_card' => 'string',
        'token' => 'string',
        'require_cvv' => 'bool',
        'require_exp_date' => 'bool',
        'transaction_card_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payment_type' => null,
        'card_type' => null,
        'exp_date' => null,
        'masked_card' => null,
        'token' => null,
        'require_cvv' => null,
        'require_exp_date' => null,
        'transaction_card_type' => null
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
        'payment_type' => 'paymentType',
        'card_type' => 'cardType',
        'exp_date' => 'expDate',
        'masked_card' => 'maskedCard',
        'token' => 'token',
        'require_cvv' => 'requireCvv',
        'require_exp_date' => 'requireExpDate',
        'transaction_card_type' => 'transactionCardType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_type' => 'setPaymentType',
        'card_type' => 'setCardType',
        'exp_date' => 'setExpDate',
        'masked_card' => 'setMaskedCard',
        'token' => 'setToken',
        'require_cvv' => 'setRequireCvv',
        'require_exp_date' => 'setRequireExpDate',
        'transaction_card_type' => 'setTransactionCardType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_type' => 'getPaymentType',
        'card_type' => 'getCardType',
        'exp_date' => 'getExpDate',
        'masked_card' => 'getMaskedCard',
        'token' => 'getToken',
        'require_cvv' => 'getRequireCvv',
        'require_exp_date' => 'getRequireExpDate',
        'transaction_card_type' => 'getTransactionCardType'
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

    const PAYMENT_TYPE_CARD = 'CARD';
    const PAYMENT_TYPE_ANYDAY = 'ANYDAY';
    const PAYMENT_TYPE_APPLEPAY = 'APPLEPAY';
    const PAYMENT_TYPE_GOOGLEPAY = 'GOOGLEPAY';
    const PAYMENT_TYPE_PAYPAL = 'PAYPAL';
    const PAYMENT_TYPE_SWISH = 'SWISH';
    const PAYMENT_TYPE_VIABILL = 'VIABILL';
    const PAYMENT_TYPE_VIPPS = 'VIPPS';
    const PAYMENT_TYPE_VIPPS_RECURRING = 'VIPPS_RECURRING';
    const PAYMENT_TYPE_MOBILEPAY = 'MOBILEPAY';
    const PAYMENT_TYPE_MOBILEPAY_SUBSCRIPTIONS = 'MOBILEPAY_SUBSCRIPTIONS';
    const PAYMENT_TYPE_KLARNA_PAY_NOW = 'KLARNA_PAY_NOW';
    const PAYMENT_TYPE_KLARNA_PAY_LATER = 'KLARNA_PAY_LATER';
    const PAYMENT_TYPE_KLARNA_SLICE_IT = 'KLARNA_SLICE_IT';
    const PAYMENT_TYPE_KLARNA_DIRECT_BANK_TRANSFER = 'KLARNA_DIRECT_BANK_TRANSFER';
    const PAYMENT_TYPE_KLARNA_DIRECT_DEBIT = 'KLARNA_DIRECT_DEBIT';
    const PAYMENT_TYPE_RESURS = 'RESURS';
    const PAYMENT_TYPE_EMV_TOKEN = 'EMV_TOKEN';
    const PAYMENT_TYPE_PP_BANCONTACT = 'PP_BANCONTACT';
    const PAYMENT_TYPE_PP_BLIK = 'PP_BLIK';
    const PAYMENT_TYPE_PP_BLIK_OC = 'PP_BLIK_OC';
    const PAYMENT_TYPE_PP_EPS = 'PP_EPS';
    const PAYMENT_TYPE_PP_ESTONIA_BANKS = 'PP_ESTONIA_BANKS';
    const PAYMENT_TYPE_PP_GIROPAY = 'PP_GIROPAY';
    const PAYMENT_TYPE_PP_IDEAL = 'PP_IDEAL';
    const PAYMENT_TYPE_PP_LATVIA_BANKS = 'PP_LATVIA_BANKS';
    const PAYMENT_TYPE_PP_LITHUANIA_BANKS = 'PP_LITHUANIA_BANKS';
    const PAYMENT_TYPE_PP_MB_WAY = 'PP_MB_WAY';
    const PAYMENT_TYPE_PP_MULTIBANCO = 'PP_MULTIBANCO';
    const PAYMENT_TYPE_PP_MYBANK = 'PP_MYBANK';
    const PAYMENT_TYPE_PP_P24 = 'PP_P24';
    const PAYMENT_TYPE_PP_PAYCONIQ = 'PP_PAYCONIQ';
    const PAYMENT_TYPE_PP_PAYSAFECARD = 'PP_PAYSAFECARD';
    const PAYMENT_TYPE_PP_PAYSERA = 'PP_PAYSERA';
    const PAYMENT_TYPE_PP_POSTFINANCE = 'PP_POSTFINANCE';
    const PAYMENT_TYPE_PP_SATISPAY = 'PP_SATISPAY';
    const PAYMENT_TYPE_PP_SEPA = 'PP_SEPA';
    const PAYMENT_TYPE_PP_TRUSTLY = 'PP_TRUSTLY';
    const PAYMENT_TYPE_PP_VERKKOPANKKI = 'PP_VERKKOPANKKI';
    const PAYMENT_TYPE_PP_WECHATPAY = 'PP_WECHATPAY';
    const PAYMENT_TYPE_PE_SANTANDER = 'PE_SANTANDER';
    const PAYMENT_TYPE_MANUAL = 'MANUAL';
    const PAYMENT_TYPE_OFFLINE_BANK_TRANSFER = 'OFFLINE_BANK_TRANSFER';
    const PAYMENT_TYPE_OFFLINE_CASH = 'OFFLINE_CASH';
    const PAYMENT_TYPE_OFFLINE_OTHER = 'OFFLINE_OTHER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_CARD,
            self::PAYMENT_TYPE_ANYDAY,
            self::PAYMENT_TYPE_APPLEPAY,
            self::PAYMENT_TYPE_GOOGLEPAY,
            self::PAYMENT_TYPE_PAYPAL,
            self::PAYMENT_TYPE_SWISH,
            self::PAYMENT_TYPE_VIABILL,
            self::PAYMENT_TYPE_VIPPS,
            self::PAYMENT_TYPE_VIPPS_RECURRING,
            self::PAYMENT_TYPE_MOBILEPAY,
            self::PAYMENT_TYPE_MOBILEPAY_SUBSCRIPTIONS,
            self::PAYMENT_TYPE_KLARNA_PAY_NOW,
            self::PAYMENT_TYPE_KLARNA_PAY_LATER,
            self::PAYMENT_TYPE_KLARNA_SLICE_IT,
            self::PAYMENT_TYPE_KLARNA_DIRECT_BANK_TRANSFER,
            self::PAYMENT_TYPE_KLARNA_DIRECT_DEBIT,
            self::PAYMENT_TYPE_RESURS,
            self::PAYMENT_TYPE_EMV_TOKEN,
            self::PAYMENT_TYPE_PP_BANCONTACT,
            self::PAYMENT_TYPE_PP_BLIK,
            self::PAYMENT_TYPE_PP_BLIK_OC,
            self::PAYMENT_TYPE_PP_EPS,
            self::PAYMENT_TYPE_PP_ESTONIA_BANKS,
            self::PAYMENT_TYPE_PP_GIROPAY,
            self::PAYMENT_TYPE_PP_IDEAL,
            self::PAYMENT_TYPE_PP_LATVIA_BANKS,
            self::PAYMENT_TYPE_PP_LITHUANIA_BANKS,
            self::PAYMENT_TYPE_PP_MB_WAY,
            self::PAYMENT_TYPE_PP_MULTIBANCO,
            self::PAYMENT_TYPE_PP_MYBANK,
            self::PAYMENT_TYPE_PP_P24,
            self::PAYMENT_TYPE_PP_PAYCONIQ,
            self::PAYMENT_TYPE_PP_PAYSAFECARD,
            self::PAYMENT_TYPE_PP_PAYSERA,
            self::PAYMENT_TYPE_PP_POSTFINANCE,
            self::PAYMENT_TYPE_PP_SATISPAY,
            self::PAYMENT_TYPE_PP_SEPA,
            self::PAYMENT_TYPE_PP_TRUSTLY,
            self::PAYMENT_TYPE_PP_VERKKOPANKKI,
            self::PAYMENT_TYPE_PP_WECHATPAY,
            self::PAYMENT_TYPE_PE_SANTANDER,
            self::PAYMENT_TYPE_MANUAL,
            self::PAYMENT_TYPE_OFFLINE_BANK_TRANSFER,
            self::PAYMENT_TYPE_OFFLINE_CASH,
            self::PAYMENT_TYPE_OFFLINE_OTHER,
        ];
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
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['exp_date'] = isset($data['exp_date']) ? $data['exp_date'] : null;
        $this->container['masked_card'] = isset($data['masked_card']) ? $data['masked_card'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['require_cvv'] = isset($data['require_cvv']) ? $data['require_cvv'] : null;
        $this->container['require_exp_date'] = isset($data['require_exp_date']) ? $data['require_exp_date'] : null;
        $this->container['transaction_card_type'] = isset($data['transaction_card_type']) ? $data['transaction_card_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($this->container['payment_type']) && !in_array($this->container['payment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type payment_type
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($payment_type) && !in_array($payment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string $card_type card_type
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets exp_date
     *
     * @return string
     */
    public function getExpDate()
    {
        return $this->container['exp_date'];
    }

    /**
     * Sets exp_date
     *
     * @param string $exp_date exp_date
     *
     * @return $this
     */
    public function setExpDate($exp_date)
    {
        $this->container['exp_date'] = $exp_date;

        return $this;
    }

    /**
     * Gets masked_card
     *
     * @return string
     */
    public function getMaskedCard()
    {
        return $this->container['masked_card'];
    }

    /**
     * Sets masked_card
     *
     * @param string $masked_card masked_card
     *
     * @return $this
     */
    public function setMaskedCard($masked_card)
    {
        $this->container['masked_card'] = $masked_card;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets require_cvv
     *
     * @return bool
     */
    public function getRequireCvv()
    {
        return $this->container['require_cvv'];
    }

    /**
     * Sets require_cvv
     *
     * @param bool $require_cvv require_cvv
     *
     * @return $this
     */
    public function setRequireCvv($require_cvv)
    {
        $this->container['require_cvv'] = $require_cvv;

        return $this;
    }

    /**
     * Gets require_exp_date
     *
     * @return bool
     */
    public function getRequireExpDate()
    {
        return $this->container['require_exp_date'];
    }

    /**
     * Sets require_exp_date
     *
     * @param bool $require_exp_date require_exp_date
     *
     * @return $this
     */
    public function setRequireExpDate($require_exp_date)
    {
        $this->container['require_exp_date'] = $require_exp_date;

        return $this;
    }

    /**
     * Gets transaction_card_type
     *
     * @return string
     */
    public function getTransactionCardType()
    {
        return $this->container['transaction_card_type'];
    }

    /**
     * Sets transaction_card_type
     *
     * @param string $transaction_card_type transaction_card_type
     *
     * @return $this
     */
    public function setTransactionCardType($transaction_card_type)
    {
        $this->container['transaction_card_type'] = $transaction_card_type;

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
