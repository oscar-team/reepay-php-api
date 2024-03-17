<?php
/**
 * UpdateSubscriptionProduct
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
 * UpdateSubscriptionProduct Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateSubscriptionProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateSubscriptionProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'icon' => 'string',
        'name' => 'string',
        'badge' => 'string',
        'description' => 'string',
        'benefits' => 'string[]',
        'field_configurations' => '\Reepay\Model\SignupPageFieldConfiguration[]',
        'is_highlighted' => 'bool',
        'plan_handle' => 'string',
        'configuration' => '\Reepay\Model\CreateSubscription'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'icon' => null,
        'name' => null,
        'badge' => null,
        'description' => null,
        'benefits' => null,
        'field_configurations' => null,
        'is_highlighted' => null,
        'plan_handle' => null,
        'configuration' => null
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
        'icon' => 'icon',
        'name' => 'name',
        'badge' => 'badge',
        'description' => 'description',
        'benefits' => 'benefits',
        'field_configurations' => 'field_configurations',
        'is_highlighted' => 'is_highlighted',
        'plan_handle' => 'plan_handle',
        'configuration' => 'configuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'icon' => 'setIcon',
        'name' => 'setName',
        'badge' => 'setBadge',
        'description' => 'setDescription',
        'benefits' => 'setBenefits',
        'field_configurations' => 'setFieldConfigurations',
        'is_highlighted' => 'setIsHighlighted',
        'plan_handle' => 'setPlanHandle',
        'configuration' => 'setConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'icon' => 'getIcon',
        'name' => 'getName',
        'badge' => 'getBadge',
        'description' => 'getDescription',
        'benefits' => 'getBenefits',
        'field_configurations' => 'getFieldConfigurations',
        'is_highlighted' => 'getIsHighlighted',
        'plan_handle' => 'getPlanHandle',
        'configuration' => 'getConfiguration'
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
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['badge'] = isset($data['badge']) ? $data['badge'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['benefits'] = isset($data['benefits']) ? $data['benefits'] : null;
        $this->container['field_configurations'] = isset($data['field_configurations']) ? $data['field_configurations'] : null;
        $this->container['is_highlighted'] = isset($data['is_highlighted']) ? $data['is_highlighted'] : null;
        $this->container['plan_handle'] = isset($data['plan_handle']) ? $data['plan_handle'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['plan_handle'] === null) {
            $invalidProperties[] = "'plan_handle' can't be null";
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
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon The Subscription product icon follows the scheme: <iconType> <iconName>. The icon type can be either \"solid\", \"regular\" or \"brand\" and the icon name can be anything from FontAwesome library. Example: solid bolt
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Subscription product name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets badge
     *
     * @return string
     */
    public function getBadge()
    {
        return $this->container['badge'];
    }

    /**
     * Sets badge
     *
     * @param string $badge Signup subscription product badge. Examples: 'POPULAR', 'NEW'
     *
     * @return $this
     */
    public function setBadge($badge)
    {
        $this->container['badge'] = $badge;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Signup subscription product description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets benefits
     *
     * @return string[]
     */
    public function getBenefits()
    {
        return $this->container['benefits'];
    }

    /**
     * Sets benefits
     *
     * @param string[] $benefits A list of benefits for a subscription product
     *
     * @return $this
     */
    public function setBenefits($benefits)
    {
        $this->container['benefits'] = $benefits;

        return $this;
    }

    /**
     * Gets field_configurations
     *
     * @return \Reepay\Model\SignupPageFieldConfiguration[]
     */
    public function getFieldConfigurations()
    {
        return $this->container['field_configurations'];
    }

    /**
     * Sets field_configurations
     *
     * @param \Reepay\Model\SignupPageFieldConfiguration[] $field_configurations Field configurations
     *
     * @return $this
     */
    public function setFieldConfigurations($field_configurations)
    {
        $this->container['field_configurations'] = $field_configurations;

        return $this;
    }

    /**
     * Gets is_highlighted
     *
     * @return bool
     */
    public function getIsHighlighted()
    {
        return $this->container['is_highlighted'];
    }

    /**
     * Sets is_highlighted
     *
     * @param bool $is_highlighted A flag for highlighting the visuals of a product
     *
     * @return $this
     */
    public function setIsHighlighted($is_highlighted)
    {
        $this->container['is_highlighted'] = $is_highlighted;

        return $this;
    }

    /**
     * Gets plan_handle
     *
     * @return string
     */
    public function getPlanHandle()
    {
        return $this->container['plan_handle'];
    }

    /**
     * Sets plan_handle
     *
     * @param string $plan_handle Subscription plan
     *
     * @return $this
     */
    public function setPlanHandle($plan_handle)
    {
        $this->container['plan_handle'] = $plan_handle;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \Reepay\Model\CreateSubscription
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \Reepay\Model\CreateSubscription $configuration configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

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
