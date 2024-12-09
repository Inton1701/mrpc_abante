# LandedCost
The Landed Cost Quote API allows you to estimate the all-inclusive cost of international shipments - including applicable duties, VAT, taxes, brokerage fees, and other fees. Required parameters include the currency and shipment details, such as the commodity ID, price, quantity, and country code of origin.  Key Business Values: - **Enhanced Customer Experience**: Get a quick and accurate quote on the landed cost of a shipment, including the cost of goods, transportation, and any other fees associated with getting the goods to their destination. - **Operational Efficiency**: Simplify the process of calculating landed costs by eliminating the need to manually research and calculate all of the different fees involved. - **Data-Driven Decision Making**: Improve decision-making by having a clear understanding of the total cost of shipping goods before you commit to a purchase.. - **Optimizing Cash Flow**: Streamline your shipping process by integrating the Landed Cost Quote API into your existing systems.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 
- Package version: 1.0.8
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/abantecart/ups-landed-cost.git"
    }
  ],
  "require": {
    "abantecart/ups-landed-cost": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/LandedCost/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = UPS\LandedCost\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new UPS\LandedCost\Request\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \UPS\LandedCost\LandedCost\LandedCostRequest(); // \UPS\LandedCost\LandedCost\LandedCostRequest | Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click "Authorize" and enter your application credentials, then populate the required parameters above and click "Try it out".
$trans_id = "trans_id_example"; // string | An identifier unique to the request. Length: 32
$transaction_src = "testing"; // string | An identifier of the client/source application that is making the request. Length: 512
$version = "version_example"; // string | Version of the API.
$account_number = "account_number_example"; // string | The UPS account number.

try {
    $result = $apiInstance->landedCost($body, $trans_id, $transaction_src, $version, $account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->landedCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://wwwcie.ups.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**landedCost**](docs/Api/DefaultApi.md#landedcost) | **POST** /landedcost/{version}/quotes | Landed Cost Quote API

## Documentation For Models

 - [BrokerageFeeItems](docs/Model/BrokerageFeeItems.md)
 - [CommonErrorResponse](docs/Model/CommonErrorResponse.md)
 - [ErrorMessage](docs/Model/ErrorMessage.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [Errors](docs/Model/Errors.md)
 - [LandedCostRequest](docs/Model/LandedCostRequest.md)
 - [LandedCostRequestShipment](docs/Model/LandedCostRequestShipment.md)
 - [LandedCostResponse](docs/Model/LandedCostResponse.md)
 - [LandedCostResponseShipment](docs/Model/LandedCostResponseShipment.md)
 - [LandedCostResponseShipmentPerfStats](docs/Model/LandedCostResponseShipmentPerfStats.md)
 - [RequestShipmentItems](docs/Model/RequestShipmentItems.md)
 - [ResponseShipmentItems](docs/Model/ResponseShipmentItems.md)

## Documentation For Authorization


## oauth2

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 


## Author


