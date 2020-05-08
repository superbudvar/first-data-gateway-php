<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @description Model for address information.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'region' => 'string',
        'postalCode' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'company' => null,
        'address1' => null,
        'address2' => null,
        'city' => null,
        'region' => null,
        'postalCode' => null,
        'country' => null
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
        'company' => 'company',
        'address1' => 'address1',
        'address2' => 'address2',
        'city' => 'city',
        'region' => 'region',
        'postalCode' => 'postalCode',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company' => 'setCompany',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'region' => 'setRegion',
        'postalCode' => 'setPostalCode',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company' => 'getCompany',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'region' => 'getRegion',
        'postalCode' => 'getPostalCode',
        'country' => 'getCountry'
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
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['company']) && (mb_strlen($this->container['company']) > 96)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 96.";
        }

        if (!is_null($this->container['address1']) && (mb_strlen($this->container['address1']) > 96)) {
            $invalidProperties[] = "invalid value for 'address1', the character length must be smaller than or equal to 96.";
        }

        if (!is_null($this->container['address2']) && (mb_strlen($this->container['address2']) > 96)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be smaller than or equal to 96.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 96)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 96.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 96)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 96.";
        }

        if (!is_null($this->container['postalCode']) && (mb_strlen($this->container['postalCode']) > 24)) {
            $invalidProperties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 32)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 32.";
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
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company Company name associated with the address.
     *
     * @return $this
     */
    public function setCompany($company)
    {
        if (!is_null($company) && (mb_strlen($company) > 96)) {
            throw new \InvalidArgumentException('invalid length for $company when calling Address., must be smaller than or equal to 96.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets address1
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string|null $address1 First line of the street address.
     *
     * @return $this
     */
    public function setAddress1($address1)
    {
        if (!is_null($address1) && (mb_strlen($address1) > 96)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling Address., must be smaller than or equal to 96.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 Second line of the street address.
     *
     * @return $this
     */
    public function setAddress2($address2)
    {
        if (!is_null($address2) && (mb_strlen($address2) > 96)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling Address., must be smaller than or equal to 96.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City or locality.
     *
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 96)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 96.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region State or province.
     *
     * @return $this
     */
    public function setRegion($region)
    {
        if (!is_null($region) && (mb_strlen($region) > 96)) {
            throw new \InvalidArgumentException('invalid length for $region when calling Address., must be smaller than or equal to 96.');
        }

        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string|null $postalCode ZIP code or postal code.
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        if (!is_null($postalCode) && (mb_strlen($postalCode) > 24)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling Address., must be smaller than or equal to 24.');
        }

        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country ISO-3166-1  ALPHA-2, ALPHA-3, numeric or full country name. In the case of PaySecure endpoints, pass the country code in an ISO format.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (mb_strlen($country) > 32)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Address., must be smaller than or equal to 32.');
        }

        $this->container['country'] = $country;

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


