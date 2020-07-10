<?php
/**
 * ClassicMode
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
 * ClassicMode Class Doc Comment
 *
 * @category Class
 * @description Object contains classic mode branding style properties.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClassicMode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClassicMode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'backgroundColor' => '\FirstData\FirstApi\Client\Model\BackgroundColor',
        'mobile' => '\FirstData\FirstApi\Client\Model\Mobile',
        'amountTitle' => '\FirstData\FirstApi\Client\Model\FontProperties',
        'superscription' => '\FirstData\FirstApi\Client\Model\FontProperties',
        'individualText' => '\FirstData\FirstApi\Client\Model\FontProperties',
        'label' => '\FirstData\FirstApi\Client\Model\FontProperties',
        'normalText' => '\FirstData\FirstApi\Client\Model\FontProperties',
        'buttons' => '\FirstData\FirstApi\Client\Model\Properties',
        'anchor' => '\FirstData\FirstApi\Client\Model\Properties',
        'systemMessages' => '\FirstData\FirstApi\Client\Model\Properties'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'backgroundColor' => null,
        'mobile' => null,
        'amountTitle' => null,
        'superscription' => null,
        'individualText' => null,
        'label' => null,
        'normalText' => null,
        'buttons' => null,
        'anchor' => null,
        'systemMessages' => null
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
        'backgroundColor' => 'backgroundColor',
        'mobile' => 'mobile',
        'amountTitle' => 'amountTitle',
        'superscription' => 'superscription',
        'individualText' => 'individualText',
        'label' => 'label',
        'normalText' => 'normalText',
        'buttons' => 'buttons',
        'anchor' => 'anchor',
        'systemMessages' => 'systemMessages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'backgroundColor' => 'setBackgroundColor',
        'mobile' => 'setMobile',
        'amountTitle' => 'setAmountTitle',
        'superscription' => 'setSuperscription',
        'individualText' => 'setIndividualText',
        'label' => 'setLabel',
        'normalText' => 'setNormalText',
        'buttons' => 'setButtons',
        'anchor' => 'setAnchor',
        'systemMessages' => 'setSystemMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'backgroundColor' => 'getBackgroundColor',
        'mobile' => 'getMobile',
        'amountTitle' => 'getAmountTitle',
        'superscription' => 'getSuperscription',
        'individualText' => 'getIndividualText',
        'label' => 'getLabel',
        'normalText' => 'getNormalText',
        'buttons' => 'getButtons',
        'anchor' => 'getAnchor',
        'systemMessages' => 'getSystemMessages'
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
        $this->container['backgroundColor'] = isset($data['backgroundColor']) ? $data['backgroundColor'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['amountTitle'] = isset($data['amountTitle']) ? $data['amountTitle'] : null;
        $this->container['superscription'] = isset($data['superscription']) ? $data['superscription'] : null;
        $this->container['individualText'] = isset($data['individualText']) ? $data['individualText'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['normalText'] = isset($data['normalText']) ? $data['normalText'] : null;
        $this->container['buttons'] = isset($data['buttons']) ? $data['buttons'] : null;
        $this->container['anchor'] = isset($data['anchor']) ? $data['anchor'] : null;
        $this->container['systemMessages'] = isset($data['systemMessages']) ? $data['systemMessages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets backgroundColor
     *
     * @return \FirstData\FirstApi\Client\Model\BackgroundColor|null
     */
    public function getBackgroundColor()
    {
        return $this->container['backgroundColor'];
    }

    /**
     * Sets backgroundColor
     *
     * @param \FirstData\FirstApi\Client\Model\BackgroundColor|null $backgroundColor backgroundColor
     *
     * @return $this
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->container['backgroundColor'] = $backgroundColor;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return \FirstData\FirstApi\Client\Model\Mobile|null
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param \FirstData\FirstApi\Client\Model\Mobile|null $mobile mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets amountTitle
     *
     * @return \FirstData\FirstApi\Client\Model\FontProperties|null
     */
    public function getAmountTitle()
    {
        return $this->container['amountTitle'];
    }

    /**
     * Sets amountTitle
     *
     * @param \FirstData\FirstApi\Client\Model\FontProperties|null $amountTitle amountTitle
     *
     * @return $this
     */
    public function setAmountTitle($amountTitle)
    {
        $this->container['amountTitle'] = $amountTitle;

        return $this;
    }

    /**
     * Gets superscription
     *
     * @return \FirstData\FirstApi\Client\Model\FontProperties|null
     */
    public function getSuperscription()
    {
        return $this->container['superscription'];
    }

    /**
     * Sets superscription
     *
     * @param \FirstData\FirstApi\Client\Model\FontProperties|null $superscription superscription
     *
     * @return $this
     */
    public function setSuperscription($superscription)
    {
        $this->container['superscription'] = $superscription;

        return $this;
    }

    /**
     * Gets individualText
     *
     * @return \FirstData\FirstApi\Client\Model\FontProperties|null
     */
    public function getIndividualText()
    {
        return $this->container['individualText'];
    }

    /**
     * Sets individualText
     *
     * @param \FirstData\FirstApi\Client\Model\FontProperties|null $individualText individualText
     *
     * @return $this
     */
    public function setIndividualText($individualText)
    {
        $this->container['individualText'] = $individualText;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \FirstData\FirstApi\Client\Model\FontProperties|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \FirstData\FirstApi\Client\Model\FontProperties|null $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets normalText
     *
     * @return \FirstData\FirstApi\Client\Model\FontProperties|null
     */
    public function getNormalText()
    {
        return $this->container['normalText'];
    }

    /**
     * Sets normalText
     *
     * @param \FirstData\FirstApi\Client\Model\FontProperties|null $normalText normalText
     *
     * @return $this
     */
    public function setNormalText($normalText)
    {
        $this->container['normalText'] = $normalText;

        return $this;
    }

    /**
     * Gets buttons
     *
     * @return \FirstData\FirstApi\Client\Model\Properties|null
     */
    public function getButtons()
    {
        return $this->container['buttons'];
    }

    /**
     * Sets buttons
     *
     * @param \FirstData\FirstApi\Client\Model\Properties|null $buttons buttons
     *
     * @return $this
     */
    public function setButtons($buttons)
    {
        $this->container['buttons'] = $buttons;

        return $this;
    }

    /**
     * Gets anchor
     *
     * @return \FirstData\FirstApi\Client\Model\Properties|null
     */
    public function getAnchor()
    {
        return $this->container['anchor'];
    }

    /**
     * Sets anchor
     *
     * @param \FirstData\FirstApi\Client\Model\Properties|null $anchor anchor
     *
     * @return $this
     */
    public function setAnchor($anchor)
    {
        $this->container['anchor'] = $anchor;

        return $this;
    }

    /**
     * Gets systemMessages
     *
     * @return \FirstData\FirstApi\Client\Model\Properties|null
     */
    public function getSystemMessages()
    {
        return $this->container['systemMessages'];
    }

    /**
     * Sets systemMessages
     *
     * @param \FirstData\FirstApi\Client\Model\Properties|null $systemMessages systemMessages
     *
     * @return $this
     */
    public function setSystemMessages($systemMessages)
    {
        $this->container['systemMessages'] = $systemMessages;

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


