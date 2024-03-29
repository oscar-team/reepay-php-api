<?php
/**
 * UserLogin
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
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

namespace Reepay\Model;

use \ArrayAccess;

/**
 * UserLogin Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
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
        'user' => '\Reepay\Model\User',
        'account' => '\Reepay\Model\AccountLogin',
        'organisation' => '\Reepay\Model\Organisation',
        'organisations' => '\Reepay\Model\OrganisationLogin[]',
        'groups' => 'string[]',
        'permissions' => 'string[]',
        'token_ttl' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'token' => null,
        'user' => null,
        'account' => null,
        'organisation' => null,
        'organisations' => null,
        'groups' => null,
        'permissions' => null,
        'token_ttl' => 'int32'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
        if ($this->container['user'] === null) {
            $invalid_properties[] = "'user' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalid_properties[] = "'account' can't be null";
        }
        if ($this->container['organisation'] === null) {
            $invalid_properties[] = "'organisation' can't be null";
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
        if ($this->container['user'] === null) {
            return false;
        }
        if ($this->container['account'] === null) {
            return false;
        }
        if ($this->container['organisation'] === null) {
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
     * @return \Reepay\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param \Reepay\Model\User $user Logged in user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets account
     * @return \Reepay\Model\AccountLogin
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     * @param \Reepay\Model\AccountLogin $account Account logged into
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets organisation
     * @return \Reepay\Model\Organisation
     */
    public function getOrganisation()
    {
        return $this->container['organisation'];
    }

    /**
     * Sets organisation
     * @param \Reepay\Model\Organisation $organisation Organisation for account logged into
     * @return $this
     */
    public function setOrganisation($organisation)
    {
        $this->container['organisation'] = $organisation;

        return $this;
    }

    /**
     * Gets organisations
     * @return \Reepay\Model\OrganisationLogin[]
     */
    public function getOrganisations()
    {
        return $this->container['organisations'];
    }

    /**
     * Sets organisations
     * @param \Reepay\Model\OrganisationLogin[] $organisations List of organisations for user
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

    /**
     * Gets the string presentation of the object
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


