<?php
/**
 * OrderLine
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
 * OrderLine Class Doc Comment
 *
 * @category Class
 * @description Order lines for charge
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'ordertext' => 'string',
        'amount' => 'int',
        'vat' => 'float',
        'quantity' => 'int',
        'origin' => 'string',
        'timestamp' => '\DateTime',
        'discounted_amount' => 'int',
        'amount_vat' => 'int',
        'amount_ex_vat' => 'int',
        'unit_amount' => 'int',
        'unit_amount_vat' => 'int',
        'unit_amount_ex_vat' => 'int',
        'amount_defined_incl_vat' => 'bool',
        'origin_handle' => 'string',
        'period_from' => '\DateTime',
        'period_to' => '\DateTime',
        'discount_percentage' => 'int',
        'discounted_order_line' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'ordertext' => null,
        'amount' => 'int32',
        'vat' => 'float',
        'quantity' => 'int32',
        'origin' => null,
        'timestamp' => 'date-time',
        'discounted_amount' => 'int32',
        'amount_vat' => 'int32',
        'amount_ex_vat' => 'int32',
        'unit_amount' => 'int32',
        'unit_amount_vat' => 'int32',
        'unit_amount_ex_vat' => 'int32',
        'amount_defined_incl_vat' => null,
        'origin_handle' => null,
        'period_from' => 'date-time',
        'period_to' => 'date-time',
        'discount_percentage' => 'int32',
        'discounted_order_line' => null
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
        'id' => 'id',
        'ordertext' => 'ordertext',
        'amount' => 'amount',
        'vat' => 'vat',
        'quantity' => 'quantity',
        'origin' => 'origin',
        'timestamp' => 'timestamp',
        'discounted_amount' => 'discounted_amount',
        'amount_vat' => 'amount_vat',
        'amount_ex_vat' => 'amount_ex_vat',
        'unit_amount' => 'unit_amount',
        'unit_amount_vat' => 'unit_amount_vat',
        'unit_amount_ex_vat' => 'unit_amount_ex_vat',
        'amount_defined_incl_vat' => 'amount_defined_incl_vat',
        'origin_handle' => 'origin_handle',
        'period_from' => 'period_from',
        'period_to' => 'period_to',
        'discount_percentage' => 'discount_percentage',
        'discounted_order_line' => 'discounted_order_line'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'ordertext' => 'setOrdertext',
        'amount' => 'setAmount',
        'vat' => 'setVat',
        'quantity' => 'setQuantity',
        'origin' => 'setOrigin',
        'timestamp' => 'setTimestamp',
        'discounted_amount' => 'setDiscountedAmount',
        'amount_vat' => 'setAmountVat',
        'amount_ex_vat' => 'setAmountExVat',
        'unit_amount' => 'setUnitAmount',
        'unit_amount_vat' => 'setUnitAmountVat',
        'unit_amount_ex_vat' => 'setUnitAmountExVat',
        'amount_defined_incl_vat' => 'setAmountDefinedInclVat',
        'origin_handle' => 'setOriginHandle',
        'period_from' => 'setPeriodFrom',
        'period_to' => 'setPeriodTo',
        'discount_percentage' => 'setDiscountPercentage',
        'discounted_order_line' => 'setDiscountedOrderLine'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'ordertext' => 'getOrdertext',
        'amount' => 'getAmount',
        'vat' => 'getVat',
        'quantity' => 'getQuantity',
        'origin' => 'getOrigin',
        'timestamp' => 'getTimestamp',
        'discounted_amount' => 'getDiscountedAmount',
        'amount_vat' => 'getAmountVat',
        'amount_ex_vat' => 'getAmountExVat',
        'unit_amount' => 'getUnitAmount',
        'unit_amount_vat' => 'getUnitAmountVat',
        'unit_amount_ex_vat' => 'getUnitAmountExVat',
        'amount_defined_incl_vat' => 'getAmountDefinedInclVat',
        'origin_handle' => 'getOriginHandle',
        'period_from' => 'getPeriodFrom',
        'period_to' => 'getPeriodTo',
        'discount_percentage' => 'getDiscountPercentage',
        'discounted_order_line' => 'getDiscountedOrderLine'
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

    const ORIGIN_PLAN = 'plan';
    const ORIGIN_ADD_ON = 'add_on';
    const ORIGIN_ONDEMAND = 'ondemand';
    const ORIGIN_ADDITIONAL_COST = 'additional_cost';
    const ORIGIN_CREDIT = 'credit';
    const ORIGIN_DISCOUNT = 'discount';
    const ORIGIN_SETUP_FEE = 'setup_fee';
    const ORIGIN_SURCHARGE_FEE = 'surcharge_fee';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_PLAN,
            self::ORIGIN_ADD_ON,
            self::ORIGIN_ONDEMAND,
            self::ORIGIN_ADDITIONAL_COST,
            self::ORIGIN_CREDIT,
            self::ORIGIN_DISCOUNT,
            self::ORIGIN_SETUP_FEE,
            self::ORIGIN_SURCHARGE_FEE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ordertext'] = isset($data['ordertext']) ? $data['ordertext'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['discounted_amount'] = isset($data['discounted_amount']) ? $data['discounted_amount'] : null;
        $this->container['amount_vat'] = isset($data['amount_vat']) ? $data['amount_vat'] : null;
        $this->container['amount_ex_vat'] = isset($data['amount_ex_vat']) ? $data['amount_ex_vat'] : null;
        $this->container['unit_amount'] = isset($data['unit_amount']) ? $data['unit_amount'] : null;
        $this->container['unit_amount_vat'] = isset($data['unit_amount_vat']) ? $data['unit_amount_vat'] : null;
        $this->container['unit_amount_ex_vat'] = isset($data['unit_amount_ex_vat']) ? $data['unit_amount_ex_vat'] : null;
        $this->container['amount_defined_incl_vat'] = isset($data['amount_defined_incl_vat']) ? $data['amount_defined_incl_vat'] : null;
        $this->container['origin_handle'] = isset($data['origin_handle']) ? $data['origin_handle'] : null;
        $this->container['period_from'] = isset($data['period_from']) ? $data['period_from'] : null;
        $this->container['period_to'] = isset($data['period_to']) ? $data['period_to'] : null;
        $this->container['discount_percentage'] = isset($data['discount_percentage']) ? $data['discount_percentage'] : null;
        $this->container['discounted_order_line'] = isset($data['discounted_order_line']) ? $data['discounted_order_line'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['ordertext'] === null) {
            $invalidProperties[] = "'ordertext' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['origin'] === null) {
            $invalidProperties[] = "'origin' can't be null";
        }
        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'origin', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['amount_vat'] === null) {
            $invalidProperties[] = "'amount_vat' can't be null";
        }
        if ($this->container['amount_ex_vat'] === null) {
            $invalidProperties[] = "'amount_ex_vat' can't be null";
        }
        if ($this->container['unit_amount'] === null) {
            $invalidProperties[] = "'unit_amount' can't be null";
        }
        if ($this->container['unit_amount_vat'] === null) {
            $invalidProperties[] = "'unit_amount_vat' can't be null";
        }
        if ($this->container['unit_amount_ex_vat'] === null) {
            $invalidProperties[] = "'unit_amount_ex_vat' can't be null";
        }
        if ($this->container['amount_defined_incl_vat'] === null) {
            $invalidProperties[] = "'amount_defined_incl_vat' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Per account unique order line id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ordertext
     *
     * @return string
     */
    public function getOrdertext()
    {
        return $this->container['ordertext'];
    }

    /**
     * Sets ordertext
     *
     * @param string $ordertext Order line text
     *
     * @return $this
     */
    public function setOrdertext($ordertext)
    {
        $this->container['ordertext'] = $ordertext;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Order line total amount including vat
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param float $vat Order line vat percent
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Order line quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string $origin Order line origin, one of the following: `plan`, `add_on`, `ondemand`, `additional_cost`, `credit`, `discount`, `setup_fee`, `surcharge_fee`
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $allowedValues = $this->getOriginAllowableValues();
        if (!in_array($origin, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'origin', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp Timestamp from order line origin, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets discounted_amount
     *
     * @return int
     */
    public function getDiscountedAmount()
    {
        return $this->container['discounted_amount'];
    }

    /**
     * Sets discounted_amount
     *
     * @param int $discounted_amount Order line amount after potential discount has been deducted
     *
     * @return $this
     */
    public function setDiscountedAmount($discounted_amount)
    {
        $this->container['discounted_amount'] = $discounted_amount;

        return $this;
    }

    /**
     * Gets amount_vat
     *
     * @return int
     */
    public function getAmountVat()
    {
        return $this->container['amount_vat'];
    }

    /**
     * Sets amount_vat
     *
     * @param int $amount_vat Order line total vat amount
     *
     * @return $this
     */
    public function setAmountVat($amount_vat)
    {
        $this->container['amount_vat'] = $amount_vat;

        return $this;
    }

    /**
     * Gets amount_ex_vat
     *
     * @return int
     */
    public function getAmountExVat()
    {
        return $this->container['amount_ex_vat'];
    }

    /**
     * Sets amount_ex_vat
     *
     * @param int $amount_ex_vat Order line total amount without vat
     *
     * @return $this
     */
    public function setAmountExVat($amount_ex_vat)
    {
        $this->container['amount_ex_vat'] = $amount_ex_vat;

        return $this;
    }

    /**
     * Gets unit_amount
     *
     * @return int
     */
    public function getUnitAmount()
    {
        return $this->container['unit_amount'];
    }

    /**
     * Sets unit_amount
     *
     * @param int $unit_amount Order line unit amount including vat
     *
     * @return $this
     */
    public function setUnitAmount($unit_amount)
    {
        $this->container['unit_amount'] = $unit_amount;

        return $this;
    }

    /**
     * Gets unit_amount_vat
     *
     * @return int
     */
    public function getUnitAmountVat()
    {
        return $this->container['unit_amount_vat'];
    }

    /**
     * Sets unit_amount_vat
     *
     * @param int $unit_amount_vat Order line unit vat amount
     *
     * @return $this
     */
    public function setUnitAmountVat($unit_amount_vat)
    {
        $this->container['unit_amount_vat'] = $unit_amount_vat;

        return $this;
    }

    /**
     * Gets unit_amount_ex_vat
     *
     * @return int
     */
    public function getUnitAmountExVat()
    {
        return $this->container['unit_amount_ex_vat'];
    }

    /**
     * Sets unit_amount_ex_vat
     *
     * @param int $unit_amount_ex_vat Order line unit amount without vat
     *
     * @return $this
     */
    public function setUnitAmountExVat($unit_amount_ex_vat)
    {
        $this->container['unit_amount_ex_vat'] = $unit_amount_ex_vat;

        return $this;
    }

    /**
     * Gets amount_defined_incl_vat
     *
     * @return bool
     */
    public function getAmountDefinedInclVat()
    {
        return $this->container['amount_defined_incl_vat'];
    }

    /**
     * Sets amount_defined_incl_vat
     *
     * @param bool $amount_defined_incl_vat Whether the amount was defined including VAT. E.g. plan amount defined including VAT.
     *
     * @return $this
     */
    public function setAmountDefinedInclVat($amount_defined_incl_vat)
    {
        $this->container['amount_defined_incl_vat'] = $amount_defined_incl_vat;

        return $this;
    }

    /**
     * Gets origin_handle
     *
     * @return string
     */
    public function getOriginHandle()
    {
        return $this->container['origin_handle'];
    }

    /**
     * Sets origin_handle
     *
     * @param string $origin_handle Handle for additional cost, credit, plan or subscription discount in the case one of those are the origin
     *
     * @return $this
     */
    public function setOriginHandle($origin_handle)
    {
        $this->container['origin_handle'] = $origin_handle;

        return $this;
    }

    /**
     * Gets period_from
     *
     * @return \DateTime
     */
    public function getPeriodFrom()
    {
        return $this->container['period_from'];
    }

    /**
     * Sets period_from
     *
     * @param \DateTime $period_from The start of billing period if the order line is a plan order line for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setPeriodFrom($period_from)
    {
        $this->container['period_from'] = $period_from;

        return $this;
    }

    /**
     * Gets period_to
     *
     * @return \DateTime
     */
    public function getPeriodTo()
    {
        return $this->container['period_to'];
    }

    /**
     * Sets period_to
     *
     * @param \DateTime $period_to The end of billing period if the order line is a plan order line for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     *
     * @return $this
     */
    public function setPeriodTo($period_to)
    {
        $this->container['period_to'] = $period_to;

        return $this;
    }

    /**
     * Gets discount_percentage
     *
     * @return int
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     *
     * @param int $discount_percentage The discount percentage for discount order lines that has a percentage discount
     *
     * @return $this
     */
    public function setDiscountPercentage($discount_percentage)
    {
        $this->container['discount_percentage'] = $discount_percentage;

        return $this;
    }

    /**
     * Gets discounted_order_line
     *
     * @return string
     */
    public function getDiscountedOrderLine()
    {
        return $this->container['discounted_order_line'];
    }

    /**
     * Sets discounted_order_line
     *
     * @param string $discounted_order_line For discount order lines a reference to the order line for which the order line is a discount
     *
     * @return $this
     */
    public function setDiscountedOrderLine($discounted_order_line)
    {
        $this->container['discounted_order_line'] = $discounted_order_line;

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
