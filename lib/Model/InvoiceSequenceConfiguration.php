<?php
/**
 * InvoiceSequenceConfiguration
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API
 *
 * REST API to manage Reepay resources
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
 * InvoiceSequenceConfiguration Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceSequenceConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceSequenceConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'prefix' => 'string',
        'placeholder' => 'string',
        'delimiter_after_prefix' => 'string',
        'delimiter_after_placeholder' => 'string',
        'digits_number' => 'int',
        'next_number' => 'int',
        'number_after_reset' => 'int',
        'reset_type' => 'string',
        'credit_note_settings' => '\Reepay\Model\CreditNoteSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'prefix' => null,
        'placeholder' => null,
        'delimiter_after_prefix' => null,
        'delimiter_after_placeholder' => null,
        'digits_number' => 'int32',
        'next_number' => 'int32',
        'number_after_reset' => 'int32',
        'reset_type' => null,
        'credit_note_settings' => null
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
        'prefix' => 'prefix',
        'placeholder' => 'placeholder',
        'delimiter_after_prefix' => 'delimiter_after_prefix',
        'delimiter_after_placeholder' => 'delimiter_after_placeholder',
        'digits_number' => 'digits_number',
        'next_number' => 'next_number',
        'number_after_reset' => 'number_after_reset',
        'reset_type' => 'reset_type',
        'credit_note_settings' => 'credit_note_settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'prefix' => 'setPrefix',
        'placeholder' => 'setPlaceholder',
        'delimiter_after_prefix' => 'setDelimiterAfterPrefix',
        'delimiter_after_placeholder' => 'setDelimiterAfterPlaceholder',
        'digits_number' => 'setDigitsNumber',
        'next_number' => 'setNextNumber',
        'number_after_reset' => 'setNumberAfterReset',
        'reset_type' => 'setResetType',
        'credit_note_settings' => 'setCreditNoteSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'prefix' => 'getPrefix',
        'placeholder' => 'getPlaceholder',
        'delimiter_after_prefix' => 'getDelimiterAfterPrefix',
        'delimiter_after_placeholder' => 'getDelimiterAfterPlaceholder',
        'digits_number' => 'getDigitsNumber',
        'next_number' => 'getNextNumber',
        'number_after_reset' => 'getNumberAfterReset',
        'reset_type' => 'getResetType',
        'credit_note_settings' => 'getCreditNoteSettings'
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
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['placeholder'] = isset($data['placeholder']) ? $data['placeholder'] : null;
        $this->container['delimiter_after_prefix'] = isset($data['delimiter_after_prefix']) ? $data['delimiter_after_prefix'] : null;
        $this->container['delimiter_after_placeholder'] = isset($data['delimiter_after_placeholder']) ? $data['delimiter_after_placeholder'] : null;
        $this->container['digits_number'] = isset($data['digits_number']) ? $data['digits_number'] : null;
        $this->container['next_number'] = isset($data['next_number']) ? $data['next_number'] : null;
        $this->container['number_after_reset'] = isset($data['number_after_reset']) ? $data['number_after_reset'] : null;
        $this->container['reset_type'] = isset($data['reset_type']) ? $data['reset_type'] : null;
        $this->container['credit_note_settings'] = isset($data['credit_note_settings']) ? $data['credit_note_settings'] : null;
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
     * Gets prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string $prefix Prefix of invoice number
     *
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets placeholder
     *
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param string $placeholder Placeholder depicting the invoice reset type interval
     *
     * @return $this
     */
    public function setPlaceholder($placeholder)
    {
        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets delimiter_after_prefix
     *
     * @return string
     */
    public function getDelimiterAfterPrefix()
    {
        return $this->container['delimiter_after_prefix'];
    }

    /**
     * Sets delimiter_after_prefix
     *
     * @param string $delimiter_after_prefix Delimiter between prefix and placeholder
     *
     * @return $this
     */
    public function setDelimiterAfterPrefix($delimiter_after_prefix)
    {
        $this->container['delimiter_after_prefix'] = $delimiter_after_prefix;

        return $this;
    }

    /**
     * Gets delimiter_after_placeholder
     *
     * @return string
     */
    public function getDelimiterAfterPlaceholder()
    {
        return $this->container['delimiter_after_placeholder'];
    }

    /**
     * Sets delimiter_after_placeholder
     *
     * @param string $delimiter_after_placeholder Delimiter between placeholder and number
     *
     * @return $this
     */
    public function setDelimiterAfterPlaceholder($delimiter_after_placeholder)
    {
        $this->container['delimiter_after_placeholder'] = $delimiter_after_placeholder;

        return $this;
    }

    /**
     * Gets digits_number
     *
     * @return int
     */
    public function getDigitsNumber()
    {
        return $this->container['digits_number'];
    }

    /**
     * Sets digits_number
     *
     * @param int $digits_number Number of digits in invoice numbers. If the invoice number contains less digits, the required count of trailing zeros will be added
     *
     * @return $this
     */
    public function setDigitsNumber($digits_number)
    {
        $this->container['digits_number'] = $digits_number;

        return $this;
    }

    /**
     * Gets next_number
     *
     * @return int
     */
    public function getNextNumber()
    {
        return $this->container['next_number'];
    }

    /**
     * Sets next_number
     *
     * @param int $next_number The sequential number of first invoice that will be generated in current period
     *
     * @return $this
     */
    public function setNextNumber($next_number)
    {
        $this->container['next_number'] = $next_number;

        return $this;
    }

    /**
     * Gets number_after_reset
     *
     * @return int
     */
    public function getNumberAfterReset()
    {
        return $this->container['number_after_reset'];
    }

    /**
     * Sets number_after_reset
     *
     * @param int $number_after_reset The sequential number of first invoice that will be generated in all subsequent periods
     *
     * @return $this
     */
    public function setNumberAfterReset($number_after_reset)
    {
        $this->container['number_after_reset'] = $number_after_reset;

        return $this;
    }

    /**
     * Gets reset_type
     *
     * @return string
     */
    public function getResetType()
    {
        return $this->container['reset_type'];
    }

    /**
     * Sets reset_type
     *
     * @param string $reset_type The frequency of resetting invoice numbers
     *
     * @return $this
     */
    public function setResetType($reset_type)
    {
        $this->container['reset_type'] = $reset_type;

        return $this;
    }

    /**
     * Gets credit_note_settings
     *
     * @return \Reepay\Model\CreditNoteSettings
     */
    public function getCreditNoteSettings()
    {
        return $this->container['credit_note_settings'];
    }

    /**
     * Sets credit_note_settings
     *
     * @param \Reepay\Model\CreditNoteSettings $credit_note_settings credit_note_settings
     *
     * @return $this
     */
    public function setCreditNoteSettings($credit_note_settings)
    {
        $this->container['credit_note_settings'] = $credit_note_settings;

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
