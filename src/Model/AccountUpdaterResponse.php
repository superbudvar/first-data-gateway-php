<?php
/**
 * AccountUpdaterResponse
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
 * AccountUpdaterResponse Class Doc Comment
 *
 * @category Class
 * @description Details related to updated account information.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountUpdaterResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountUpdaterResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'updatedCard' => 'string',
        'updatedToken' => 'string',
        'updatedExpirationDate' => 'string',
        'updatedAccountStatus' => 'string',
        'updatedAccountErrorCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'updatedCard' => null,
        'updatedToken' => null,
        'updatedExpirationDate' => null,
        'updatedAccountStatus' => null,
        'updatedAccountErrorCode' => null
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
        'updatedCard' => 'updatedCard',
        'updatedToken' => 'updatedToken',
        'updatedExpirationDate' => 'updatedExpirationDate',
        'updatedAccountStatus' => 'updatedAccountStatus',
        'updatedAccountErrorCode' => 'updatedAccountErrorCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'updatedCard' => 'setUpdatedCard',
        'updatedToken' => 'setUpdatedToken',
        'updatedExpirationDate' => 'setUpdatedExpirationDate',
        'updatedAccountStatus' => 'setUpdatedAccountStatus',
        'updatedAccountErrorCode' => 'setUpdatedAccountErrorCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'updatedCard' => 'getUpdatedCard',
        'updatedToken' => 'getUpdatedToken',
        'updatedExpirationDate' => 'getUpdatedExpirationDate',
        'updatedAccountStatus' => 'getUpdatedAccountStatus',
        'updatedAccountErrorCode' => 'getUpdatedAccountErrorCode'
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
        $this->container['updatedCard'] = isset($data['updatedCard']) ? $data['updatedCard'] : null;
        $this->container['updatedToken'] = isset($data['updatedToken']) ? $data['updatedToken'] : null;
        $this->container['updatedExpirationDate'] = isset($data['updatedExpirationDate']) ? $data['updatedExpirationDate'] : null;
        $this->container['updatedAccountStatus'] = isset($data['updatedAccountStatus']) ? $data['updatedAccountStatus'] : null;
        $this->container['updatedAccountErrorCode'] = isset($data['updatedAccountErrorCode']) ? $data['updatedAccountErrorCode'] : null;
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
     * Gets updatedCard
     *
     * @return string|null
     */
    public function getUpdatedCard()
    {
        return $this->container['updatedCard'];
    }

    /**
     * Sets updatedCard
     *
     * @param string|null $updatedCard Account updater replacement PAN or TransArmor token.
     *
     * @return $this
     */
    public function setUpdatedCard($updatedCard)
    {
        $this->container['updatedCard'] = $updatedCard;

        return $this;
    }

    /**
     * Gets updatedToken
     *
     * @return string|null
     */
    public function getUpdatedToken()
    {
        return $this->container['updatedToken'];
    }

    /**
     * Sets updatedToken
     *
     * @param string|null $updatedToken Updated value of token.
     *
     * @return $this
     */
    public function setUpdatedToken($updatedToken)
    {
        $this->container['updatedToken'] = $updatedToken;

        return $this;
    }

    /**
     * Gets updatedExpirationDate
     *
     * @return string|null
     */
    public function getUpdatedExpirationDate()
    {
        return $this->container['updatedExpirationDate'];
    }

    /**
     * Sets updatedExpirationDate
     *
     * @param string|null $updatedExpirationDate New account number expiration date in MMYY format.
     *
     * @return $this
     */
    public function setUpdatedExpirationDate($updatedExpirationDate)
    {
        $this->container['updatedExpirationDate'] = $updatedExpirationDate;

        return $this;
    }

    /**
     * Gets updatedAccountStatus
     *
     * @return string|null
     */
    public function getUpdatedAccountStatus()
    {
        return $this->container['updatedAccountStatus'];
    }

    /**
     * Sets updatedAccountStatus
     *
     * @param string|null $updatedAccountStatus Status of the updated account. An account may have closed (C), the expiry date may have changed (E), the account may have changed (A), or the cardholder should be contacted (Q).
     *
     * @return $this
     */
    public function setUpdatedAccountStatus($updatedAccountStatus)
    {
        $this->container['updatedAccountStatus'] = $updatedAccountStatus;

        return $this;
    }

    /**
     * Gets updatedAccountErrorCode
     *
     * @return string|null
     */
    public function getUpdatedAccountErrorCode()
    {
        return $this->container['updatedAccountErrorCode'];
    }

    /**
     * Sets updatedAccountErrorCode
     *
     * @param string|null $updatedAccountErrorCode Code for the error encountered when updating account.
     *
     * @return $this
     */
    public function setUpdatedAccountErrorCode($updatedAccountErrorCode)
    {
        $this->container['updatedAccountErrorCode'] = $updatedAccountErrorCode;

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


