<?php
/**
 * ChinaDomestic
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
 * ChinaDomestic Class Doc Comment
 *
 * @category Class
 * @description The payment object for China-domestic transactions. Use this to populate all china domestic payment method details.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChinaDomestic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChinaDomestic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'productCode' => 'string',
        'productQuantity' => 'int',
        'productPrice' => 'float',
        'productDescription' => 'string',
        'redirectURL' => 'string',
        'limitCardFunctionToDebit' => 'bool',
        'customerId' => 'string',
        'bankId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'productCode' => null,
        'productQuantity' => 'int32',
        'productPrice' => null,
        'productDescription' => null,
        'redirectURL' => null,
        'limitCardFunctionToDebit' => null,
        'customerId' => null,
        'bankId' => null
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
        'productCode' => 'productCode',
        'productQuantity' => 'productQuantity',
        'productPrice' => 'productPrice',
        'productDescription' => 'productDescription',
        'redirectURL' => 'redirectURL',
        'limitCardFunctionToDebit' => 'limitCardFunctionToDebit',
        'customerId' => 'customerId',
        'bankId' => 'bankId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productCode' => 'setProductCode',
        'productQuantity' => 'setProductQuantity',
        'productPrice' => 'setProductPrice',
        'productDescription' => 'setProductDescription',
        'redirectURL' => 'setRedirectURL',
        'limitCardFunctionToDebit' => 'setLimitCardFunctionToDebit',
        'customerId' => 'setCustomerId',
        'bankId' => 'setBankId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productCode' => 'getProductCode',
        'productQuantity' => 'getProductQuantity',
        'productPrice' => 'getProductPrice',
        'productDescription' => 'getProductDescription',
        'redirectURL' => 'getRedirectURL',
        'limitCardFunctionToDebit' => 'getLimitCardFunctionToDebit',
        'customerId' => 'getCustomerId',
        'bankId' => 'getBankId'
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
        $this->container['productCode'] = isset($data['productCode']) ? $data['productCode'] : null;
        $this->container['productQuantity'] = isset($data['productQuantity']) ? $data['productQuantity'] : null;
        $this->container['productPrice'] = isset($data['productPrice']) ? $data['productPrice'] : null;
        $this->container['productDescription'] = isset($data['productDescription']) ? $data['productDescription'] : null;
        $this->container['redirectURL'] = isset($data['redirectURL']) ? $data['redirectURL'] : null;
        $this->container['limitCardFunctionToDebit'] = isset($data['limitCardFunctionToDebit']) ? $data['limitCardFunctionToDebit'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['bankId'] = isset($data['bankId']) ? $data['bankId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['productCode'] === null) {
            $invalidProperties[] = "'productCode' can't be null";
        }
        if ((mb_strlen($this->container['productCode']) > 32)) {
            $invalidProperties[] = "invalid value for 'productCode', the character length must be smaller than or equal to 32.";
        }

        if (!preg_match("/^(?!\\s*$).+/", $this->container['productCode'])) {
            $invalidProperties[] = "invalid value for 'productCode', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['productQuantity'] === null) {
            $invalidProperties[] = "'productQuantity' can't be null";
        }
        if (($this->container['productQuantity'] < 1)) {
            $invalidProperties[] = "invalid value for 'productQuantity', must be bigger than or equal to 1.";
        }

        if ($this->container['productPrice'] === null) {
            $invalidProperties[] = "'productPrice' can't be null";
        }
        if ($this->container['productDescription'] === null) {
            $invalidProperties[] = "'productDescription' can't be null";
        }
        if ((mb_strlen($this->container['productDescription']) > 100)) {
            $invalidProperties[] = "invalid value for 'productDescription', the character length must be smaller than or equal to 100.";
        }

        if (!preg_match("/^(?!\\s*$).+/", $this->container['productDescription'])) {
            $invalidProperties[] = "invalid value for 'productDescription', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['redirectURL'] === null) {
            $invalidProperties[] = "'redirectURL' can't be null";
        }
        if ((mb_strlen($this->container['redirectURL']) > 1024)) {
            $invalidProperties[] = "invalid value for 'redirectURL', the character length must be smaller than or equal to 1024.";
        }

        if (!preg_match("/^(?!\\s*$).+/", $this->container['redirectURL'])) {
            $invalidProperties[] = "invalid value for 'redirectURL', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if (!is_null($this->container['customerId']) && (mb_strlen($this->container['customerId']) > 32)) {
            $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['bankId']) && (mb_strlen($this->container['bankId']) > 8)) {
            $invalidProperties[] = "invalid value for 'bankId', the character length must be smaller than or equal to 8.";
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
     * Gets productCode
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string $productCode Use this to indicate the product code according to the product category list.
     *
     * @return $this
     */
    public function setProductCode($productCode)
    {
        if ((mb_strlen($productCode) > 32)) {
            throw new \InvalidArgumentException('invalid length for $productCode when calling ChinaDomestic., must be smaller than or equal to 32.');
        }
        if ((!preg_match("/^(?!\\s*$).+/", $productCode))) {
            throw new \InvalidArgumentException("invalid value for $productCode when calling ChinaDomestic., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets productQuantity
     *
     * @return int
     */
    public function getProductQuantity()
    {
        return $this->container['productQuantity'];
    }

    /**
     * Sets productQuantity
     *
     * @param int $productQuantity The quantity.
     *
     * @return $this
     */
    public function setProductQuantity($productQuantity)
    {

        if (($productQuantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $productQuantity when calling ChinaDomestic., must be bigger than or equal to 1.');
        }

        $this->container['productQuantity'] = $productQuantity;

        return $this;
    }

    /**
     * Gets productPrice
     *
     * @return float
     */
    public function getProductPrice()
    {
        return $this->container['productPrice'];
    }

    /**
     * Sets productPrice
     *
     * @param float $productPrice Rate amount in 3 decimal 12 bytes total digit.
     *
     * @return $this
     */
    public function setProductPrice($productPrice)
    {
        $this->container['productPrice'] = $productPrice;

        return $this;
    }

    /**
     * Gets productDescription
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->container['productDescription'];
    }

    /**
     * Sets productDescription
     *
     * @param string $productDescription The product description.
     *
     * @return $this
     */
    public function setProductDescription($productDescription)
    {
        if ((mb_strlen($productDescription) > 100)) {
            throw new \InvalidArgumentException('invalid length for $productDescription when calling ChinaDomestic., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/^(?!\\s*$).+/", $productDescription))) {
            throw new \InvalidArgumentException("invalid value for $productDescription when calling ChinaDomestic., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['productDescription'] = $productDescription;

        return $this;
    }

    /**
     * Gets redirectURL
     *
     * @return string
     */
    public function getRedirectURL()
    {
        return $this->container['redirectURL'];
    }

    /**
     * Sets redirectURL
     *
     * @param string $redirectURL Use this to indicate the product code according to the product category list.
     *
     * @return $this
     */
    public function setRedirectURL($redirectURL)
    {
        if ((mb_strlen($redirectURL) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $redirectURL when calling ChinaDomestic., must be smaller than or equal to 1024.');
        }
        if ((!preg_match("/^(?!\\s*$).+/", $redirectURL))) {
            throw new \InvalidArgumentException("invalid value for $redirectURL when calling ChinaDomestic., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['redirectURL'] = $redirectURL;

        return $this;
    }

    /**
     * Gets limitCardFunctionToDebit
     *
     * @return bool|null
     */
    public function getLimitCardFunctionToDebit()
    {
        return $this->container['limitCardFunctionToDebit'];
    }

    /**
     * Sets limitCardFunctionToDebit
     *
     * @param bool|null $limitCardFunctionToDebit Use this to limit card functions to debit cards.
     *
     * @return $this
     */
    public function setLimitCardFunctionToDebit($limitCardFunctionToDebit)
    {
        $this->container['limitCardFunctionToDebit'] = $limitCardFunctionToDebit;

        return $this;
    }

    /**
     * Gets customerId
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param string|null $customerId Use this to indicate the CUP customer ID if known.
     *
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        if (!is_null($customerId) && (mb_strlen($customerId) > 32)) {
            throw new \InvalidArgumentException('invalid length for $customerId when calling ChinaDomestic., must be smaller than or equal to 32.');
        }

        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets bankId
     *
     * @return string|null
     */
    public function getBankId()
    {
        return $this->container['bankId'];
    }

    /**
     * Sets bankId
     *
     * @param string|null $bankId Use this to indicate the CUP bank ID if known.
     *
     * @return $this
     */
    public function setBankId($bankId)
    {
        if (!is_null($bankId) && (mb_strlen($bankId) > 8)) {
            throw new \InvalidArgumentException('invalid length for $bankId when calling ChinaDomestic., must be smaller than or equal to 8.');
        }

        $this->container['bankId'] = $bankId;

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


