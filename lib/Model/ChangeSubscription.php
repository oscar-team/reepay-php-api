<?php
/**
 * ChangeSubscription
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
 * ChangeSubscription Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChangeSubscription implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ChangeSubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'timing' => 'string',
        'plan' => 'string',
        'amount' => 'int',
        'quantity' => 'int',
        'billing' => 'string',
        'amount_incl_vat' => 'bool',
        'compensation_method' => 'string',
        'partial_period_handling' => 'string',
        'start_date' => 'string',
        'cancel_change' => 'bool',
        'add_ons' => '\Swagger\Client\Model\V1subscriptionhandleAddOns[]',
        'remove_add_ons' => 'string[]'
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
        'timing' => 'timing',
        'plan' => 'plan',
        'amount' => 'amount',
        'quantity' => 'quantity',
        'billing' => 'billing',
        'amount_incl_vat' => 'amount_incl_vat',
        'compensation_method' => 'compensation_method',
        'partial_period_handling' => 'partial_period_handling',
        'start_date' => 'start_date',
        'cancel_change' => 'cancel_change',
        'add_ons' => 'add_ons',
        'remove_add_ons' => 'remove_add_ons'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'timing' => 'setTiming',
        'plan' => 'setPlan',
        'amount' => 'setAmount',
        'quantity' => 'setQuantity',
        'billing' => 'setBilling',
        'amount_incl_vat' => 'setAmountInclVat',
        'compensation_method' => 'setCompensationMethod',
        'partial_period_handling' => 'setPartialPeriodHandling',
        'start_date' => 'setStartDate',
        'cancel_change' => 'setCancelChange',
        'add_ons' => 'setAddOns',
        'remove_add_ons' => 'setRemoveAddOns'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'timing' => 'getTiming',
        'plan' => 'getPlan',
        'amount' => 'getAmount',
        'quantity' => 'getQuantity',
        'billing' => 'getBilling',
        'amount_incl_vat' => 'getAmountInclVat',
        'compensation_method' => 'getCompensationMethod',
        'partial_period_handling' => 'getPartialPeriodHandling',
        'start_date' => 'getStartDate',
        'cancel_change' => 'getCancelChange',
        'add_ons' => 'getAddOns',
        'remove_add_ons' => 'getRemoveAddOns'
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

    const TIMING_IMMEDIATE = 'immediate';
    const TIMING_RENEWAL = 'renewal';
    const BILLING_PRORATED = 'prorated';
    const BILLING_FULL = 'full';
    const BILLING_ZERO_AMOUNT = 'zero_amount';
    const BILLING_NONE = 'none';
    const COMPENSATION_METHOD_FULL_REFUND = 'full_refund';
    const COMPENSATION_METHOD_PRORATED_REFUND = 'prorated_refund';
    const COMPENSATION_METHOD_NONE = 'none';
    const PARTIAL_PERIOD_HANDLING_BILL_FULL = 'bill_full';
    const PARTIAL_PERIOD_HANDLING_BILL_PRORATED = 'bill_prorated';
    const PARTIAL_PERIOD_HANDLING_BILL_ZERO_AMOUNT = 'bill_zero_amount';
    const PARTIAL_PERIOD_HANDLING_NO_BILL = 'no_bill';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTimingAllowableValues()
    {
        return [
            self::TIMING_IMMEDIATE,
            self::TIMING_RENEWAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getBillingAllowableValues()
    {
        return [
            self::BILLING_PRORATED,
            self::BILLING_FULL,
            self::BILLING_ZERO_AMOUNT,
            self::BILLING_NONE,
        ];
    }
    
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
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPartialPeriodHandlingAllowableValues()
    {
        return [
            self::PARTIAL_PERIOD_HANDLING_BILL_FULL,
            self::PARTIAL_PERIOD_HANDLING_BILL_PRORATED,
            self::PARTIAL_PERIOD_HANDLING_BILL_ZERO_AMOUNT,
            self::PARTIAL_PERIOD_HANDLING_NO_BILL,
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
        $this->container['timing'] = isset($data['timing']) ? $data['timing'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['amount_incl_vat'] = isset($data['amount_incl_vat']) ? $data['amount_incl_vat'] : null;
        $this->container['compensation_method'] = isset($data['compensation_method']) ? $data['compensation_method'] : null;
        $this->container['partial_period_handling'] = isset($data['partial_period_handling']) ? $data['partial_period_handling'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['cancel_change'] = isset($data['cancel_change']) ? $data['cancel_change'] : null;
        $this->container['add_ons'] = isset($data['add_ons']) ? $data['add_ons'] : null;
        $this->container['remove_add_ons'] = isset($data['remove_add_ons']) ? $data['remove_add_ons'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['timing'] === null) {
            $invalid_properties[] = "'timing' can't be null";
        }
        $allowed_values = ["immediate", "renewal"];
        if (!in_array($this->container['timing'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'timing', must be one of 'immediate', 'renewal'.";
        }

        if (!is_null($this->container['amount']) && ($this->container['amount'] < 0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1)) {
            $invalid_properties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        $allowed_values = ["prorated", "full", "zero_amount", "none"];
        if (!in_array($this->container['billing'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'billing', must be one of 'prorated', 'full', 'zero_amount', 'none'.";
        }

        $allowed_values = ["full_refund", "prorated_refund", "none"];
        if (!in_array($this->container['compensation_method'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'compensation_method', must be one of 'full_refund', 'prorated_refund', 'none'.";
        }

        $allowed_values = ["bill_full", "bill_prorated", "bill_zero_amount", "no_bill"];
        if (!in_array($this->container['partial_period_handling'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'partial_period_handling', must be one of 'bill_full', 'bill_prorated', 'bill_zero_amount', 'no_bill'.";
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

        if ($this->container['timing'] === null) {
            return false;
        }
        $allowed_values = ["immediate", "renewal"];
        if (!in_array($this->container['timing'], $allowed_values)) {
            return false;
        }
        if ($this->container['amount'] < 0) {
            return false;
        }
        if ($this->container['quantity'] < 1) {
            return false;
        }
        $allowed_values = ["prorated", "full", "zero_amount", "none"];
        if (!in_array($this->container['billing'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["full_refund", "prorated_refund", "none"];
        if (!in_array($this->container['compensation_method'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["bill_full", "bill_prorated", "bill_zero_amount", "no_bill"];
        if (!in_array($this->container['partial_period_handling'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets timing
     * @return string
     */
    public function getTiming()
    {
        return $this->container['timing'];
    }

    /**
     * Sets timing
     * @param string $timing When to perform the subscription change. Either `immediate` or `renewal`.
     * @return $this
     */
    public function setTiming($timing)
    {
        $allowed_values = array('immediate', 'renewal');
        if ((!in_array($timing, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'timing', must be one of 'immediate', 'renewal'");
        }
        $this->container['timing'] = $timing;

        return $this;
    }

    /**
     * Gets plan
     * @return string
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     * @param string $plan The handle of the plan to change to
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

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
     * @param int $amount Optional custom per quantity plan price. If provided the plan price billed for each billing period will be overridden by this price.
     * @return $this
     */
    public function setAmount($amount)
    {

        if (!is_null($amount) && ($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling ChangeSubscription., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity Optional quantity of the plan product for this subscription. If not provided the default is the default plan quantity defined for the plan.
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if (!is_null($quantity) && ($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling ChangeSubscription., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets billing
     * @return string
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     * @param string $billing In the case of immediate change and change not affecting billing period, how to bill for the remaining partial period. Either `prorated`, `full`, `zero_amount` or `none`. The default is `prorated`.
     * @return $this
     */
    public function setBilling($billing)
    {
        $allowed_values = array('prorated', 'full', 'zero_amount', 'none');
        if (!is_null($billing) && (!in_array($billing, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'billing', must be one of 'prorated', 'full', 'zero_amount', 'none'");
        }
        $this->container['billing'] = $billing;

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
     * @param bool $amount_incl_vat Whether the optional amount is including VAT. Defaults to true.
     * @return $this
     */
    public function setAmountInclVat($amount_incl_vat)
    {
        $this->container['amount_incl_vat'] = $amount_incl_vat;

        return $this;
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
     * @param string $compensation_method In the case of immediate change, optional method for compensation of partial period, either `full_refund`, `prorated_refund` or `none`. Default is prorated_refund
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
     * Gets partial_period_handling
     * @return string
     */
    public function getPartialPeriodHandling()
    {
        return $this->container['partial_period_handling'];
    }

    /**
     * Sets partial_period_handling
     * @param string $partial_period_handling Optional argument to override plan setting on how to handle a potential initial partial billing period for fixed day scheduling. The options are to bill for a full period, bill prorated for the partial period, bill a zero amount, or not to consider the period before first fixed day a billing period. The default is to bill prorated. Options: `bill_full`, `bill_prorated`, `bill_zero_amount`, `no_bill`.
     * @return $this
     */
    public function setPartialPeriodHandling($partial_period_handling)
    {
        $allowed_values = array('bill_full', 'bill_prorated', 'bill_zero_amount', 'no_bill');
        if (!is_null($partial_period_handling) && (!in_array($partial_period_handling, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'partial_period_handling', must be one of 'bill_full', 'bill_prorated', 'bill_zero_amount', 'no_bill'");
        }
        $this->container['partial_period_handling'] = $partial_period_handling;

        return $this;
    }

    /**
     * Gets start_date
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param string $start_date If the subscription change results in a new period due to change to a plan with different scheduling, an optional date and time from which the subscription is eligible to schedule first invoice can be given. See subscription create and subscription reactivate argument `start_date`.
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets cancel_change
     * @return bool
     */
    public function getCancelChange()
    {
        return $this->container['cancel_change'];
    }

    /**
     * Sets cancel_change
     * @param bool $cancel_change If there are pending changes at renewal for the subscription they can be cancelled using this argument and timing=renewal
     * @return $this
     */
    public function setCancelChange($cancel_change)
    {
        $this->container['cancel_change'] = $cancel_change;

        return $this;
    }

    /**
     * Gets add_ons
     * @return \Swagger\Client\Model\V1subscriptionhandleAddOns[]
     */
    public function getAddOns()
    {
        return $this->container['add_ons'];
    }

    /**
     * Sets add_ons
     * @param \Swagger\Client\Model\V1subscriptionhandleAddOns[] $add_ons Add-ons to attach to subscription
     * @return $this
     */
    public function setAddOns($add_ons)
    {
        $this->container['add_ons'] = $add_ons;

        return $this;
    }

    /**
     * Gets remove_add_ons
     * @return string[]
     */
    public function getRemoveAddOns()
    {
        return $this->container['remove_add_ons'];
    }

    /**
     * Sets remove_add_ons
     * @param string[] $remove_add_ons Subscription add-ons to remove from subscription by subscription add-on handle
     * @return $this
     */
    public function setRemoveAddOns($remove_add_ons)
    {
        $this->container['remove_add_ons'] = $remove_add_ons;

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


