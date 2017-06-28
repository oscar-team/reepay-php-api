<?php
/**
 * Body34
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
 * Body34 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Body34 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'body_34';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'compensation_method' => 'string'
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
        'compensation_method' => 'compensation_method'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'compensation_method' => 'setCompensationMethod'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'compensation_method' => 'getCompensationMethod'
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

    const COMPENSATION_METHOD_FULL_REFUND = 'full_refund';
    const COMPENSATION_METHOD_PRORATED_REFUND = 'prorated_refund';
    const COMPENSATION_METHOD_NONE = 'none';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCompensationMethodAllowableValues()
    {
        return [
            self::COMPENSATION_METHOD_FULL_REFUND,
            self::COMPENSATION_METHOD_PRORATED_REFUND,
            self::COMPENSATION_METHOD_NONE,
        ];
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
        $this->container['compensation_method'] = isset($data['compensation_method']) ? $data['compensation_method'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["full_refund", "prorated_refund", "none"];
        if (!in_array($this->container['compensation_method'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'compensation_method', must be one of 'full_refund', 'prorated_refund', 'none'.";
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

        $allowed_values = ["full_refund", "prorated_refund", "none"];
        if (!in_array($this->container['compensation_method'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets compensation_method
     * @return string
     */
    public function getCompensationMethod()
    {
        return $this->container['compensation_method'];
    }

    /**
     * Sets compensation_method
     * @param string $compensation_method Optional method for compensation of partial period, either `full_refund`, `prorated_refund` or `none`
     * @return $this
     */
    public function setCompensationMethod($compensation_method)
    {
        $allowed_values = array('full_refund', 'prorated_refund', 'none');
        if (!is_null($compensation_method) && (!in_array($compensation_method, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'compensation_method', must be one of 'full_refund', 'prorated_refund', 'none'");
        }
        $this->container['compensation_method'] = $compensation_method;

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


