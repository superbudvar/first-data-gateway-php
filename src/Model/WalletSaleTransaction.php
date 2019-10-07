<?php
/**
 * WalletSaleTransaction
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
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * WalletSaleTransaction Class Doc Comment
 *
 * @category Class
 * @description Request to create sale primary transaction using digital wallet.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WalletSaleTransaction extends PrimaryTransaction 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WalletSaleTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'walletPaymentMethod' => '\FirstData\FirstApi\Client\Model\WalletPaymentMethod',
        'paymentFacilitator' => '\FirstData\FirstApi\Client\Model\PaymentFacilitator'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'walletPaymentMethod' => null,
        'paymentFacilitator' => null
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
        'walletPaymentMethod' => 'walletPaymentMethod',
        'paymentFacilitator' => 'paymentFacilitator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'walletPaymentMethod' => 'setWalletPaymentMethod',
        'paymentFacilitator' => 'setPaymentFacilitator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'walletPaymentMethod' => 'getWalletPaymentMethod',
        'paymentFacilitator' => 'getPaymentFacilitator'
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

        $this->container['walletPaymentMethod'] = isset($data['walletPaymentMethod']) ? $data['walletPaymentMethod'] : null;
        $this->container['paymentFacilitator'] = isset($data['paymentFacilitator']) ? $data['paymentFacilitator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['walletPaymentMethod'] === null) {
            $invalidProperties[] = "'walletPaymentMethod' can't be null";
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
     * Gets walletPaymentMethod
     *
     * @return \FirstData\FirstApi\Client\Model\WalletPaymentMethod
     */
    public function getWalletPaymentMethod()
    {
        return $this->container['walletPaymentMethod'];
    }

    /**
     * Sets walletPaymentMethod
     *
     * @param \FirstData\FirstApi\Client\Model\WalletPaymentMethod $walletPaymentMethod walletPaymentMethod
     *
     * @return $this
     */
    public function setWalletPaymentMethod($walletPaymentMethod)
    {
        $this->container['walletPaymentMethod'] = $walletPaymentMethod;

        return $this;
    }

    /**
     * Gets paymentFacilitator
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentFacilitator|null
     */
    public function getPaymentFacilitator()
    {
        return $this->container['paymentFacilitator'];
    }

    /**
     * Sets paymentFacilitator
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentFacilitator|null $paymentFacilitator paymentFacilitator
     *
     * @return $this
     */
    public function setPaymentFacilitator($paymentFacilitator)
    {
        $this->container['paymentFacilitator'] = $paymentFacilitator;

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


