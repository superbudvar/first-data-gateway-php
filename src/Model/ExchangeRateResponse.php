<?php
/**
 * ExchangeRateResponse
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
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * ExchangeRateResponse Class Doc Comment
 *
 * @category Class
 * @description Exchange rate response.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExchangeRateResponse extends BasicResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExchangeRateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ipgTransactionId' => 'string',
        'requestTime' => 'string',
        'inquiryRateId' => 'string',
        'foreignCurrency' => 'string',
        'foreignAmount' => 'string',
        'exchangeRate' => 'string',
        'dccOffered' => 'string',
        'exchangeRateSourceTimestamp' => 'string',
        'expirationTimestamp' => 'string',
        'marginRatePercentage' => 'string',
        'exchangeRateSourceName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ipgTransactionId' => null,
        'requestTime' => null,
        'inquiryRateId' => null,
        'foreignCurrency' => null,
        'foreignAmount' => null,
        'exchangeRate' => null,
        'dccOffered' => null,
        'exchangeRateSourceTimestamp' => null,
        'expirationTimestamp' => null,
        'marginRatePercentage' => null,
        'exchangeRateSourceName' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ipgTransactionId' => 'ipgTransactionId',
        'requestTime' => 'requestTime',
        'inquiryRateId' => 'inquiryRateId',
        'foreignCurrency' => 'foreignCurrency',
        'foreignAmount' => 'foreignAmount',
        'exchangeRate' => 'exchangeRate',
        'dccOffered' => 'dccOffered',
        'exchangeRateSourceTimestamp' => 'exchangeRateSourceTimestamp',
        'expirationTimestamp' => 'expirationTimestamp',
        'marginRatePercentage' => 'marginRatePercentage',
        'exchangeRateSourceName' => 'exchangeRateSourceName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ipgTransactionId' => 'setIpgTransactionId',
        'requestTime' => 'setRequestTime',
        'inquiryRateId' => 'setInquiryRateId',
        'foreignCurrency' => 'setForeignCurrency',
        'foreignAmount' => 'setForeignAmount',
        'exchangeRate' => 'setExchangeRate',
        'dccOffered' => 'setDccOffered',
        'exchangeRateSourceTimestamp' => 'setExchangeRateSourceTimestamp',
        'expirationTimestamp' => 'setExpirationTimestamp',
        'marginRatePercentage' => 'setMarginRatePercentage',
        'exchangeRateSourceName' => 'setExchangeRateSourceName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ipgTransactionId' => 'getIpgTransactionId',
        'requestTime' => 'getRequestTime',
        'inquiryRateId' => 'getInquiryRateId',
        'foreignCurrency' => 'getForeignCurrency',
        'foreignAmount' => 'getForeignAmount',
        'exchangeRate' => 'getExchangeRate',
        'dccOffered' => 'getDccOffered',
        'exchangeRateSourceTimestamp' => 'getExchangeRateSourceTimestamp',
        'expirationTimestamp' => 'getExpirationTimestamp',
        'marginRatePercentage' => 'getMarginRatePercentage',
        'exchangeRateSourceName' => 'getExchangeRateSourceName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['ipgTransactionId'] = isset($data['ipgTransactionId']) ? $data['ipgTransactionId'] : null;
        $this->container['requestTime'] = isset($data['requestTime']) ? $data['requestTime'] : null;
        $this->container['inquiryRateId'] = isset($data['inquiryRateId']) ? $data['inquiryRateId'] : null;
        $this->container['foreignCurrency'] = isset($data['foreignCurrency']) ? $data['foreignCurrency'] : null;
        $this->container['foreignAmount'] = isset($data['foreignAmount']) ? $data['foreignAmount'] : null;
        $this->container['exchangeRate'] = isset($data['exchangeRate']) ? $data['exchangeRate'] : null;
        $this->container['dccOffered'] = isset($data['dccOffered']) ? $data['dccOffered'] : null;
        $this->container['exchangeRateSourceTimestamp'] = isset($data['exchangeRateSourceTimestamp']) ? $data['exchangeRateSourceTimestamp'] : null;
        $this->container['expirationTimestamp'] = isset($data['expirationTimestamp']) ? $data['expirationTimestamp'] : null;
        $this->container['marginRatePercentage'] = isset($data['marginRatePercentage']) ? $data['marginRatePercentage'] : null;
        $this->container['exchangeRateSourceName'] = isset($data['exchangeRateSourceName']) ? $data['exchangeRateSourceName'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets ipgTransactionId
     *
     * @return string|null
     */
    public function getIpgTransactionId()
    {
        return $this->container['ipgTransactionId'];
    }

    /**
     * Sets ipgTransactionId
     *
     * @param string|null $ipgTransactionId The response transaction ID.
     *
     * @return $this
     */
    public function setIpgTransactionId($ipgTransactionId)
    {
        $this->container['ipgTransactionId'] = $ipgTransactionId;

        return $this;
    }

    /**
     * Gets requestTime
     *
     * @return string|null
     */
    public function getRequestTime()
    {
        return $this->container['requestTime'];
    }

    /**
     * Sets requestTime
     *
     * @param string|null $requestTime Time of the request.
     *
     * @return $this
     */
    public function setRequestTime($requestTime)
    {
        $this->container['requestTime'] = $requestTime;

        return $this;
    }

    /**
     * Gets inquiryRateId
     *
     * @return string|null
     */
    public function getInquiryRateId()
    {
        return $this->container['inquiryRateId'];
    }

    /**
     * Sets inquiryRateId
     *
     * @param string|null $inquiryRateId Inquiry rate ID.
     *
     * @return $this
     */
    public function setInquiryRateId($inquiryRateId)
    {
        $this->container['inquiryRateId'] = $inquiryRateId;

        return $this;
    }

    /**
     * Gets foreignCurrency
     *
     * @return string|null
     */
    public function getForeignCurrency()
    {
        return $this->container['foreignCurrency'];
    }

    /**
     * Sets foreignCurrency
     *
     * @param string|null $foreignCurrency Foreign currency in alphabetic ISO 4217 currency code format.
     *
     * @return $this
     */
    public function setForeignCurrency($foreignCurrency)
    {
        $this->container['foreignCurrency'] = $foreignCurrency;

        return $this;
    }

    /**
     * Gets foreignAmount
     *
     * @return string|null
     */
    public function getForeignAmount()
    {
        return $this->container['foreignAmount'];
    }

    /**
     * Sets foreignAmount
     *
     * @param string|null $foreignAmount Foreign amount.
     *
     * @return $this
     */
    public function setForeignAmount($foreignAmount)
    {
        $this->container['foreignAmount'] = $foreignAmount;

        return $this;
    }

    /**
     * Gets exchangeRate
     *
     * @return string|null
     */
    public function getExchangeRate()
    {
        return $this->container['exchangeRate'];
    }

    /**
     * Sets exchangeRate
     *
     * @param string|null $exchangeRate Exchange rate.
     *
     * @return $this
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->container['exchangeRate'] = $exchangeRate;

        return $this;
    }

    /**
     * Gets dccOffered
     *
     * @return string|null
     */
    public function getDccOffered()
    {
        return $this->container['dccOffered'];
    }

    /**
     * Sets dccOffered
     *
     * @param string|null $dccOffered Dcc offered.
     *
     * @return $this
     */
    public function setDccOffered($dccOffered)
    {
        $this->container['dccOffered'] = $dccOffered;

        return $this;
    }

    /**
     * Gets exchangeRateSourceTimestamp
     *
     * @return string|null
     */
    public function getExchangeRateSourceTimestamp()
    {
        return $this->container['exchangeRateSourceTimestamp'];
    }

    /**
     * Sets exchangeRateSourceTimestamp
     *
     * @param string|null $exchangeRateSourceTimestamp Exchange rate source timestamp.
     *
     * @return $this
     */
    public function setExchangeRateSourceTimestamp($exchangeRateSourceTimestamp)
    {
        $this->container['exchangeRateSourceTimestamp'] = $exchangeRateSourceTimestamp;

        return $this;
    }

    /**
     * Gets expirationTimestamp
     *
     * @return string|null
     */
    public function getExpirationTimestamp()
    {
        return $this->container['expirationTimestamp'];
    }

    /**
     * Sets expirationTimestamp
     *
     * @param string|null $expirationTimestamp Expiration timestamp.
     *
     * @return $this
     */
    public function setExpirationTimestamp($expirationTimestamp)
    {
        $this->container['expirationTimestamp'] = $expirationTimestamp;

        return $this;
    }

    /**
     * Gets marginRatePercentage
     *
     * @return string|null
     */
    public function getMarginRatePercentage()
    {
        return $this->container['marginRatePercentage'];
    }

    /**
     * Sets marginRatePercentage
     *
     * @param string|null $marginRatePercentage Margin rate percentage.
     *
     * @return $this
     */
    public function setMarginRatePercentage($marginRatePercentage)
    {
        $this->container['marginRatePercentage'] = $marginRatePercentage;

        return $this;
    }

    /**
     * Gets exchangeRateSourceName
     *
     * @return string|null
     */
    public function getExchangeRateSourceName()
    {
        return $this->container['exchangeRateSourceName'];
    }

    /**
     * Sets exchangeRateSourceName
     *
     * @param string|null $exchangeRateSourceName Exchange rate source name.
     *
     * @return $this
     */
    public function setExchangeRateSourceName($exchangeRateSourceName)
    {
        $this->container['exchangeRateSourceName'] = $exchangeRateSourceName;

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


