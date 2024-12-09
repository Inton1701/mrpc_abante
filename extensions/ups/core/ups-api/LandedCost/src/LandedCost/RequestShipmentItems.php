<?php
/**
 * RequestShipmentItems
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\LandedCost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Landed Cost Quote API
 *
 * The Landed Cost Quote API allows you to estimate the all-inclusive cost of international shipments - including applicable duties, VAT, taxes, brokerage fees, and other fees. Required parameters include the currency and shipment details, such as the commodity ID, price, quantity, and country code of origin.  Key Business Values: - **Enhanced Customer Experience**: Get a quick and accurate quote on the landed cost of a shipment, including the cost of goods, transportation, and any other fees associated with getting the goods to their destination. - **Operational Efficiency**: Simplify the process of calculating landed costs by eliminating the need to manually research and calculate all of the different fees involved. - **Data-Driven Decision Making**: Improve decision-making by having a clear understanding of the total cost of shipping goods before you commit to a purchase.. - **Optimizing Cash Flow**: Streamline your shipping process by integrating the Landed Cost Quote API into your existing systems.
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

namespace UPS\LandedCost\LandedCost;

use \ArrayAccess;
use \UPS\LandedCost\ObjectSerializer;

/**
 * RequestShipmentItems Class Doc Comment
 *
 * @category Class
 * @package  UPS\LandedCost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequestShipmentItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Request_ShipmentItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commodity_id' => 'string',
        'gross_weight' => 'float',
        'gross_weight_unit' => 'string',
        'price_each' => 'float',
        'commodity_currency_code' => 'string',
        'quantity' => 'int',
        'uom' => 'string',
        'hs_code' => 'string',
        'description' => 'string',
        'origin_country_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'commodity_id' => null,
        'gross_weight' => null,
        'gross_weight_unit' => null,
        'price_each' => null,
        'commodity_currency_code' => null,
        'quantity' => null,
        'uom' => null,
        'hs_code' => null,
        'description' => null,
        'origin_country_code' => null
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
        'commodity_id' => 'commodityId',
        'gross_weight' => 'grossWeight',
        'gross_weight_unit' => 'grossWeightUnit',
        'price_each' => 'priceEach',
        'commodity_currency_code' => 'commodityCurrencyCode',
        'quantity' => 'quantity',
        'uom' => 'UOM',
        'hs_code' => 'hsCode',
        'description' => 'description',
        'origin_country_code' => 'originCountryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commodity_id' => 'setCommodityId',
        'gross_weight' => 'setGrossWeight',
        'gross_weight_unit' => 'setGrossWeightUnit',
        'price_each' => 'setPriceEach',
        'commodity_currency_code' => 'setCommodityCurrencyCode',
        'quantity' => 'setQuantity',
        'uom' => 'setUom',
        'hs_code' => 'setHsCode',
        'description' => 'setDescription',
        'origin_country_code' => 'setOriginCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commodity_id' => 'getCommodityId',
        'gross_weight' => 'getGrossWeight',
        'gross_weight_unit' => 'getGrossWeightUnit',
        'price_each' => 'getPriceEach',
        'commodity_currency_code' => 'getCommodityCurrencyCode',
        'quantity' => 'getQuantity',
        'uom' => 'getUom',
        'hs_code' => 'getHsCode',
        'description' => 'getDescription',
        'origin_country_code' => 'getOriginCountryCode'
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
        $this->container['commodity_id'] = isset($data['commodity_id']) ? $data['commodity_id'] : null;
        $this->container['gross_weight'] = isset($data['gross_weight']) ? $data['gross_weight'] : null;
        $this->container['gross_weight_unit'] = isset($data['gross_weight_unit']) ? $data['gross_weight_unit'] : null;
        $this->container['price_each'] = isset($data['price_each']) ? $data['price_each'] : null;
        $this->container['commodity_currency_code'] = isset($data['commodity_currency_code']) ? $data['commodity_currency_code'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['hs_code'] = isset($data['hs_code']) ? $data['hs_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['origin_country_code'] = isset($data['origin_country_code']) ? $data['origin_country_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['commodity_id'] === null) {
            $invalidProperties[] = "'commodity_id' can't be null";
        }
        if ($this->container['price_each'] === null) {
            $invalidProperties[] = "'price_each' can't be null";
        }
        if ($this->container['commodity_currency_code'] === null) {
            $invalidProperties[] = "'commodity_currency_code' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['uom'] === null) {
            $invalidProperties[] = "'uom' can't be null";
        }
        if ($this->container['origin_country_code'] === null) {
            $invalidProperties[] = "'origin_country_code' can't be null";
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
     * Gets commodity_id
     *
     * @return string
     */
    public function getCommodityId()
    {
        return $this->container['commodity_id'];
    }

    /**
     * Sets commodity_id
     *
     * @param string $commodity_id Commodity ID is used to associate tariffs with product in the output. Should be unique for each commodity in a request. It is an arbitrary string provided by the user of the API that will be returned with the Landed Cost Quote to indicate which commodity the tariffs apply to.
     *
     * @return $this
     */
    public function setCommodityId($commodity_id)
    {
        $this->container['commodity_id'] = $commodity_id;

        return $this;
    }

    /**
     * Gets gross_weight
     *
     * @return float
     */
    public function getGrossWeight()
    {
        return $this->container['gross_weight'];
    }

    /**
     * Sets gross_weight
     *
     * @param float $gross_weight Specifies the gross weight of the commodity as any non-negative value.
     *
     * @return $this
     */
    public function setGrossWeight($gross_weight)
    {
        $this->container['gross_weight'] = $gross_weight;

        return $this;
    }

    /**
     * Gets gross_weight_unit
     *
     * @return string
     */
    public function getGrossWeightUnit()
    {
        return $this->container['gross_weight_unit'];
    }

    /**
     * Sets gross_weight_unit
     *
     * @param string $gross_weight_unit Specifies the units of the gross weight. Required if GrossWeight is used. If GrossWeight is not specified, this value must not be set to anything but null. Supported values: LB, KG
     *
     * @return $this
     */
    public function setGrossWeightUnit($gross_weight_unit)
    {
        $this->container['gross_weight_unit'] = $gross_weight_unit;

        return $this;
    }

    /**
     * Gets price_each
     *
     * @return float
     */
    public function getPriceEach()
    {
        return $this->container['price_each'];
    }

    /**
     * Sets price_each
     *
     * @param float $price_each Specifies the price for each commodity unit in the settlement currency. The total price of the entire number of shipmentItems may not exceed 999999999999.99
     *
     * @return $this
     */
    public function setPriceEach($price_each)
    {
        $this->container['price_each'] = $price_each;

        return $this;
    }

    /**
     * Gets commodity_currency_code
     *
     * @return string
     */
    public function getCommodityCurrencyCode()
    {
        return $this->container['commodity_currency_code'];
    }

    /**
     * Sets commodity_currency_code
     *
     * @param string $commodity_currency_code Specifies the Currency Code used for commodity price. All commodities must have the same currency code.
     *
     * @return $this
     */
    public function setCommodityCurrencyCode($commodity_currency_code)
    {
        $this->container['commodity_currency_code'] = $commodity_currency_code;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Specifies the number of product units to be shipped. The total price of the entire number of shipmentItems may not exceed 999999999999.99, 1 or greater than 1
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets uom
     *
     * @return string
     */
    public function getUom()
    {
        return $this->container['uom'];
    }

    /**
     * Sets uom
     *
     * @param string $uom Specifies unit of measure. Check UOM List in the Appendices section.
     *
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

        return $this;
    }

    /**
     * Gets hs_code
     *
     * @return string
     */
    public function getHsCode()
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     *
     * @param string $hs_code Specifies a valid HS or HTS code for the shipment's destination or import country. This field is required if description is not provided.
     *
     * @return $this
     */
    public function setHsCode($hs_code)
    {
        $this->container['hs_code'] = $hs_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description This field is populated with description of the commodity. This field is required if hsCode is not provided.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets origin_country_code
     *
     * @return string
     */
    public function getOriginCountryCode()
    {
        return $this->container['origin_country_code'];
    }

    /**
     * Sets origin_country_code
     *
     * @param string $origin_country_code Country of Manufacture or origin.
     *
     * @return $this
     */
    public function setOriginCountryCode($origin_country_code)
    {
        $this->container['origin_country_code'] = $origin_country_code;

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
