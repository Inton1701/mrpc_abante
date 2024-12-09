<?php
/**
 * LocationSearchCriteriaSearchOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Locator
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

namespace UPS\Locator\Locator;

use \ArrayAccess;
use \UPS\Locator\ObjectSerializer;

/**
 * LocationSearchCriteriaSearchOption Class Doc Comment
 *
 * @category Class
 * @description SearchOption contains the information that forms the basis of the location search, It contains the criteria for search by Locations, Retail Locations, Additional Services, or Program Types.  There should be one container for each type of search the user may wish to do. The user can specify either search by Locations or Retail Locations, but not both.  If this container is missing, the default search would be for The UPS Store, UPS Center, UPS Drop Box, and Authorized Shipping Outlet location types.
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocationSearchCriteriaSearchOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LocationSearchCriteria_SearchOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'option_type' => '\UPS\Locator\Locator\SearchOptionOptionType',
        'option_code' => '\UPS\Locator\Locator\SearchOptionOptionCode[]',
        'relation' => '\UPS\Locator\Locator\SearchOptionRelation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'option_type' => null,
        'option_code' => null,
        'relation' => null
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
        'option_type' => 'OptionType',
        'option_code' => 'OptionCode',
        'relation' => 'Relation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'option_type' => 'setOptionType',
        'option_code' => 'setOptionCode',
        'relation' => 'setRelation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'option_type' => 'getOptionType',
        'option_code' => 'getOptionCode',
        'relation' => 'getRelation'
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
        $this->container['option_type'] = isset($data['option_type']) ? $data['option_type'] : null;
        $this->container['option_code'] = isset($data['option_code']) ? $data['option_code'] : null;
        $this->container['relation'] = isset($data['relation']) ? $data['relation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['option_type'] === null) {
            $invalidProperties[] = "'option_type' can't be null";
        }
        if ($this->container['option_code'] === null) {
            $invalidProperties[] = "'option_code' can't be null";
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
     * Gets option_type
     *
     * @return \UPS\Locator\Locator\SearchOptionOptionType
     */
    public function getOptionType()
    {
        return $this->container['option_type'];
    }

    /**
     * Sets option_type
     *
     * @param \UPS\Locator\Locator\SearchOptionOptionType $option_type option_type
     *
     * @return $this
     */
    public function setOptionType($option_type)
    {
        $this->container['option_type'] = $option_type;

        return $this;
    }

    /**
     * Gets option_code
     *
     * @return \UPS\Locator\Locator\SearchOptionOptionCode[]
     */
    public function getOptionCode()
    {
        return $this->container['option_code'];
    }

    /**
     * Sets option_code
     *
     * @param \UPS\Locator\Locator\SearchOptionOptionCode[] $option_code option_code
     *
     * @return $this
     */
    public function setOptionCode($option_code)
    {
        $this->container['option_code'] = $option_code;

        return $this;
    }

    /**
     * Gets relation
     *
     * @return \UPS\Locator\Locator\SearchOptionRelation
     */
    public function getRelation()
    {
        return $this->container['relation'];
    }

    /**
     * Sets relation
     *
     * @param \UPS\Locator\Locator\SearchOptionRelation $relation relation
     *
     * @return $this
     */
    public function setRelation($relation)
    {
        $this->container['relation'] = $relation;

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
