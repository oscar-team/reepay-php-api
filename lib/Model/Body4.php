<?php
/**
 * Body4
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Body4 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Body4 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'body_4';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'amount' => 'int',
        'vat' => 'float',
        'amount_incl_vat' => 'bool',
        'all_plans' => 'bool',
        'eligible_plans' => 'string[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'description' => 'description',
        'amount' => 'amount',
        'vat' => 'vat',
        'amount_incl_vat' => 'amount_incl_vat',
        'all_plans' => 'all_plans',
        'eligible_plans' => 'eligible_plans'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'vat' => 'setVat',
        'amount_incl_vat' => 'setAmountInclVat',
        'all_plans' => 'setAllPlans',
        'eligible_plans' => 'setEligiblePlans'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'vat' => 'getVat',
        'amount_incl_vat' => 'getAmountInclVat',
        'all_plans' => 'getAllPlans',
        'eligible_plans' => 'getEligiblePlans'
    ];

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
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['amount_incl_vat'] = isset($data['amount_incl_vat']) ? $data['amount_incl_vat'] : null;
        $this->container['all_plans'] = isset($data['all_plans']) ? $data['all_plans'] : null;
        $this->container['eligible_plans'] = isset($data['eligible_plans']) ? $data['eligible_plans'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['vat']) && ($this->container['vat'] > 1)) {
            $invalid_properties[] = "invalid value for 'vat', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['vat']) && ($this->container['vat'] < 0)) {
            $invalid_properties[] = "invalid value for 'vat', must be bigger than or equal to 0.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['amount'] < 0) {
            return false;
        }
        if ($this->container['vat'] > 1) {
            return false;
        }
        if ($this->container['vat'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of add-on. Will be used as order line text.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Optional description of add-on
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount Add-on amount
     * @return $this
     */
    public function setAmount($amount)
    {

        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling Body4., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vat
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     * @param float $vat Optional vat for add-on. Account default is used if none given.
     * @return $this
     */
    public function setVat($vat)
    {

        if (!is_null($vat) && ($vat > 1)) {
            throw new \InvalidArgumentException('invalid value for $vat when calling Body4., must be smaller than or equal to 1.');
        }
        if (!is_null($vat) && ($vat < 0)) {
            throw new \InvalidArgumentException('invalid value for $vat when calling Body4., must be bigger than or equal to 0.');
        }

        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets amount_incl_vat
     * @return bool
     */
    public function getAmountInclVat()
    {
        return $this->container['amount_incl_vat'];
    }

    /**
     * Sets amount_incl_vat
     * @param bool $amount_incl_vat Whether the amount is including VAT. Default true.
     * @return $this
     */
    public function setAmountInclVat($amount_incl_vat)
    {
        $this->container['amount_incl_vat'] = $amount_incl_vat;

        return $this;
    }

    /**
     * Gets all_plans
     * @return bool
     */
    public function getAllPlans()
    {
        return $this->container['all_plans'];
    }

    /**
     * Sets all_plans
     * @param bool $all_plans Whether all plans are eligible for this add-on. Defaults to false.
     * @return $this
     */
    public function setAllPlans($all_plans)
    {
        $this->container['all_plans'] = $all_plans;

        return $this;
    }

    /**
     * Gets eligible_plans
     * @return string[]
     */
    public function getEligiblePlans()
    {
        return $this->container['eligible_plans'];
    }

    /**
     * Sets eligible_plans
     * @param string[] $eligible_plans If not `all_plans` are set to true, then the set of eligible plan handles must be defined.
     * @return $this
     */
    public function setEligiblePlans($eligible_plans)
    {
        $this->container['eligible_plans'] = $eligible_plans;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


