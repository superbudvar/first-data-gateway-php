<?php
/**
 * Order
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
 * Order Class Doc Comment
 *
 * @category Class
 * @description Use this model to provide order related details.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orderId' => 'string',
        'billing' => '\FirstData\FirstApi\Client\Model\Billing',
        'shipping' => '\FirstData\FirstApi\Client\Model\Shipping',
        'industrySpecificExtensions' => '\FirstData\FirstApi\Client\Model\IndustrySpecificExtensions',
        'purchaseCard' => '\FirstData\FirstApi\Client\Model\PurchaseCards',
        'installmentOptions' => '\FirstData\FirstApi\Client\Model\InstallmentOptions',
        'softDescriptor' => '\FirstData\FirstApi\Client\Model\SoftDescriptor',
        'additionalDetails' => '\FirstData\FirstApi\Client\Model\AdditionalDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'orderId' => null,
        'billing' => null,
        'shipping' => null,
        'industrySpecificExtensions' => null,
        'purchaseCard' => null,
        'installmentOptions' => null,
        'softDescriptor' => null,
        'additionalDetails' => null
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
        'orderId' => 'orderId',
        'billing' => 'billing',
        'shipping' => 'shipping',
        'industrySpecificExtensions' => 'industrySpecificExtensions',
        'purchaseCard' => 'purchaseCard',
        'installmentOptions' => 'installmentOptions',
        'softDescriptor' => 'softDescriptor',
        'additionalDetails' => 'additionalDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orderId' => 'setOrderId',
        'billing' => 'setBilling',
        'shipping' => 'setShipping',
        'industrySpecificExtensions' => 'setIndustrySpecificExtensions',
        'purchaseCard' => 'setPurchaseCard',
        'installmentOptions' => 'setInstallmentOptions',
        'softDescriptor' => 'setSoftDescriptor',
        'additionalDetails' => 'setAdditionalDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orderId' => 'getOrderId',
        'billing' => 'getBilling',
        'shipping' => 'getShipping',
        'industrySpecificExtensions' => 'getIndustrySpecificExtensions',
        'purchaseCard' => 'getPurchaseCard',
        'installmentOptions' => 'getInstallmentOptions',
        'softDescriptor' => 'getSoftDescriptor',
        'additionalDetails' => 'getAdditionalDetails'
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
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['industrySpecificExtensions'] = isset($data['industrySpecificExtensions']) ? $data['industrySpecificExtensions'] : null;
        $this->container['purchaseCard'] = isset($data['purchaseCard']) ? $data['purchaseCard'] : null;
        $this->container['installmentOptions'] = isset($data['installmentOptions']) ? $data['installmentOptions'] : null;
        $this->container['softDescriptor'] = isset($data['softDescriptor']) ? $data['softDescriptor'] : null;
        $this->container['additionalDetails'] = isset($data['additionalDetails']) ? $data['additionalDetails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 100)) {
            $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 100.";
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
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId Client Order ID if supplied by client.
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        if (!is_null($orderId) && (mb_strlen($orderId) > 100)) {
            throw new \InvalidArgumentException('invalid length for $orderId when calling Order., must be smaller than or equal to 100.');
        }

        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \FirstData\FirstApi\Client\Model\Billing|null
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \FirstData\FirstApi\Client\Model\Billing|null $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \FirstData\FirstApi\Client\Model\Shipping|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \FirstData\FirstApi\Client\Model\Shipping|null $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets industrySpecificExtensions
     *
     * @return \FirstData\FirstApi\Client\Model\IndustrySpecificExtensions|null
     */
    public function getIndustrySpecificExtensions()
    {
        return $this->container['industrySpecificExtensions'];
    }

    /**
     * Sets industrySpecificExtensions
     *
     * @param \FirstData\FirstApi\Client\Model\IndustrySpecificExtensions|null $industrySpecificExtensions industrySpecificExtensions
     *
     * @return $this
     */
    public function setIndustrySpecificExtensions($industrySpecificExtensions)
    {
        $this->container['industrySpecificExtensions'] = $industrySpecificExtensions;

        return $this;
    }

    /**
     * Gets purchaseCard
     *
     * @return \FirstData\FirstApi\Client\Model\PurchaseCards|null
     */
    public function getPurchaseCard()
    {
        return $this->container['purchaseCard'];
    }

    /**
     * Sets purchaseCard
     *
     * @param \FirstData\FirstApi\Client\Model\PurchaseCards|null $purchaseCard purchaseCard
     *
     * @return $this
     */
    public function setPurchaseCard($purchaseCard)
    {
        $this->container['purchaseCard'] = $purchaseCard;

        return $this;
    }

    /**
     * Gets installmentOptions
     *
     * @return \FirstData\FirstApi\Client\Model\InstallmentOptions|null
     */
    public function getInstallmentOptions()
    {
        return $this->container['installmentOptions'];
    }

    /**
     * Sets installmentOptions
     *
     * @param \FirstData\FirstApi\Client\Model\InstallmentOptions|null $installmentOptions installmentOptions
     *
     * @return $this
     */
    public function setInstallmentOptions($installmentOptions)
    {
        $this->container['installmentOptions'] = $installmentOptions;

        return $this;
    }

    /**
     * Gets softDescriptor
     *
     * @return \FirstData\FirstApi\Client\Model\SoftDescriptor|null
     */
    public function getSoftDescriptor()
    {
        return $this->container['softDescriptor'];
    }

    /**
     * Sets softDescriptor
     *
     * @param \FirstData\FirstApi\Client\Model\SoftDescriptor|null $softDescriptor softDescriptor
     *
     * @return $this
     */
    public function setSoftDescriptor($softDescriptor)
    {
        $this->container['softDescriptor'] = $softDescriptor;

        return $this;
    }

    /**
     * Gets additionalDetails
     *
     * @return \FirstData\FirstApi\Client\Model\AdditionalDetails|null
     */
    public function getAdditionalDetails()
    {
        return $this->container['additionalDetails'];
    }

    /**
     * Sets additionalDetails
     *
     * @param \FirstData\FirstApi\Client\Model\AdditionalDetails|null $additionalDetails additionalDetails
     *
     * @return $this
     */
    public function setAdditionalDetails($additionalDetails)
    {
        $this->container['additionalDetails'] = $additionalDetails;

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


