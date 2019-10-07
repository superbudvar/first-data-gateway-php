<?php
/**
 * FraudRegistrationDeviceItems
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
 * FraudRegistrationDeviceItems Class Doc Comment
 *
 * @category Class
 * @description Network information.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FraudRegistrationDeviceItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FraudRegistrationDeviceItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'networkType' => 'string',
        'ip' => 'string',
        'mac' => 'string',
        'ssid' => 'string',
        'bssid' => 'string',
        'userDefined' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'networkType' => null,
        'ip' => null,
        'mac' => null,
        'ssid' => null,
        'bssid' => null,
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
        'networkType' => 'networkType',
        'ip' => 'ip',
        'mac' => 'mac',
        'ssid' => 'ssid',
        'bssid' => 'bssid',
        'userDefined' => 'userDefined'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'networkType' => 'setNetworkType',
        'ip' => 'setIp',
        'mac' => 'setMac',
        'ssid' => 'setSsid',
        'bssid' => 'setBssid',
        'userDefined' => 'setUserDefined'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'networkType' => 'getNetworkType',
        'ip' => 'getIp',
        'mac' => 'getMac',
        'ssid' => 'getSsid',
        'bssid' => 'getBssid',
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

    const NETWORK_TYPE_MOBILE = 'network/mobile';
    const NETWORK_TYPE_WIFI = 'network/wifi';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNetworkTypeAllowableValues()
    {
        return [
            self::NETWORK_TYPE_MOBILE,
            self::NETWORK_TYPE_WIFI,
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
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['mac'] = isset($data['mac']) ? $data['mac'] : null;
        $this->container['ssid'] = isset($data['ssid']) ? $data['ssid'] : null;
        $this->container['bssid'] = isset($data['bssid']) ? $data['bssid'] : null;
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

        if ($this->container['networkType'] === null) {
            $invalidProperties[] = "'networkType' can't be null";
        }
        $allowedValues = $this->getNetworkTypeAllowableValues();
        if (!is_null($this->container['networkType']) && !in_array($this->container['networkType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'networkType', must be one of '%s'",
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
     * Gets networkType
     *
     * @return string
     */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
     * Sets networkType
     *
     * @param string $networkType Defines the type of network associated with the device.
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $allowedValues = $this->getNetworkTypeAllowableValues();
        if (!in_array($networkType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'networkType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['networkType'] = $networkType;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string|null $ip The IPv4 or IPv6 address of the device if the network assigned one.
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets mac
     *
     * @return string|null
     */
    public function getMac()
    {
        return $this->container['mac'];
    }

    /**
     * Sets mac
     *
     * @param string|null $mac The MAC address of the device that is connected to the Wi-Fi network.
     *
     * @return $this
     */
    public function setMac($mac)
    {
        $this->container['mac'] = $mac;

        return $this;
    }

    /**
     * Gets ssid
     *
     * @return string|null
     */
    public function getSsid()
    {
        return $this->container['ssid'];
    }

    /**
     * Sets ssid
     *
     * @param string|null $ssid The Wi-Fi networks Service Set Identifier (SSID).
     *
     * @return $this
     */
    public function setSsid($ssid)
    {
        $this->container['ssid'] = $ssid;

        return $this;
    }

    /**
     * Gets bssid
     *
     * @return string|null
     */
    public function getBssid()
    {
        return $this->container['bssid'];
    }

    /**
     * Sets bssid
     *
     * @param string|null $bssid The Wi-Fi networks Basic Service Set Identifier (BSSID).
     *
     * @return $this
     */
    public function setBssid($bssid)
    {
        $this->container['bssid'] = $bssid;

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
     * @param object|null $userDefined A JSON object that can carry any additional information about the network that might be helpful for fraud detection.
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


