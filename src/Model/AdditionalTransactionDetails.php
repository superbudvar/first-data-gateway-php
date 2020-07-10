<?php
/**
 * AdditionalTransactionDetails
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
 * AdditionalTransactionDetails Class Doc Comment
 *
 * @category Class
 * @description Additional transaction details for transaction response.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdditionalTransactionDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalTransactionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'comments' => 'string',
        'invoiceNumber' => 'string',
        'purchaseOrderNumber' => 'string',
        'disbursementTransType' => 'string',
        'walletProvider' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'comments' => null,
        'invoiceNumber' => null,
        'purchaseOrderNumber' => null,
        'disbursementTransType' => null,
        'walletProvider' => null
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
        'comments' => 'comments',
        'invoiceNumber' => 'invoiceNumber',
        'purchaseOrderNumber' => 'purchaseOrderNumber',
        'disbursementTransType' => 'disbursementTransType',
        'walletProvider' => 'walletProvider'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comments' => 'setComments',
        'invoiceNumber' => 'setInvoiceNumber',
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
        'disbursementTransType' => 'setDisbursementTransType',
        'walletProvider' => 'setWalletProvider'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comments' => 'getComments',
        'invoiceNumber' => 'getInvoiceNumber',
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
        'disbursementTransType' => 'getDisbursementTransType',
        'walletProvider' => 'getWalletProvider'
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

    const DISBURSEMENT_TRANS_TYPE_FUNDING = 'FUNDING';
    const DISBURSEMENT_TRANS_TYPE_DISBURSEMENT = 'DISBURSEMENT';
    const WALLET_PROVIDER_GOOGLE_PAY = 'GOOGLE_PAY';
    const WALLET_PROVIDER_APPLE_PAY = 'APPLE_PAY';
    const WALLET_PROVIDER_SAMSUNG_PAY = 'SAMSUNG_PAY';
    const WALLET_PROVIDER_MASTERPASS = 'MASTERPASS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDisbursementTransTypeAllowableValues()
    {
        return [
            self::DISBURSEMENT_TRANS_TYPE_FUNDING,
            self::DISBURSEMENT_TRANS_TYPE_DISBURSEMENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWalletProviderAllowableValues()
    {
        return [
            self::WALLET_PROVIDER_GOOGLE_PAY,
            self::WALLET_PROVIDER_APPLE_PAY,
            self::WALLET_PROVIDER_SAMSUNG_PAY,
            self::WALLET_PROVIDER_MASTERPASS,
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
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['invoiceNumber'] = isset($data['invoiceNumber']) ? $data['invoiceNumber'] : null;
        $this->container['purchaseOrderNumber'] = isset($data['purchaseOrderNumber']) ? $data['purchaseOrderNumber'] : null;
        $this->container['disbursementTransType'] = isset($data['disbursementTransType']) ? $data['disbursementTransType'] : null;
        $this->container['walletProvider'] = isset($data['walletProvider']) ? $data['walletProvider'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 1024)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['invoiceNumber']) && (mb_strlen($this->container['invoiceNumber']) > 48)) {
            $invalidProperties[] = "invalid value for 'invoiceNumber', the character length must be smaller than or equal to 48.";
        }

        if (!is_null($this->container['purchaseOrderNumber']) && (mb_strlen($this->container['purchaseOrderNumber']) > 128)) {
            $invalidProperties[] = "invalid value for 'purchaseOrderNumber', the character length must be smaller than or equal to 128.";
        }

        $allowedValues = $this->getDisbursementTransTypeAllowableValues();
        if (!is_null($this->container['disbursementTransType']) && !in_array($this->container['disbursementTransType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'disbursementTransType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWalletProviderAllowableValues();
        if (!is_null($this->container['walletProvider']) && !in_array($this->container['walletProvider'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'walletProvider', must be one of '%s'",
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
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments Comment for the payment.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        if (!is_null($comments) && (mb_strlen($comments) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling AdditionalTransactionDetails., must be smaller than or equal to 1024.');
        }

        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets invoiceNumber
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param string|null $invoiceNumber Invoice number.
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        if (!is_null($invoiceNumber) && (mb_strlen($invoiceNumber) > 48)) {
            throw new \InvalidArgumentException('invalid length for $invoiceNumber when calling AdditionalTransactionDetails., must be smaller than or equal to 48.');
        }

        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets purchaseOrderNumber
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string|null $purchaseOrderNumber Purchase order number.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        if (!is_null($purchaseOrderNumber) && (mb_strlen($purchaseOrderNumber) > 128)) {
            throw new \InvalidArgumentException('invalid length for $purchaseOrderNumber when calling AdditionalTransactionDetails., must be smaller than or equal to 128.');
        }

        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets disbursementTransType
     *
     * @return string|null
     */
    public function getDisbursementTransType()
    {
        return $this->container['disbursementTransType'];
    }

    /**
     * Sets disbursementTransType
     *
     * @param string|null $disbursementTransType The type of debit disbursement transaction.
     *
     * @return $this
     */
    public function setDisbursementTransType($disbursementTransType)
    {
        $allowedValues = $this->getDisbursementTransTypeAllowableValues();
        if (!is_null($disbursementTransType) && !in_array($disbursementTransType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'disbursementTransType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['disbursementTransType'] = $disbursementTransType;

        return $this;
    }

    /**
     * Gets walletProvider
     *
     * @return string|null
     */
    public function getWalletProvider()
    {
        return $this->container['walletProvider'];
    }

    /**
     * Sets walletProvider
     *
     * @param string|null $walletProvider The wallet provider type.
     *
     * @return $this
     */
    public function setWalletProvider($walletProvider)
    {
        $allowedValues = $this->getWalletProviderAllowableValues();
        if (!is_null($walletProvider) && !in_array($walletProvider, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'walletProvider', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['walletProvider'] = $walletProvider;

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


