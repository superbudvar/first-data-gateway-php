<?php
/**
 * CardInfo
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
 * Payment Gateway API for payment processing. Version 6.4.0.20181018.001
 *
 * OpenAPI spec version: 6.4.0.20181018.001
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
 * CardInfo Class Doc Comment
 *
 * @category Class
 * @description Card information.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CardInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brand' => 'string',
        'brandProductId' => 'string',
        'cardFunction' => 'string',
        'commercialCard' => 'string',
        'issuerCountry' => 'string',
        'issuerName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'brand' => null,
        'brandProductId' => null,
        'cardFunction' => null,
        'commercialCard' => null,
        'issuerCountry' => null,
        'issuerName' => null
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
        'brand' => 'brand',
        'brandProductId' => 'brandProductId',
        'cardFunction' => 'cardFunction',
        'commercialCard' => 'commercialCard',
        'issuerCountry' => 'issuerCountry',
        'issuerName' => 'issuerName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brand' => 'setBrand',
        'brandProductId' => 'setBrandProductId',
        'cardFunction' => 'setCardFunction',
        'commercialCard' => 'setCommercialCard',
        'issuerCountry' => 'setIssuerCountry',
        'issuerName' => 'setIssuerName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brand' => 'getBrand',
        'brandProductId' => 'getBrandProductId',
        'cardFunction' => 'getCardFunction',
        'commercialCard' => 'getCommercialCard',
        'issuerCountry' => 'getIssuerCountry',
        'issuerName' => 'getIssuerName'
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

    const CARD_FUNCTION_CREDIT = 'credit';
    const CARD_FUNCTION_DEBIT = 'debit';
    const CARD_FUNCTION_PREPAID = 'prepaid';
    const CARD_FUNCTION_VOUCHER = 'voucher';
    const CARD_FUNCTION_UNDEFINED = 'undefined';
    const COMMERCIAL_CARD_CORPORATE = 'CORPORATE';
    const COMMERCIAL_CARD_NON_CORPORATE = 'NON_CORPORATE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardFunctionAllowableValues()
    {
        return [
            self::CARD_FUNCTION_CREDIT,
            self::CARD_FUNCTION_DEBIT,
            self::CARD_FUNCTION_PREPAID,
            self::CARD_FUNCTION_VOUCHER,
            self::CARD_FUNCTION_UNDEFINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCommercialCardAllowableValues()
    {
        return [
            self::COMMERCIAL_CARD_CORPORATE,
            self::COMMERCIAL_CARD_NON_CORPORATE,
        ];
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
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['brandProductId'] = isset($data['brandProductId']) ? $data['brandProductId'] : null;
        $this->container['cardFunction'] = isset($data['cardFunction']) ? $data['cardFunction'] : null;
        $this->container['commercialCard'] = isset($data['commercialCard']) ? $data['commercialCard'] : null;
        $this->container['issuerCountry'] = isset($data['issuerCountry']) ? $data['issuerCountry'] : null;
        $this->container['issuerName'] = isset($data['issuerName']) ? $data['issuerName'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCardFunctionAllowableValues();
        if (!is_null($this->container['cardFunction']) && !in_array($this->container['cardFunction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cardFunction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCommercialCardAllowableValues();
        if (!is_null($this->container['commercialCard']) && !in_array($this->container['commercialCard'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'commercialCard', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param string|null $brand The card brand.
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets brandProductId
     *
     * @return string|null
     */
    public function getBrandProductId()
    {
        return $this->container['brandProductId'];
    }

    /**
     * Sets brandProductId
     *
     * @param string|null $brandProductId The product ID of the brand.
     *
     * @return $this
     */
    public function setBrandProductId($brandProductId)
    {
        $this->container['brandProductId'] = $brandProductId;

        return $this;
    }

    /**
     * Gets cardFunction
     *
     * @return string|null
     */
    public function getCardFunction()
    {
        return $this->container['cardFunction'];
    }

    /**
     * Sets cardFunction
     *
     * @param string|null $cardFunction The functions of the card. Possible values are credit, debit, prepaid, voucher and undefined.
     *
     * @return $this
     */
    public function setCardFunction($cardFunction)
    {
        $allowedValues = $this->getCardFunctionAllowableValues();
        if (!is_null($cardFunction) && !in_array($cardFunction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cardFunction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cardFunction'] = $cardFunction;

        return $this;
    }

    /**
     * Gets commercialCard
     *
     * @return string|null
     */
    public function getCommercialCard()
    {
        return $this->container['commercialCard'];
    }

    /**
     * Sets commercialCard
     *
     * @param string|null $commercialCard Indicates whether it is a corporate or non corporate card
     *
     * @return $this
     */
    public function setCommercialCard($commercialCard)
    {
        $allowedValues = $this->getCommercialCardAllowableValues();
        if (!is_null($commercialCard) && !in_array($commercialCard, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'commercialCard', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['commercialCard'] = $commercialCard;

        return $this;
    }

    /**
     * Gets issuerCountry
     *
     * @return string|null
     */
    public function getIssuerCountry()
    {
        return $this->container['issuerCountry'];
    }

    /**
     * Sets issuerCountry
     *
     * @param string|null $issuerCountry The country of the issuer.
     *
     * @return $this
     */
    public function setIssuerCountry($issuerCountry)
    {
        $this->container['issuerCountry'] = $issuerCountry;

        return $this;
    }

    /**
     * Gets issuerName
     *
     * @return string|null
     */
    public function getIssuerName()
    {
        return $this->container['issuerName'];
    }

    /**
     * Sets issuerName
     *
     * @param string|null $issuerName The name of the issuer.
     *
     * @return $this
     */
    public function setIssuerName($issuerName)
    {
        $this->container['issuerName'] = $issuerName;

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

