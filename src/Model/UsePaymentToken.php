<?php
/**
 * UsePaymentToken
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
 * OpenAPI spec version: 6.12.0.20200605.001
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
 * UsePaymentToken Class Doc Comment
 *
 * @category Class
 * @description Payment token usage details.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UsePaymentToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UsePaymentToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'value' => 'string',
        'tokenOriginStoreId' => 'string',
        'function' => '\FirstData\FirstApi\Client\Model\CardFunction',
        'securityCode' => 'string',
        'expiryDate' => '\FirstData\FirstApi\Client\Model\Expiration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'value' => null,
        'tokenOriginStoreId' => null,
        'function' => null,
        'securityCode' => null,
        'expiryDate' => null
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
        'value' => 'value',
        'tokenOriginStoreId' => 'tokenOriginStoreId',
        'function' => 'function',
        'securityCode' => 'securityCode',
        'expiryDate' => 'expiryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
        'tokenOriginStoreId' => 'setTokenOriginStoreId',
        'function' => 'setFunction',
        'securityCode' => 'setSecurityCode',
        'expiryDate' => 'setExpiryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'tokenOriginStoreId' => 'getTokenOriginStoreId',
        'function' => 'getFunction',
        'securityCode' => 'getSecurityCode',
        'expiryDate' => 'getExpiryDate'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['tokenOriginStoreId'] = isset($data['tokenOriginStoreId']) ? $data['tokenOriginStoreId'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['securityCode'] = isset($data['securityCode']) ? $data['securityCode'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['value'])) {
            $invalidProperties[] = "invalid value for 'value', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if (!is_null($this->container['tokenOriginStoreId']) && (mb_strlen($this->container['tokenOriginStoreId']) > 20)) {
            $invalidProperties[] = "invalid value for 'tokenOriginStoreId', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['securityCode']) && (mb_strlen($this->container['securityCode']) > 4)) {
            $invalidProperties[] = "invalid value for 'securityCode', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['securityCode']) && (mb_strlen($this->container['securityCode']) < 3)) {
            $invalidProperties[] = "invalid value for 'securityCode', the character length must be bigger than or equal to 3.";
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
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value Client-supplied payment token value.
     *
     * @return $this
     */
    public function setValue($value)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $value))) {
            throw new \InvalidArgumentException("invalid value for $value when calling UsePaymentToken., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets tokenOriginStoreId
     *
     * @return string|null
     */
    public function getTokenOriginStoreId()
    {
        return $this->container['tokenOriginStoreId'];
    }

    /**
     * Sets tokenOriginStoreId
     *
     * @param string|null $tokenOriginStoreId The ID of a same store (or) sibling store in a hierarchy for which the token was originally created.
     *
     * @return $this
     */
    public function setTokenOriginStoreId($tokenOriginStoreId)
    {
        if (!is_null($tokenOriginStoreId) && (mb_strlen($tokenOriginStoreId) > 20)) {
            throw new \InvalidArgumentException('invalid length for $tokenOriginStoreId when calling UsePaymentToken., must be smaller than or equal to 20.');
        }

        $this->container['tokenOriginStoreId'] = $tokenOriginStoreId;

        return $this;
    }

    /**
     * Gets function
     *
     * @return \FirstData\FirstApi\Client\Model\CardFunction|null
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function
     *
     * @param \FirstData\FirstApi\Client\Model\CardFunction|null $function function
     *
     * @return $this
     */
    public function setFunction($function)
    {
        $this->container['function'] = $function;

        return $this;
    }

    /**
     * Gets securityCode
     *
     * @return string|null
     */
    public function getSecurityCode()
    {
        return $this->container['securityCode'];
    }

    /**
     * Sets securityCode
     *
     * @param string|null $securityCode Card verification value/number.
     *
     * @return $this
     */
    public function setSecurityCode($securityCode)
    {
        if (!is_null($securityCode) && (mb_strlen($securityCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $securityCode when calling UsePaymentToken., must be smaller than or equal to 4.');
        }
        if (!is_null($securityCode) && (mb_strlen($securityCode) < 3)) {
            throw new \InvalidArgumentException('invalid length for $securityCode when calling UsePaymentToken., must be bigger than or equal to 3.');
        }

        $this->container['securityCode'] = $securityCode;

        return $this;
    }

    /**
     * Gets expiryDate
     *
     * @return \FirstData\FirstApi\Client\Model\Expiration|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
     * Sets expiryDate
     *
     * @param \FirstData\FirstApi\Client\Model\Expiration|null $expiryDate expiryDate
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

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


