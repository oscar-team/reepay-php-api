<?php
/**
 * CreateSession
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 */

namespace Reepay\Model;

use ArrayAccess;

/**
 * CreateSession Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 */
class CreateSession implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateSession';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'configuration' => 'string',
        'locale' => 'string',
        'invoice' => 'string',
        'settle' => 'bool',
        'order' => '\Reepay\Model\CreateOrder',
        'payment_methods' => 'string[]',
        'recurring' => 'bool',
        'accept_url' => 'string',
        'cancel_url' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'configuration' => null,
        'locale' => null,
        'invoice' => null,
        'settle' => null,
        'order' => null,
        'payment_methods' => null,
        'recurring' => null,
        'accept_url' => null,
        'cancel_url' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'configuration' => 'configuration',
        'locale' => 'locale',
        'invoice' => 'invoice',
        'settle' => 'settle',
        'order' => 'order',
        'payment_methods' => 'payment_methods',
        'recurring' => 'recurring',
        'accept_url' => 'accept_url',
        'cancel_url' => 'cancel_url',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'configuration' => 'setConfiguration',
        'locale' => 'setLocale',
        'invoice' => 'setInvoice',
        'settle' => 'setSettle',
        'order' => 'setOrder',
        'payment_methods' => 'setPaymentMethods',
        'recurring' => 'setRecurring',
        'accept_url' => 'setAcceptUrl',
        'cancel_url' => 'setCancelUrl',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'configuration' => 'getConfiguration',
        'locale' => 'getLocale',
        'invoice' => 'getInvoice',
        'settle' => 'getSettle',
        'order' => 'getOrder',
        'payment_methods' => 'getPaymentMethods',
        'recurring' => 'getRecurring',
        'accept_url' => 'getAcceptUrl',
        'cancel_url' => 'getCancelUrl',
    ];

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['settle'] = isset($data['settle']) ? $data['settle'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['payment_methods'] = isset($data['payment_methods']) ? $data['payment_methods'] : null;
        $this->container['recurring'] = isset($data['recurring']) ? $data['recurring'] : null;
        $this->container['accept_url'] = isset($data['accept_url']) ? $data['accept_url'] : null;
        $this->container['cancel_url'] = isset($data['cancel_url']) ? $data['cancel_url'] : null;
    }

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
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
        return true;
    }

    /**
     * Get configuration
     *
     * @return string
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Set configuration
     *
     * @param string $configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Set locale
     *
     * @param string $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return string
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Set invoice
     *
     * @param string $invoice
     *
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Get settle
     *
     * @return bool
     */
    public function getSettle()
    {
        return $this->container['settle'];
    }

    /**
     * Set settle
     *
     * @param bool $settle
     *
     * @return $this
     */
    public function setSettle($settle)
    {
        $this->container['settle'] = $settle;

        return $this;
    }

    /**
     * Get order
     *
     * @return \Reepay\Model\CreateOrder
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Set order
     *
     * @param \Reepay\Model\CreateOrder $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Get payment_methods
     *
     * @return array
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Set payment_methods
     *
     * @param array $payment_methods
     *
     * @return $this
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Get recurring
     *
     * @return bool
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Set recurring
     *
     * @param bool $recurring
     *
     * @return $this
     */
    public function setRecurring($recurring)
    {
        $this->container['recurring'] = $recurring;

        return $this;
    }

    /**
     * Get acceptUrl
     *
     * @return string
     */
    public function getAcceptUrl()
    {
        return $this->container['accept_url'];
    }

    /**
     * Set acceptUrl
     *
     * @param string $acceptUrl
     *
     * @return $this
     */
    public function setAcceptUrl($acceptUrl)
    {
        $this->container['accept_url'] = $acceptUrl;

        return $this;
    }

    /**
     * Get cancelUrl
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Set cancelUrl
     *
     * @param string $cancelUrl
     *
     * @return $this
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->container['cancel_url'] = $cancelUrl;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
            return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this));
    }
}
