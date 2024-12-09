<?php
/**
 * PackageServiceOptionsInsurance
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rate
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\Rating\Rating;

use \ArrayAccess;
use \UPS\Rating\ObjectSerializer;

/**
 * PackageServiceOptionsInsurance Class Doc Comment
 *
 * @category Class
 * @description Insurance Accesorial. Only one type of insurance can exist at a time on the shipment. Valid for UPS World Wide Express Freight shipments.
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackageServiceOptionsInsurance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackageServiceOptions_Insurance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'basic_flexible_parcel_indicator' => '\UPS\Rating\Rating\InsuranceBasicFlexibleParcelIndicator',
        'extended_flexible_parcel_indicator' => '\UPS\Rating\Rating\InsuranceExtendedFlexibleParcelIndicator',
        'time_in_transit_flexible_parcel_indicator' => '\UPS\Rating\Rating\InsuranceTimeInTransitFlexibleParcelIndicator'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'basic_flexible_parcel_indicator' => null,
        'extended_flexible_parcel_indicator' => null,
        'time_in_transit_flexible_parcel_indicator' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'basic_flexible_parcel_indicator' => 'BasicFlexibleParcelIndicator',
        'extended_flexible_parcel_indicator' => 'ExtendedFlexibleParcelIndicator',
        'time_in_transit_flexible_parcel_indicator' => 'TimeInTransitFlexibleParcelIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'basic_flexible_parcel_indicator' => 'setBasicFlexibleParcelIndicator',
        'extended_flexible_parcel_indicator' => 'setExtendedFlexibleParcelIndicator',
        'time_in_transit_flexible_parcel_indicator' => 'setTimeInTransitFlexibleParcelIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'basic_flexible_parcel_indicator' => 'getBasicFlexibleParcelIndicator',
        'extended_flexible_parcel_indicator' => 'getExtendedFlexibleParcelIndicator',
        'time_in_transit_flexible_parcel_indicator' => 'getTimeInTransitFlexibleParcelIndicator'
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
        return self::$swaggerModelName;
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
        $this->container['basic_flexible_parcel_indicator'] = isset($data['basic_flexible_parcel_indicator']) ? $data['basic_flexible_parcel_indicator'] : null;
        $this->container['extended_flexible_parcel_indicator'] = isset($data['extended_flexible_parcel_indicator']) ? $data['extended_flexible_parcel_indicator'] : null;
        $this->container['time_in_transit_flexible_parcel_indicator'] = isset($data['time_in_transit_flexible_parcel_indicator']) ? $data['time_in_transit_flexible_parcel_indicator'] : null;
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
     * Gets basic_flexible_parcel_indicator
     *
     * @return \UPS\Rating\Rating\InsuranceBasicFlexibleParcelIndicator
     */
    public function getBasicFlexibleParcelIndicator()
    {
        return $this->container['basic_flexible_parcel_indicator'];
    }

    /**
     * Sets basic_flexible_parcel_indicator
     *
     * @param \UPS\Rating\Rating\InsuranceBasicFlexibleParcelIndicator $basic_flexible_parcel_indicator basic_flexible_parcel_indicator
     *
     * @return $this
     */
    public function setBasicFlexibleParcelIndicator($basic_flexible_parcel_indicator)
    {
        $this->container['basic_flexible_parcel_indicator'] = $basic_flexible_parcel_indicator;

        return $this;
    }

    /**
     * Gets extended_flexible_parcel_indicator
     *
     * @return \UPS\Rating\Rating\InsuranceExtendedFlexibleParcelIndicator
     */
    public function getExtendedFlexibleParcelIndicator()
    {
        return $this->container['extended_flexible_parcel_indicator'];
    }

    /**
     * Sets extended_flexible_parcel_indicator
     *
     * @param \UPS\Rating\Rating\InsuranceExtendedFlexibleParcelIndicator $extended_flexible_parcel_indicator extended_flexible_parcel_indicator
     *
     * @return $this
     */
    public function setExtendedFlexibleParcelIndicator($extended_flexible_parcel_indicator)
    {
        $this->container['extended_flexible_parcel_indicator'] = $extended_flexible_parcel_indicator;

        return $this;
    }

    /**
     * Gets time_in_transit_flexible_parcel_indicator
     *
     * @return \UPS\Rating\Rating\InsuranceTimeInTransitFlexibleParcelIndicator
     */
    public function getTimeInTransitFlexibleParcelIndicator()
    {
        return $this->container['time_in_transit_flexible_parcel_indicator'];
    }

    /**
     * Sets time_in_transit_flexible_parcel_indicator
     *
     * @param \UPS\Rating\Rating\InsuranceTimeInTransitFlexibleParcelIndicator $time_in_transit_flexible_parcel_indicator time_in_transit_flexible_parcel_indicator
     *
     * @return $this
     */
    public function setTimeInTransitFlexibleParcelIndicator($time_in_transit_flexible_parcel_indicator)
    {
        $this->container['time_in_transit_flexible_parcel_indicator'] = $time_in_transit_flexible_parcel_indicator;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
