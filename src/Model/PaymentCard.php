<?php
/**
 * PaymentCard
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
 * PaymentCard Class Doc Comment
 *
 * @category Class
 * @description Payment card model.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'number' => 'string',
        'expiryDate' => '\FirstData\FirstApi\Client\Model\Expiration',
        'securityCode' => 'string',
        'cardFunction' => '\FirstData\FirstApi\Client\Model\CardFunction',
        'cardholderName' => 'string',
        'bin' => 'string',
        'last4' => 'string',
        'brand' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'number' => null,
        'expiryDate' => null,
        'securityCode' => null,
        'cardFunction' => null,
        'cardholderName' => null,
        'bin' => null,
        'last4' => null,
        'brand' => null
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
        'number' => 'number',
        'expiryDate' => 'expiryDate',
        'securityCode' => 'securityCode',
        'cardFunction' => 'cardFunction',
        'cardholderName' => 'cardholderName',
        'bin' => 'bin',
        'last4' => 'last4',
        'brand' => 'brand'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'expiryDate' => 'setExpiryDate',
        'securityCode' => 'setSecurityCode',
        'cardFunction' => 'setCardFunction',
        'cardholderName' => 'setCardholderName',
        'bin' => 'setBin',
        'last4' => 'setLast4',
        'brand' => 'setBrand'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'expiryDate' => 'getExpiryDate',
        'securityCode' => 'getSecurityCode',
        'cardFunction' => 'getCardFunction',
        'cardholderName' => 'getCardholderName',
        'bin' => 'getBin',
        'last4' => 'getLast4',
        'brand' => 'getBrand'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['securityCode'] = isset($data['securityCode']) ? $data['securityCode'] : null;
        $this->container['cardFunction'] = isset($data['cardFunction']) ? $data['cardFunction'] : null;
        $this->container['cardholderName'] = isset($data['cardholderName']) ? $data['cardholderName'] : null;
        $this->container['bin'] = isset($data['bin']) ? $data['bin'] : null;
        $this->container['last4'] = isset($data['last4']) ? $data['last4'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if (!preg_match("/[0-9]{13,19}/", $this->container['number'])) {
            $invalidProperties[] = "invalid value for 'number', must be conform to the pattern /[0-9]{13,19}/.";
        }

        if (!is_null($this->container['securityCode']) && (mb_strlen($this->container['securityCode']) > 4)) {
            $invalidProperties[] = "invalid value for 'securityCode', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['securityCode']) && (mb_strlen($this->container['securityCode']) < 3)) {
            $invalidProperties[] = "invalid value for 'securityCode', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['cardholderName']) && (mb_strlen($this->container['cardholderName']) > 96)) {
            $invalidProperties[] = "invalid value for 'cardholderName', the character length must be smaller than or equal to 96.";
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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Payment card number.
     *
     * @return $this
     */
    public function setNumber($number)
    {

        if ((!preg_match("/[0-9]{13,19}/", $number))) {
            throw new \InvalidArgumentException("invalid value for $number when calling PaymentCard., must conform to the pattern /[0-9]{13,19}/.");
        }

        $this->container['number'] = $number;

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
            throw new \InvalidArgumentException('invalid length for $securityCode when calling PaymentCard., must be smaller than or equal to 4.');
        }
        if (!is_null($securityCode) && (mb_strlen($securityCode) < 3)) {
            throw new \InvalidArgumentException('invalid length for $securityCode when calling PaymentCard., must be bigger than or equal to 3.');
        }

        $this->container['securityCode'] = $securityCode;

        return $this;
    }

    /**
     * Gets cardFunction
     *
     * @return \FirstData\FirstApi\Client\Model\CardFunction|null
     */
    public function getCardFunction()
    {
        return $this->container['cardFunction'];
    }

    /**
     * Sets cardFunction
     *
     * @param \FirstData\FirstApi\Client\Model\CardFunction|null $cardFunction cardFunction
     *
     * @return $this
     */
    public function setCardFunction($cardFunction)
    {
        $this->container['cardFunction'] = $cardFunction;

        return $this;
    }

    /**
     * Gets cardholderName
     *
     * @return string|null
     */
    public function getCardholderName()
    {
        return $this->container['cardholderName'];
    }

    /**
     * Sets cardholderName
     *
     * @param string|null $cardholderName Name of the cardholder.
     *
     * @return $this
     */
    public function setCardholderName($cardholderName)
    {
        if (!is_null($cardholderName) && (mb_strlen($cardholderName) > 96)) {
            throw new \InvalidArgumentException('invalid length for $cardholderName when calling PaymentCard., must be smaller than or equal to 96.');
        }

        $this->container['cardholderName'] = $cardholderName;

        return $this;
    }

    /**
     * Gets bin
     *
     * @return string|null
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string|null $bin The payment card BIN.
     *
     * @return $this
     */
    public function setBin($bin)
    {
        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets last4
     *
     * @return string|null
     */
    public function getLast4()
    {
        return $this->container['last4'];
    }

    /**
     * Sets last4
     *
     * @param string|null $last4 The last 4 numbers of a payment card.
     *
     * @return $this
     */
    public function setLast4($last4)
    {
        $this->container['last4'] = $last4;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand Required only if using dual branded card.
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

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


