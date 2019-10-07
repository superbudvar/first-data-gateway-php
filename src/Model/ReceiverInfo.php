<?php
/**
 * ReceiverInfo
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
 * OpenAPI spec version: 6.8.0.20190731.002
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
 * ReceiverInfo Class Doc Comment
 *
 * @category Class
 * @description Receiver information for a funding transaction.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReceiverInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReceiverInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'streetAddress' => 'string',
        'city' => 'string',
        'stateCode' => 'string',
        'countryCode' => 'string',
        'postalCode' => 'string',
        'phoneNumber' => 'string',
        'referenceNumber' => 'string',
        'accountNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'streetAddress' => null,
        'city' => null,
        'stateCode' => null,
        'countryCode' => null,
        'postalCode' => null,
        'phoneNumber' => null,
        'referenceNumber' => null,
        'accountNumber' => null
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
        'name' => 'name',
        'streetAddress' => 'streetAddress',
        'city' => 'city',
        'stateCode' => 'stateCode',
        'countryCode' => 'countryCode',
        'postalCode' => 'postalCode',
        'phoneNumber' => 'phoneNumber',
        'referenceNumber' => 'referenceNumber',
        'accountNumber' => 'accountNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'streetAddress' => 'setStreetAddress',
        'city' => 'setCity',
        'stateCode' => 'setStateCode',
        'countryCode' => 'setCountryCode',
        'postalCode' => 'setPostalCode',
        'phoneNumber' => 'setPhoneNumber',
        'referenceNumber' => 'setReferenceNumber',
        'accountNumber' => 'setAccountNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'streetAddress' => 'getStreetAddress',
        'city' => 'getCity',
        'stateCode' => 'getStateCode',
        'countryCode' => 'getCountryCode',
        'postalCode' => 'getPostalCode',
        'phoneNumber' => 'getPhoneNumber',
        'referenceNumber' => 'getReferenceNumber',
        'accountNumber' => 'getAccountNumber'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['streetAddress'] = isset($data['streetAddress']) ? $data['streetAddress'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['stateCode'] = isset($data['stateCode']) ? $data['stateCode'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['referenceNumber'] = isset($data['referenceNumber']) ? $data['referenceNumber'] : null;
        $this->container['accountNumber'] = isset($data['accountNumber']) ? $data['accountNumber'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (!preg_match("/^(?!\\s*$).+/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['streetAddress'] === null) {
            $invalidProperties[] = "'streetAddress' can't be null";
        }
        if ((mb_strlen($this->container['streetAddress']) > 250)) {
            $invalidProperties[] = "invalid value for 'streetAddress', the character length must be smaller than or equal to 250.";
        }

        if (!preg_match("/^(?!\\s*$).+/", $this->container['streetAddress'])) {
            $invalidProperties[] = "invalid value for 'streetAddress', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 50)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 50.";
        }

        if (!preg_match("/^(?!\\s*$).+/", $this->container['city'])) {
            $invalidProperties[] = "invalid value for 'city', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['stateCode'] === null) {
            $invalidProperties[] = "'stateCode' can't be null";
        }
        if ((mb_strlen($this->container['stateCode']) > 50)) {
            $invalidProperties[] = "invalid value for 'stateCode', the character length must be smaller than or equal to 50.";
        }

        if (!preg_match("/[A-Z]{2}/", $this->container['stateCode'])) {
            $invalidProperties[] = "invalid value for 'stateCode', must be conform to the pattern /[A-Z]{2}/.";
        }

        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
        }
        if (!preg_match("/[A-Z]{2}/", $this->container['countryCode'])) {
            $invalidProperties[] = "invalid value for 'countryCode', must be conform to the pattern /[A-Z]{2}/.";
        }

        if ($this->container['postalCode'] === null) {
            $invalidProperties[] = "'postalCode' can't be null";
        }
        if ((mb_strlen($this->container['postalCode']) > 10)) {
            $invalidProperties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 10.";
        }

        if (!preg_match("/^(?!\\s*$).+/", $this->container['postalCode'])) {
            $invalidProperties[] = "invalid value for 'postalCode', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['phoneNumber'] === null) {
            $invalidProperties[] = "'phoneNumber' can't be null";
        }
        if (!preg_match("/[0-9]{10}/", $this->container['phoneNumber'])) {
            $invalidProperties[] = "invalid value for 'phoneNumber', must be conform to the pattern /[0-9]{10}/.";
        }

        if ($this->container['referenceNumber'] === null) {
            $invalidProperties[] = "'referenceNumber' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['referenceNumber'])) {
            $invalidProperties[] = "invalid value for 'referenceNumber', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if (!is_null($this->container['accountNumber']) && !preg_match("/^(?!\\s*$).+/", $this->container['accountNumber'])) {
            $invalidProperties[] = "invalid value for 'accountNumber', must be conform to the pattern /^(?!\\s*$).+/.";
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
     * @param string $name Receiver name.
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ReceiverInfo., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/^(?!\\s*$).+/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling ReceiverInfo., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets streetAddress
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->container['streetAddress'];
    }

    /**
     * Sets streetAddress
     *
     * @param string $streetAddress Receiver street address.
     *
     * @return $this
     */
    public function setStreetAddress($streetAddress)
    {
        if ((mb_strlen($streetAddress) > 250)) {
            throw new \InvalidArgumentException('invalid length for $streetAddress when calling ReceiverInfo., must be smaller than or equal to 250.');
        }
        if ((!preg_match("/^(?!\\s*$).+/", $streetAddress))) {
            throw new \InvalidArgumentException("invalid value for $streetAddress when calling ReceiverInfo., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['streetAddress'] = $streetAddress;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city Receiver city.
     *
     * @return $this
     */
    public function setCity($city)
    {
        if ((mb_strlen($city) > 50)) {
            throw new \InvalidArgumentException('invalid length for $city when calling ReceiverInfo., must be smaller than or equal to 50.');
        }
        if ((!preg_match("/^(?!\\s*$).+/", $city))) {
            throw new \InvalidArgumentException("invalid value for $city when calling ReceiverInfo., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets stateCode
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->container['stateCode'];
    }

    /**
     * Sets stateCode
     *
     * @param string $stateCode Receiver state.
     *
     * @return $this
     */
    public function setStateCode($stateCode)
    {
        if ((mb_strlen($stateCode) > 50)) {
            throw new \InvalidArgumentException('invalid length for $stateCode when calling ReceiverInfo., must be smaller than or equal to 50.');
        }
        if ((!preg_match("/[A-Z]{2}/", $stateCode))) {
            throw new \InvalidArgumentException("invalid value for $stateCode when calling ReceiverInfo., must conform to the pattern /[A-Z]{2}/.");
        }

        $this->container['stateCode'] = $stateCode;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode Receiver country code.
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {

        if ((!preg_match("/[A-Z]{2}/", $countryCode))) {
            throw new \InvalidArgumentException("invalid value for $countryCode when calling ReceiverInfo., must conform to the pattern /[A-Z]{2}/.");
        }

        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string $postalCode Receiver postal code.
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        if ((mb_strlen($postalCode) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling ReceiverInfo., must be smaller than or equal to 10.');
        }
        if ((!preg_match("/^(?!\\s*$).+/", $postalCode))) {
            throw new \InvalidArgumentException("invalid value for $postalCode when calling ReceiverInfo., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string $phoneNumber Receiver phone number.
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {

        if ((!preg_match("/[0-9]{10}/", $phoneNumber))) {
            throw new \InvalidArgumentException("invalid value for $phoneNumber when calling ReceiverInfo., must conform to the pattern /[0-9]{10}/.");
        }

        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets referenceNumber
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['referenceNumber'];
    }

    /**
     * Sets referenceNumber
     *
     * @param string $referenceNumber Receiver reference number.
     *
     * @return $this
     */
    public function setReferenceNumber($referenceNumber)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $referenceNumber))) {
            throw new \InvalidArgumentException("invalid value for $referenceNumber when calling ReceiverInfo., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['referenceNumber'] = $referenceNumber;

        return $this;
    }

    /**
     * Gets accountNumber
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['accountNumber'];
    }

    /**
     * Sets accountNumber
     *
     * @param string|null $accountNumber Receiver account number.
     *
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {

        if (!is_null($accountNumber) && (!preg_match("/^(?!\\s*$).+/", $accountNumber))) {
            throw new \InvalidArgumentException("invalid value for $accountNumber when calling ReceiverInfo., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['accountNumber'] = $accountNumber;

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


