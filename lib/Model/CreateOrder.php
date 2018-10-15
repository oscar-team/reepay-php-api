<?php
/**
 * CreateOrder
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 */

namespace Reepay\Model;

use ArrayAccess;

/**
 * CreateOrder Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 */
class CreateOrder implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateOrder';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'handle' => 'string',
        'key' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'customer' => '\Reepay\Model\CreateCustomer',
        'settle' => 'bool',
        'ordertext' => 'string',
        'order_lines' => '\Reepay\Model\CreateOrderLine[]',
        'customer_handle' => '\Reepay\Model\CreateOrderLine[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'handle' => null,
        'key' => null,
        'amount' => 'int32',
        'currency' => null,
        'customer' => null,
        'settle' => null,
        'ordertext' => null,
        'order_lines' => null,
        'customer_handle' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'handle' => 'handle',
        'key' => 'key',
        'amount' => 'amount',
        'currency' => 'currency',
        'customer' => 'customer',
        'settle' => 'settle',
        'ordertext' => 'ordertext',
        'order_lines' => 'order_lines',
        'customer_handle' => 'customer_handle',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'handle' => 'setHandle',
        'key' => 'setKey',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'customer' => 'setCustomer',
        'settle' => 'setSettle',
        'ordertext' => 'setOrdertext',
        'order_lines' => 'setOrderLines',
        'customer_handle' => 'setCustomerHandle',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'handle' => 'getHandle',
        'key' => 'getKey',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'customer' => 'getCustomer',
        'settle' => 'getSettle',
        'ordertext' => 'getOrdertext',
        'order_lines' => 'getOrderLines',
        'customer_handle' => 'getCustomerHandle',
    ];

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['settle'] = isset($data['settle']) ? $data['settle'] : null;
        $this->container['ordertext'] = isset($data['ordertext']) ? $data['ordertext'] : null;
        $this->container['order_lines'] = isset($data['order_lines']) ? $data['order_lines'] : null;
        $this->container['customer_handle'] = isset($data['customer_handle']) ? $data['customer_handle'] : null;
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

        if ($this->container['handle'] === null) {
            $invalidProperties[] = "'handle' can't be null";
        }
        if (!is_null($this->container['amount']) && ($this->container['amount'] < 1)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 1.";
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
        if ($this->container['handle'] === null) {
            return false;
        }
        if ($this->container['amount'] < 1) {
            return false;
        }
        return true;
    }

    /**
     * Get handle
     *
     * @return string
     */
    public function getHandle()
    {
        return $this->container['handle'];
    }

    /**
     * Set handle
     *
     * @param string $handle
     *
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        if (!is_null($amount) && ($amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling CreateOrder., must be bigger than or equal to 1.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Get currency
     *
     * @return bool
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Set currency
     *
     * @param bool $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Reepay\Model\CreateCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Set customer
     *
     * @param \Reepay\Model\CreateCustomer $customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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
     * Get ordertext
     *
     * @return string
     */
    public function getOrdertext()
    {
        return $this->container['ordertext'];
    }

    /**
     * Set ordertext
     *
     * @param string $ordertext
     *
     * @return $this
     */
    public function setOrdertext($ordertext)
    {
        $this->container['ordertext'] = $ordertext;

        return $this;
    }

    /**
     * Get orderLines
     *
     * @return string
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Set orderLines
     *
     * @param string $orderLines
     *
     * @return $this
     */
    public function setOrderLines($orderLines)
    {
        $this->container['order_lines'] = $orderLines;

        return $this;
    }

    /**
     * Get customerHandle
     *
     * @return string
     */
    public function getCustomerHandle()
    {
        return $this->container['customer_handle'];
    }

    /**
     * Set customerHandle
     *
     * @param string $customerHandle
     *
     * @return $this
     */
    public function setCustomerHandle($customerHandle)
    {
        $this->container['customer_handle'] = $customerHandle;

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
