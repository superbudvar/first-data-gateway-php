<?php
/**
 * ScoreOnlyRequest
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
 * ScoreOnlyRequest Class Doc Comment
 *
 * @category Class
 * @description Fraud detect request payload.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ScoreOnlyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScoreOnlyRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchantRef' => 'string',
        'transactionType' => 'string',
        'originalTransactionType' => 'string',
        'originalTransactionId' => 'string',
        'amount' => 'string',
        'currencyCode' => 'string',
        'customer' => '\FirstData\FirstApi\Client\Model\Customer',
        'billingAddress' => '\FirstData\FirstApi\Client\Model\BillingAddress',
        'device' => '\FirstData\FirstApi\Client\Model\Device',
        'loyalty' => '\FirstData\FirstApi\Client\Model\Loyalty',
        'payment' => '\FirstData\FirstApi\Client\Model\Payment',
        'merchant' => '\FirstData\FirstApi\Client\Model\Merchant',
        'order' => '\FirstData\FirstApi\Client\Model\FraudOrder',
        'userDefined' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'merchantRef' => null,
        'transactionType' => null,
        'originalTransactionType' => null,
        'originalTransactionId' => null,
        'amount' => null,
        'currencyCode' => null,
        'customer' => null,
        'billingAddress' => null,
        'device' => null,
        'loyalty' => null,
        'payment' => null,
        'merchant' => null,
        'order' => null,
        'userDefined' => null
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
        'merchantRef' => 'merchantRef',
        'transactionType' => 'transactionType',
        'originalTransactionType' => 'originalTransactionType',
        'originalTransactionId' => 'originalTransactionId',
        'amount' => 'amount',
        'currencyCode' => 'currencyCode',
        'customer' => 'customer',
        'billingAddress' => 'billingAddress',
        'device' => 'device',
        'loyalty' => 'loyalty',
        'payment' => 'payment',
        'merchant' => 'merchant',
        'order' => 'order',
        'userDefined' => 'userDefined'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantRef' => 'setMerchantRef',
        'transactionType' => 'setTransactionType',
        'originalTransactionType' => 'setOriginalTransactionType',
        'originalTransactionId' => 'setOriginalTransactionId',
        'amount' => 'setAmount',
        'currencyCode' => 'setCurrencyCode',
        'customer' => 'setCustomer',
        'billingAddress' => 'setBillingAddress',
        'device' => 'setDevice',
        'loyalty' => 'setLoyalty',
        'payment' => 'setPayment',
        'merchant' => 'setMerchant',
        'order' => 'setOrder',
        'userDefined' => 'setUserDefined'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantRef' => 'getMerchantRef',
        'transactionType' => 'getTransactionType',
        'originalTransactionType' => 'getOriginalTransactionType',
        'originalTransactionId' => 'getOriginalTransactionId',
        'amount' => 'getAmount',
        'currencyCode' => 'getCurrencyCode',
        'customer' => 'getCustomer',
        'billingAddress' => 'getBillingAddress',
        'device' => 'getDevice',
        'loyalty' => 'getLoyalty',
        'payment' => 'getPayment',
        'merchant' => 'getMerchant',
        'order' => 'getOrder',
        'userDefined' => 'getUserDefined'
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

    const ORIGINAL_TRANSACTION_TYPE_AUTHORIZATION = 'transaction/authorization';
    const ORIGINAL_TRANSACTION_TYPE_AUTHORIZATION_REVERSAL = 'transaction/authorization-reversal';
    const ORIGINAL_TRANSACTION_TYPE_DEPOSIT = 'transaction/deposit';
    const ORIGINAL_TRANSACTION_TYPE_DEPOSIT_REVERSAL = 'transaction/deposit-reversal';
    const ORIGINAL_TRANSACTION_TYPE_PURCHASE = 'transaction/purchase';
    const ORIGINAL_TRANSACTION_TYPE_PURCHASE_REVERSAL = 'transaction/purchase-reversal';
    const ORIGINAL_TRANSACTION_TYPE_REFUND_AUTHORIZATION = 'transaction/refund-authorization';
    const ORIGINAL_TRANSACTION_TYPE_REFUND_DEPOSIT = 'transaction/refund-deposit';
    const ORIGINAL_TRANSACTION_TYPE_VERIFICATION = 'transaction/verification';
    const ORIGINAL_TRANSACTION_TYPE_BALANCE_INQUIRY = 'transaction/balance-inquiry';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginalTransactionTypeAllowableValues()
    {
        return [
            self::ORIGINAL_TRANSACTION_TYPE_AUTHORIZATION,
            self::ORIGINAL_TRANSACTION_TYPE_AUTHORIZATION_REVERSAL,
            self::ORIGINAL_TRANSACTION_TYPE_DEPOSIT,
            self::ORIGINAL_TRANSACTION_TYPE_DEPOSIT_REVERSAL,
            self::ORIGINAL_TRANSACTION_TYPE_PURCHASE,
            self::ORIGINAL_TRANSACTION_TYPE_PURCHASE_REVERSAL,
            self::ORIGINAL_TRANSACTION_TYPE_REFUND_AUTHORIZATION,
            self::ORIGINAL_TRANSACTION_TYPE_REFUND_DEPOSIT,
            self::ORIGINAL_TRANSACTION_TYPE_VERIFICATION,
            self::ORIGINAL_TRANSACTION_TYPE_BALANCE_INQUIRY,
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
        $this->container['merchantRef'] = isset($data['merchantRef']) ? $data['merchantRef'] : null;
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['originalTransactionType'] = isset($data['originalTransactionType']) ? $data['originalTransactionType'] : null;
        $this->container['originalTransactionId'] = isset($data['originalTransactionId']) ? $data['originalTransactionId'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['loyalty'] = isset($data['loyalty']) ? $data['loyalty'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['userDefined'] = isset($data['userDefined']) ? $data['userDefined'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transactionType'] === null) {
            $invalidProperties[] = "'transactionType' can't be null";
        }
        if ($this->container['originalTransactionType'] === null) {
            $invalidProperties[] = "'originalTransactionType' can't be null";
        }
        $allowedValues = $this->getOriginalTransactionTypeAllowableValues();
        if (!is_null($this->container['originalTransactionType']) && !in_array($this->container['originalTransactionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'originalTransactionType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['originalTransactionId'] === null) {
            $invalidProperties[] = "'originalTransactionId' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['originalTransactionId'])) {
            $invalidProperties[] = "invalid value for 'originalTransactionId', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['amount'])) {
            $invalidProperties[] = "invalid value for 'amount', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['currencyCode'] === null) {
            $invalidProperties[] = "'currencyCode' can't be null";
        }
        if (!preg_match("/([A-Z]{3})|([0-9]{3})/", $this->container['currencyCode'])) {
            $invalidProperties[] = "invalid value for 'currencyCode', must be conform to the pattern /([A-Z]{3})|([0-9]{3})/.";
        }

        if ($this->container['payment'] === null) {
            $invalidProperties[] = "'payment' can't be null";
        }
        if ($this->container['merchant'] === null) {
            $invalidProperties[] = "'merchant' can't be null";
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
     * Gets merchantRef
     *
     * @return string|null
     */
    public function getMerchantRef()
    {
        return $this->container['merchantRef'];
    }

    /**
     * Sets merchantRef
     *
     * @param string|null $merchantRef Merchant reference code. Used by FirstAPI and reflected in settlement records and Webhook notifications. Typically, the merchantRef field is the purchase order number or unique sequence value associated to a given transaction.
     *
     * @return $this
     */
    public function setMerchantRef($merchantRef)
    {
        $this->container['merchantRef'] = $merchantRef;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string $transactionType Type of transaction merchant wants to process.
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets originalTransactionType
     *
     * @return string
     */
    public function getOriginalTransactionType()
    {
        return $this->container['originalTransactionType'];
    }

    /**
     * Sets originalTransactionType
     *
     * @param string $originalTransactionType Defines the type of the original transaction that is being evaluated for the Fraud Score.
     *
     * @return $this
     */
    public function setOriginalTransactionType($originalTransactionType)
    {
        $allowedValues = $this->getOriginalTransactionTypeAllowableValues();
        if (!in_array($originalTransactionType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'originalTransactionType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['originalTransactionType'] = $originalTransactionType;

        return $this;
    }

    /**
     * Gets originalTransactionId
     *
     * @return string
     */
    public function getOriginalTransactionId()
    {
        return $this->container['originalTransactionId'];
    }

    /**
     * Sets originalTransactionId
     *
     * @param string $originalTransactionId The unique ID of this transaction. Must be unique for the entire system (not just within a specific merchant or industry). Subsequent requests related to the same transaction must have the same transactionId (e.g. transaction/deposit or transaction/authorization-reversal). This field is used for matching transactions with settlement and chargeback information. If there is no such ID available you may wish to compose one from fields available in both systems. Consider including backend, issuer, merchant id, date and time, amount, etc. as necessary.
     *
     * @return $this
     */
    public function setOriginalTransactionId($originalTransactionId)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $originalTransactionId))) {
            throw new \InvalidArgumentException("invalid value for $originalTransactionId when calling ScoreOnlyRequest., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['originalTransactionId'] = $originalTransactionId;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount The amount processed for the original transaction.
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $amount))) {
            throw new \InvalidArgumentException("invalid value for $amount when calling ScoreOnlyRequest., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param string $currencyCode The currency of the original transaction.
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {

        if ((!preg_match("/([A-Z]{3})|([0-9]{3})/", $currencyCode))) {
            throw new \InvalidArgumentException("invalid value for $currencyCode when calling ScoreOnlyRequest., must conform to the pattern /([A-Z]{3})|([0-9]{3})/.");
        }

        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \FirstData\FirstApi\Client\Model\Customer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \FirstData\FirstApi\Client\Model\Customer|null $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return \FirstData\FirstApi\Client\Model\BillingAddress|null
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \FirstData\FirstApi\Client\Model\BillingAddress|null $billingAddress billingAddress
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets device
     *
     * @return \FirstData\FirstApi\Client\Model\Device|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \FirstData\FirstApi\Client\Model\Device|null $device device
     *
     * @return $this
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets loyalty
     *
     * @return \FirstData\FirstApi\Client\Model\Loyalty|null
     */
    public function getLoyalty()
    {
        return $this->container['loyalty'];
    }

    /**
     * Sets loyalty
     *
     * @param \FirstData\FirstApi\Client\Model\Loyalty|null $loyalty loyalty
     *
     * @return $this
     */
    public function setLoyalty($loyalty)
    {
        $this->container['loyalty'] = $loyalty;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \FirstData\FirstApi\Client\Model\Payment
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \FirstData\FirstApi\Client\Model\Payment $payment payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return \FirstData\FirstApi\Client\Model\Merchant
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param \FirstData\FirstApi\Client\Model\Merchant $merchant merchant
     *
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \FirstData\FirstApi\Client\Model\FraudOrder|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \FirstData\FirstApi\Client\Model\FraudOrder|null $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets userDefined
     *
     * @return object|null
     */
    public function getUserDefined()
    {
        return $this->container['userDefined'];
    }

    /**
     * Sets userDefined
     *
     * @param object|null $userDefined A JSON object that can carry any additional information that might be helpful for fraud detection.
     *
     * @return $this
     */
    public function setUserDefined($userDefined)
    {
        $this->container['userDefined'] = $userDefined;

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


