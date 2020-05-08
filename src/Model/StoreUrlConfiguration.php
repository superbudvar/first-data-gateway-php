<?php
/**
 * StoreUrlConfiguration
 *
 * PHP version 5
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway API Specification.
 *
 * The documentation here is designed to provide all of the technical guidance required to consume and integrate with our APIs for payment processing. To learn more about our APIs please visit https://docs.firstdata.com/org/gateway.
 *
 * OpenAPI spec version: 6.10.1.20200226.002
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Model;

use \ArrayAccess;
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * StoreUrlConfiguration Class Doc Comment
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StoreUrlConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StoreUrlConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'transactionNotificationUrl' => 'string',
        'recurringTransactionNotificationUrl' => 'string',
        'responseSuccessUrl' => 'string',
        'responseFailureUrl' => 'string',
        'skipResultPageForSuccess' => 'bool',
        'skipResultPageForFailure' => 'bool',
        'overwriteUrlAllowed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'transactionNotificationUrl' => null,
        'recurringTransactionNotificationUrl' => null,
        'responseSuccessUrl' => null,
        'responseFailureUrl' => null,
        'skipResultPageForSuccess' => null,
        'skipResultPageForFailure' => null,
        'overwriteUrlAllowed' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'transactionNotificationUrl' => 'transactionNotificationUrl',
        'recurringTransactionNotificationUrl' => 'recurringTransactionNotificationUrl',
        'responseSuccessUrl' => 'responseSuccessUrl',
        'responseFailureUrl' => 'responseFailureUrl',
        'skipResultPageForSuccess' => 'skipResultPageForSuccess',
        'skipResultPageForFailure' => 'skipResultPageForFailure',
        'overwriteUrlAllowed' => 'overwriteUrlAllowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'transactionNotificationUrl' => 'setTransactionNotificationUrl',
        'recurringTransactionNotificationUrl' => 'setRecurringTransactionNotificationUrl',
        'responseSuccessUrl' => 'setResponseSuccessUrl',
        'responseFailureUrl' => 'setResponseFailureUrl',
        'skipResultPageForSuccess' => 'setSkipResultPageForSuccess',
        'skipResultPageForFailure' => 'setSkipResultPageForFailure',
        'overwriteUrlAllowed' => 'setOverwriteUrlAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'transactionNotificationUrl' => 'getTransactionNotificationUrl',
        'recurringTransactionNotificationUrl' => 'getRecurringTransactionNotificationUrl',
        'responseSuccessUrl' => 'getResponseSuccessUrl',
        'responseFailureUrl' => 'getResponseFailureUrl',
        'skipResultPageForSuccess' => 'getSkipResultPageForSuccess',
        'skipResultPageForFailure' => 'getSkipResultPageForFailure',
        'overwriteUrlAllowed' => 'getOverwriteUrlAllowed'
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
        return self::$openAPIModelName;
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
        $this->container['transactionNotificationUrl'] = isset($data['transactionNotificationUrl']) ? $data['transactionNotificationUrl'] : null;
        $this->container['recurringTransactionNotificationUrl'] = isset($data['recurringTransactionNotificationUrl']) ? $data['recurringTransactionNotificationUrl'] : null;
        $this->container['responseSuccessUrl'] = isset($data['responseSuccessUrl']) ? $data['responseSuccessUrl'] : null;
        $this->container['responseFailureUrl'] = isset($data['responseFailureUrl']) ? $data['responseFailureUrl'] : null;
        $this->container['skipResultPageForSuccess'] = isset($data['skipResultPageForSuccess']) ? $data['skipResultPageForSuccess'] : null;
        $this->container['skipResultPageForFailure'] = isset($data['skipResultPageForFailure']) ? $data['skipResultPageForFailure'] : null;
        $this->container['overwriteUrlAllowed'] = isset($data['overwriteUrlAllowed']) ? $data['overwriteUrlAllowed'] : null;
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
     * @param string $id An optional outlet id for clients that support multiple stores in the same developer app.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets transactionNotificationUrl
     *
     * @return string|null
     */
    public function getTransactionNotificationUrl()
    {
        return $this->container['transactionNotificationUrl'];
    }

    /**
     * Sets transactionNotificationUrl
     *
     * @param string|null $transactionNotificationUrl Transaction notification URL for Connect.
     *
     * @return $this
     */
    public function setTransactionNotificationUrl($transactionNotificationUrl)
    {
        $this->container['transactionNotificationUrl'] = $transactionNotificationUrl;

        return $this;
    }

    /**
     * Gets recurringTransactionNotificationUrl
     *
     * @return string|null
     */
    public function getRecurringTransactionNotificationUrl()
    {
        return $this->container['recurringTransactionNotificationUrl'];
    }

    /**
     * Sets recurringTransactionNotificationUrl
     *
     * @param string|null $recurringTransactionNotificationUrl Recurring transaction notification URL for recurring payments.
     *
     * @return $this
     */
    public function setRecurringTransactionNotificationUrl($recurringTransactionNotificationUrl)
    {
        $this->container['recurringTransactionNotificationUrl'] = $recurringTransactionNotificationUrl;

        return $this;
    }

    /**
     * Gets responseSuccessUrl
     *
     * @return string|null
     */
    public function getResponseSuccessUrl()
    {
        return $this->container['responseSuccessUrl'];
    }

    /**
     * Sets responseSuccessUrl
     *
     * @param string|null $responseSuccessUrl Response success URL for Connect.
     *
     * @return $this
     */
    public function setResponseSuccessUrl($responseSuccessUrl)
    {
        $this->container['responseSuccessUrl'] = $responseSuccessUrl;

        return $this;
    }

    /**
     * Gets responseFailureUrl
     *
     * @return string|null
     */
    public function getResponseFailureUrl()
    {
        return $this->container['responseFailureUrl'];
    }

    /**
     * Sets responseFailureUrl
     *
     * @param string|null $responseFailureUrl Response failure URL for Connect.
     *
     * @return $this
     */
    public function setResponseFailureUrl($responseFailureUrl)
    {
        $this->container['responseFailureUrl'] = $responseFailureUrl;

        return $this;
    }

    /**
     * Gets skipResultPageForSuccess
     *
     * @return bool|null
     */
    public function getSkipResultPageForSuccess()
    {
        return $this->container['skipResultPageForSuccess'];
    }

    /**
     * Sets skipResultPageForSuccess
     *
     * @param bool|null $skipResultPageForSuccess Skip connect result page when transaction is approved.
     *
     * @return $this
     */
    public function setSkipResultPageForSuccess($skipResultPageForSuccess)
    {
        $this->container['skipResultPageForSuccess'] = $skipResultPageForSuccess;

        return $this;
    }

    /**
     * Gets skipResultPageForFailure
     *
     * @return bool|null
     */
    public function getSkipResultPageForFailure()
    {
        return $this->container['skipResultPageForFailure'];
    }

    /**
     * Sets skipResultPageForFailure
     *
     * @param bool|null $skipResultPageForFailure Skip connect result page when transaction is not approved.
     *
     * @return $this
     */
    public function setSkipResultPageForFailure($skipResultPageForFailure)
    {
        $this->container['skipResultPageForFailure'] = $skipResultPageForFailure;

        return $this;
    }

    /**
     * Gets overwriteUrlAllowed
     *
     * @return bool|null
     */
    public function getOverwriteUrlAllowed()
    {
        return $this->container['overwriteUrlAllowed'];
    }

    /**
     * Sets overwriteUrlAllowed
     *
     * @param bool|null $overwriteUrlAllowed Overwrite URLs in database by those from request.
     *
     * @return $this
     */
    public function setOverwriteUrlAllowed($overwriteUrlAllowed)
    {
        $this->container['overwriteUrlAllowed'] = $overwriteUrlAllowed;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


