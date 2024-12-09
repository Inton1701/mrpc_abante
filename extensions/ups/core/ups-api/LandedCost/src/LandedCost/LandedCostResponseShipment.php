<?php
/**
 * LandedCostResponseShipment
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
 * LandedCostResponseShipment Class Doc Comment
 *
 * @category Class
 * @description Every Landed Cost response must be based on a shipment.
 * @package  UPS\LandedCost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LandedCostResponseShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LandedCostResponse_shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency_code' => 'string',
        'import_country_code' => 'string',
        'id' => 'string',
        'brokerage_fee_items' => '\UPS\LandedCost\LandedCost\BrokerageFeeItems[]',
        'total_brokerage_fees' => 'float',
        'total_duties' => 'float',
        'total_commodity_level_taxes_and_fees' => 'float',
        'total_shipment_level_taxes_and_fees' => 'float',
        'total_vat' => 'float',
        'total_duty_and_tax' => 'float',
        'grand_total' => 'float',
        'shipment_items' => '\UPS\LandedCost\LandedCost\ResponseShipmentItems[]',
        'trans_id' => 'string',
        'perf_stats' => '\UPS\LandedCost\LandedCost\LandedCostResponseShipmentPerfStats',
        'al_version' => 'int',
        'errors' => '\UPS\LandedCost\LandedCost\Errors'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency_code' => null,
        'import_country_code' => null,
        'id' => null,
        'brokerage_fee_items' => null,
        'total_brokerage_fees' => null,
        'total_duties' => null,
        'total_commodity_level_taxes_and_fees' => null,
        'total_shipment_level_taxes_and_fees' => null,
        'total_vat' => null,
        'total_duty_and_tax' => null,
        'grand_total' => null,
        'shipment_items' => null,
        'trans_id' => null,
        'perf_stats' => null,
        'al_version' => null,
        'errors' => null
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
        'currency_code' => 'currencyCode',
        'import_country_code' => 'importCountryCode',
        'id' => 'id',
        'brokerage_fee_items' => 'brokerageFeeItems',
        'total_brokerage_fees' => 'totalBrokerageFees',
        'total_duties' => 'totalDuties',
        'total_commodity_level_taxes_and_fees' => 'totalCommodityLevelTaxesAndFees',
        'total_shipment_level_taxes_and_fees' => 'totalShipmentLevelTaxesAndFees',
        'total_vat' => 'totalVAT',
        'total_duty_and_tax' => 'totalDutyAndTax',
        'grand_total' => 'grandTotal',
        'shipment_items' => 'shipmentItems',
        'trans_id' => 'transID',
        'perf_stats' => 'perfStats',
        'al_version' => 'alVersion',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_code' => 'setCurrencyCode',
        'import_country_code' => 'setImportCountryCode',
        'id' => 'setId',
        'brokerage_fee_items' => 'setBrokerageFeeItems',
        'total_brokerage_fees' => 'setTotalBrokerageFees',
        'total_duties' => 'setTotalDuties',
        'total_commodity_level_taxes_and_fees' => 'setTotalCommodityLevelTaxesAndFees',
        'total_shipment_level_taxes_and_fees' => 'setTotalShipmentLevelTaxesAndFees',
        'total_vat' => 'setTotalVat',
        'total_duty_and_tax' => 'setTotalDutyAndTax',
        'grand_total' => 'setGrandTotal',
        'shipment_items' => 'setShipmentItems',
        'trans_id' => 'setTransId',
        'perf_stats' => 'setPerfStats',
        'al_version' => 'setAlVersion',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_code' => 'getCurrencyCode',
        'import_country_code' => 'getImportCountryCode',
        'id' => 'getId',
        'brokerage_fee_items' => 'getBrokerageFeeItems',
        'total_brokerage_fees' => 'getTotalBrokerageFees',
        'total_duties' => 'getTotalDuties',
        'total_commodity_level_taxes_and_fees' => 'getTotalCommodityLevelTaxesAndFees',
        'total_shipment_level_taxes_and_fees' => 'getTotalShipmentLevelTaxesAndFees',
        'total_vat' => 'getTotalVat',
        'total_duty_and_tax' => 'getTotalDutyAndTax',
        'grand_total' => 'getGrandTotal',
        'shipment_items' => 'getShipmentItems',
        'trans_id' => 'getTransId',
        'perf_stats' => 'getPerfStats',
        'al_version' => 'getAlVersion',
        'errors' => 'getErrors'
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
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['import_country_code'] = isset($data['import_country_code']) ? $data['import_country_code'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['brokerage_fee_items'] = isset($data['brokerage_fee_items']) ? $data['brokerage_fee_items'] : null;
        $this->container['total_brokerage_fees'] = isset($data['total_brokerage_fees']) ? $data['total_brokerage_fees'] : null;
        $this->container['total_duties'] = isset($data['total_duties']) ? $data['total_duties'] : null;
        $this->container['total_commodity_level_taxes_and_fees'] = isset($data['total_commodity_level_taxes_and_fees']) ? $data['total_commodity_level_taxes_and_fees'] : null;
        $this->container['total_shipment_level_taxes_and_fees'] = isset($data['total_shipment_level_taxes_and_fees']) ? $data['total_shipment_level_taxes_and_fees'] : null;
        $this->container['total_vat'] = isset($data['total_vat']) ? $data['total_vat'] : null;
        $this->container['total_duty_and_tax'] = isset($data['total_duty_and_tax']) ? $data['total_duty_and_tax'] : null;
        $this->container['grand_total'] = isset($data['grand_total']) ? $data['grand_total'] : null;
        $this->container['shipment_items'] = isset($data['shipment_items']) ? $data['shipment_items'] : null;
        $this->container['trans_id'] = isset($data['trans_id']) ? $data['trans_id'] : null;
        $this->container['perf_stats'] = isset($data['perf_stats']) ? $data['perf_stats'] : null;
        $this->container['al_version'] = isset($data['al_version']) ? $data['al_version'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['import_country_code'] === null) {
            $invalidProperties[] = "'import_country_code' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['brokerage_fee_items'] === null) {
            $invalidProperties[] = "'brokerage_fee_items' can't be null";
        }
        if ($this->container['total_brokerage_fees'] === null) {
            $invalidProperties[] = "'total_brokerage_fees' can't be null";
        }
        if ($this->container['total_duties'] === null) {
            $invalidProperties[] = "'total_duties' can't be null";
        }
        if ($this->container['total_commodity_level_taxes_and_fees'] === null) {
            $invalidProperties[] = "'total_commodity_level_taxes_and_fees' can't be null";
        }
        if ($this->container['total_shipment_level_taxes_and_fees'] === null) {
            $invalidProperties[] = "'total_shipment_level_taxes_and_fees' can't be null";
        }
        if ($this->container['total_vat'] === null) {
            $invalidProperties[] = "'total_vat' can't be null";
        }
        if ($this->container['total_duty_and_tax'] === null) {
            $invalidProperties[] = "'total_duty_and_tax' can't be null";
        }
        if ($this->container['grand_total'] === null) {
            $invalidProperties[] = "'grand_total' can't be null";
        }
        if ($this->container['shipment_items'] === null) {
            $invalidProperties[] = "'shipment_items' can't be null";
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
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Specifies the Currency Code set at the commodity level. This currency is applicable for all duty, tax, VAT, and fee at the shipment and commodity level.
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets import_country_code
     *
     * @return string
     */
    public function getImportCountryCode()
    {
        return $this->container['import_country_code'];
    }

    /**
     * Sets import_country_code
     *
     * @param string $import_country_code Specifies the Import/Ship-To/Destination/Final country of the shipment. Please check country list in the Appendices section.
     *
     * @return $this
     */
    public function setImportCountryCode($import_country_code)
    {
        $this->container['import_country_code'] = $import_country_code;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Specifies the Shipment ID in the Landed Cost quote.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets brokerage_fee_items
     *
     * @return \UPS\LandedCost\LandedCost\BrokerageFeeItems[]
     */
    public function getBrokerageFeeItems()
    {
        return $this->container['brokerage_fee_items'];
    }

    /**
     * Sets brokerage_fee_items
     *
     * @param \UPS\LandedCost\LandedCost\BrokerageFeeItems[] $brokerage_fee_items An array of Brokerage fees.
     *
     * @return $this
     */
    public function setBrokerageFeeItems($brokerage_fee_items)
    {
        $this->container['brokerage_fee_items'] = $brokerage_fee_items;

        return $this;
    }

    /**
     * Gets total_brokerage_fees
     *
     * @return float
     */
    public function getTotalBrokerageFees()
    {
        return $this->container['total_brokerage_fees'];
    }

    /**
     * Sets total_brokerage_fees
     *
     * @param float $total_brokerage_fees Grand total of all applicable Brokerage fees.
     *
     * @return $this
     */
    public function setTotalBrokerageFees($total_brokerage_fees)
    {
        $this->container['total_brokerage_fees'] = $total_brokerage_fees;

        return $this;
    }

    /**
     * Gets total_duties
     *
     * @return float
     */
    public function getTotalDuties()
    {
        return $this->container['total_duties'];
    }

    /**
     * Sets total_duties
     *
     * @param float $total_duties Total duty amount of this shipment.
     *
     * @return $this
     */
    public function setTotalDuties($total_duties)
    {
        $this->container['total_duties'] = $total_duties;

        return $this;
    }

    /**
     * Gets total_commodity_level_taxes_and_fees
     *
     * @return float
     */
    public function getTotalCommodityLevelTaxesAndFees()
    {
        return $this->container['total_commodity_level_taxes_and_fees'];
    }

    /**
     * Sets total_commodity_level_taxes_and_fees
     *
     * @param float $total_commodity_level_taxes_and_fees Total tax and other fees at commodity level.
     *
     * @return $this
     */
    public function setTotalCommodityLevelTaxesAndFees($total_commodity_level_taxes_and_fees)
    {
        $this->container['total_commodity_level_taxes_and_fees'] = $total_commodity_level_taxes_and_fees;

        return $this;
    }

    /**
     * Gets total_shipment_level_taxes_and_fees
     *
     * @return float
     */
    public function getTotalShipmentLevelTaxesAndFees()
    {
        return $this->container['total_shipment_level_taxes_and_fees'];
    }

    /**
     * Sets total_shipment_level_taxes_and_fees
     *
     * @param float $total_shipment_level_taxes_and_fees Total tax and other fees at shipment level.
     *
     * @return $this
     */
    public function setTotalShipmentLevelTaxesAndFees($total_shipment_level_taxes_and_fees)
    {
        $this->container['total_shipment_level_taxes_and_fees'] = $total_shipment_level_taxes_and_fees;

        return $this;
    }

    /**
     * Gets total_vat
     *
     * @return float
     */
    public function getTotalVat()
    {
        return $this->container['total_vat'];
    }

    /**
     * Sets total_vat
     *
     * @param float $total_vat Total VAT of the shipment.
     *
     * @return $this
     */
    public function setTotalVat($total_vat)
    {
        $this->container['total_vat'] = $total_vat;

        return $this;
    }

    /**
     * Gets total_duty_and_tax
     *
     * @return float
     */
    public function getTotalDutyAndTax()
    {
        return $this->container['total_duty_and_tax'];
    }

    /**
     * Sets total_duty_and_tax
     *
     * @param float $total_duty_and_tax Grand total of the combined duty, VAT, tax, and other fees of all commodities in this shipment including shipment level taxes and fees.
     *
     * @return $this
     */
    public function setTotalDutyAndTax($total_duty_and_tax)
    {
        $this->container['total_duty_and_tax'] = $total_duty_and_tax;

        return $this;
    }

    /**
     * Gets grand_total
     *
     * @return float
     */
    public function getGrandTotal()
    {
        return $this->container['grand_total'];
    }

    /**
     * Sets grand_total
     *
     * @param float $grand_total Sum of totalDutyAndTax + totalBrokerageFees
     *
     * @return $this
     */
    public function setGrandTotal($grand_total)
    {
        $this->container['grand_total'] = $grand_total;

        return $this;
    }

    /**
     * Gets shipment_items
     *
     * @return \UPS\LandedCost\LandedCost\ResponseShipmentItems[]
     */
    public function getShipmentItems()
    {
        return $this->container['shipment_items'];
    }

    /**
     * Sets shipment_items
     *
     * @param \UPS\LandedCost\LandedCost\ResponseShipmentItems[] $shipment_items An array of Landed Cost for all valid commodities.
     *
     * @return $this
     */
    public function setShipmentItems($shipment_items)
    {
        $this->container['shipment_items'] = $shipment_items;

        return $this;
    }

    /**
     * Gets trans_id
     *
     * @return string
     */
    public function getTransId()
    {
        return $this->container['trans_id'];
    }

    /**
     * Sets trans_id
     *
     * @param string $trans_id An identifier unique to the request.
     *
     * @return $this
     */
    public function setTransId($trans_id)
    {
        $this->container['trans_id'] = $trans_id;

        return $this;
    }

    /**
     * Gets perf_stats
     *
     * @return \UPS\LandedCost\LandedCost\LandedCostResponseShipmentPerfStats
     */
    public function getPerfStats()
    {
        return $this->container['perf_stats'];
    }

    /**
     * Sets perf_stats
     *
     * @param \UPS\LandedCost\LandedCost\LandedCostResponseShipmentPerfStats $perf_stats perf_stats
     *
     * @return $this
     */
    public function setPerfStats($perf_stats)
    {
        $this->container['perf_stats'] = $perf_stats;

        return $this;
    }

    /**
     * Gets al_version
     *
     * @return int
     */
    public function getAlVersion()
    {
        return $this->container['al_version'];
    }

    /**
     * Sets al_version
     *
     * @param int $al_version Version number of the instance that processed this request. Default is 1.
     *
     * @return $this
     */
    public function setAlVersion($al_version)
    {
        $this->container['al_version'] = $al_version;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \UPS\LandedCost\LandedCost\Errors
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \UPS\LandedCost\LandedCost\Errors $errors errors
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

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
