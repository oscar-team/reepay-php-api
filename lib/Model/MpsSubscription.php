<?php
namespace Reepay\Model;

use \ArrayAccess;

/**
* Mps Subscription Class Doc Comment
*
* @category    Class
* @package     Reepay
* @author      Swagger Codegen team
* @link        https://github.com/swagger-api/swagger-codegen
*/
class MpsSubscription implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'MpsSubscription';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'string',
        'state' => 'string',
        'customer' => 'string',
        'reference' => 'string',
        'failed' => '\DateTime',
        'created' => '\DateTime',
        'external_id' => 'string',
    ];

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'state' => 'state',
        'customer' => 'customer',
        'reference' => 'reference',
        'failed' => 'failed',
        'created' => 'created',
        'external_id' => 'external_id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'state' => 'setState',
        'customer' => 'setCustomer',
        'reference' => 'setReference',
        'failed' => 'setFailed',
        'created' => 'setCreated',
        'external_id' => 'setExternalId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'state' => 'getState',
        'customer' => 'getCustomer',
        'reference' => 'getReference',
        'failed' => 'getFailed',
        'created' => 'getCreated',
        'external_id' => 'getExternalId',
    ];


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'state' => null,
        'customer' => null,
        'reference' => null,
        'failed' => 'date-time',
        'created' => 'date-time',
        'external_id' => null
    ];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
    }

    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    public function getId()
    {
        return $this->container['id'];
    }

    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    public function getState()
    {
        return $this->container['state'];
    }

    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    public function getCustomer()
    {
        return $this->container['customer'];
    }

    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    public function getReference()
    {
        return $this->container['reference'];
    }

    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    public function getFailed()
    {
        return $this->container['failed'];
    }

    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    public function getCreated()
    {
        return $this->container['created'];
    }

    public function setExternalId($externalId)
    {
        $this->container['external_id'] = $externalId;

        return $this;
    }

    public function getExternalId()
    {
        return $this->container['external_id'];
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

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

}
