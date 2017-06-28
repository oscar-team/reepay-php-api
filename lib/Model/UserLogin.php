<?php
/**
 * UserLogin
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
 * UserLogin Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserLogin implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserLogin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'token' => 'string',
        'user' => '\Swagger\Client\Model\InlineResponse2009User',
        'account' => '\Swagger\Client\Model\InlineResponse2009Account',
        'organisation' => '\Swagger\Client\Model\InlineResponse2009Organisation',
        'organisations' => '\Swagger\Client\Model\InlineResponse2009Organisations[]',
        'groups' => 'string[]',
        'permissions' => 'string[]',
        'token_ttl' => 'int'
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
        'token' => 'token',
        'user' => 'user',
        'account' => 'account',
        'organisation' => 'organisation',
        'organisations' => 'organisations',
        'groups' => 'groups',
        'permissions' => 'permissions',
        'token_ttl' => 'token_ttl'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'token' => 'setToken',
        'user' => 'setUser',
        'account' => 'setAccount',
        'organisation' => 'setOrganisation',
        'organisations' => 'setOrganisations',
        'groups' => 'setGroups',
        'permissions' => 'setPermissions',
        'token_ttl' => 'setTokenTtl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'token' => 'getToken',
        'user' => 'getUser',
        'account' => 'getAccount',
        'organisation' => 'getOrganisation',
        'organisations' => 'getOrganisations',
        'groups' => 'getGroups',
        'permissions' => 'getPermissions',
        'token_ttl' => 'getTokenTtl'
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
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['organisation'] = isset($data['organisation']) ? $data['organisation'] : null;
        $this->container['organisations'] = isset($data['organisations']) ? $data['organisations'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['token_ttl'] = isset($data['token_ttl']) ? $data['token_ttl'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['token'] === null) {
            $invalid_properties[] = "'token' can't be null";
        }
        if ($this->container['organisations'] === null) {
            $invalid_properties[] = "'organisations' can't be null";
        }
        if ($this->container['groups'] === null) {
            $invalid_properties[] = "'groups' can't be null";
        }
        if ($this->container['permissions'] === null) {
            $invalid_properties[] = "'permissions' can't be null";
        }
        if ($this->container['token_ttl'] === null) {
            $invalid_properties[] = "'token_ttl' can't be null";
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

        if ($this->container['token'] === null) {
            return false;
        }
        if ($this->container['organisations'] === null) {
            return false;
        }
        if ($this->container['groups'] === null) {
            return false;
        }
        if ($this->container['permissions'] === null) {
            return false;
        }
        if ($this->container['token_ttl'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token Authentication token to use in X-Auth-Token
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets user
     * @return \Swagger\Client\Model\InlineResponse2009User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param \Swagger\Client\Model\InlineResponse2009User $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets account
     * @return \Swagger\Client\Model\InlineResponse2009Account
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     * @param \Swagger\Client\Model\InlineResponse2009Account $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets organisation
     * @return \Swagger\Client\Model\InlineResponse2009Organisation
     */
    public function getOrganisation()
    {
        return $this->container['organisation'];
    }

    /**
     * Sets organisation
     * @param \Swagger\Client\Model\InlineResponse2009Organisation $organisation
     * @return $this
     */
    public function setOrganisation($organisation)
    {
        $this->container['organisation'] = $organisation;

        return $this;
    }

    /**
     * Gets organisations
     * @return \Swagger\Client\Model\InlineResponse2009Organisations[]
     */
    public function getOrganisations()
    {
        return $this->container['organisations'];
    }

    /**
     * Sets organisations
     * @param \Swagger\Client\Model\InlineResponse2009Organisations[] $organisations List of organisations for user
     * @return $this
     */
    public function setOrganisations($organisations)
    {
        $this->container['organisations'] = $organisations;

        return $this;
    }

    /**
     * Gets groups
     * @return string[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     * @param string[] $groups List user groups
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets permissions
     * @return string[]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     * @param string[] $permissions List user permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets token_ttl
     * @return int
     */
    public function getTokenTtl()
    {
        return $this->container['token_ttl'];
    }

    /**
     * Sets token_ttl
     * @param int $token_ttl Token time-to-live in minutes
     * @return $this
     */
    public function setTokenTtl($token_ttl)
    {
        $this->container['token_ttl'] = $token_ttl;

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


