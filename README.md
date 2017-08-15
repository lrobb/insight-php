# SwaggerClient-php
The SkyWise Insight API is an interface to WDT’s Weather as a Service® analytics platform,  allowing application developers to leverage high quality weather information  for applications, and products. The SkyWise Insight API provides access to  historical, current, and forecast data for any region of interest,  such as an agriculture field, urban area, or utility service area.  API response formats can include time-series, summaries, or contours.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
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

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AssetsApi();
$body = "body_example"; // string | 

try {
    $result = $api_instance->assetCreation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetCreation: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://insight.api.wdtinc.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AssetsApi* | [**assetCreation**](docs/Api/AssetsApi.md#assetcreation) | **POST** /assets | Asset Creation
*AssetsApi* | [**assetInformation**](docs/Api/AssetsApi.md#assetinformation) | **GET** /assets/{asset-uuid} | Asset Information
*AssetsApi* | [**assetList**](docs/Api/AssetsApi.md#assetlist) | **GET** /assets | Asset List
*AssetsApi* | [**assetRemoval**](docs/Api/AssetsApi.md#assetremoval) | **DELETE** /assets/{asset-uuid} | Asset Removal
*AssetsApi* | [**assetUpdate**](docs/Api/AssetsApi.md#assetupdate) | **PUT** /assets/{asset-uuid} | Asset Update
*ClimatologyDailyHighTemperatureApi* | [**climoDailyHighTemperatureByAsset**](docs/Api/ClimatologyDailyHighTemperatureApi.md#climodailyhightemperaturebyasset) | **GET** /climatology/daily-high-temperature/{asset-uuid} | Climatology Daily High Temperature by asset
*ClimatologyDailyHighTemperatureApi* | [**climoDailyHighTemperatureByLocation**](docs/Api/ClimatologyDailyHighTemperatureApi.md#climodailyhightemperaturebylocation) | **GET** /climatology/daily-high-temperature/{latitude}/{longitude} | Climatology Daily High Temperature by location
*ClimatologyDailyHighTemperatureApi* | [**climoDailyHighTemperatureContoursByAsset**](docs/Api/ClimatologyDailyHighTemperatureApi.md#climodailyhightemperaturecontoursbyasset) | **GET** /climatology/daily-high-temperature/{asset-uuid}/contours | Climatology Daily High Temperature contours by asset
*ClimatologyDailyLowTemperatureApi* | [**climoDailyLowTemperatureByAsset**](docs/Api/ClimatologyDailyLowTemperatureApi.md#climodailylowtemperaturebyasset) | **GET** /climatology/daily-low-temperature/{asset-uuid} | Climatology Daily Low Temperature by asset
*ClimatologyDailyLowTemperatureApi* | [**climoDailyLowTemperatureByLocation**](docs/Api/ClimatologyDailyLowTemperatureApi.md#climodailylowtemperaturebylocation) | **GET** /climatology/daily-low-temperature/{latitude}/{longitude} | Climatology Daily Low Temperature by location
*ClimatologyDailyLowTemperatureApi* | [**climoDailyLowTemperatureContoursByAsset**](docs/Api/ClimatologyDailyLowTemperatureApi.md#climodailylowtemperaturecontoursbyasset) | **GET** /climatology/daily-low-temperature/{asset-uuid}/contours | Climatology Daily Low Temperature contours by asset
*ClimatologyDailyPrecipitationApi* | [**climoDailyPrecipitationByAsset**](docs/Api/ClimatologyDailyPrecipitationApi.md#climodailyprecipitationbyasset) | **GET** /climatology/daily-precipitation/{asset-uuid} | Climatology Daily Precipitation by asset
*ClimatologyDailyPrecipitationApi* | [**climoDailyPrecipitationByLocation**](docs/Api/ClimatologyDailyPrecipitationApi.md#climodailyprecipitationbylocation) | **GET** /climatology/daily-precipitation/{latitude}/{longitude} | Climatology Daily Precipitation by location
*ClimatologyDailyPrecipitationApi* | [**climoDailyPrecipitationContoursByAsset**](docs/Api/ClimatologyDailyPrecipitationApi.md#climodailyprecipitationcontoursbyasset) | **GET** /climatology/daily-precipitation/{asset-uuid}/contours | Climatology Daily Precipitation contours by asset
*CoolingDegreeDaysApi* | [**coolingDegreeDaysByAsset**](docs/Api/CoolingDegreeDaysApi.md#coolingdegreedaysbyasset) | **GET** /cooling-degree-days/{asset-uuid} | Cooling degree days by asset
*CoolingDegreeDaysApi* | [**coolingDegreeDaysByLocation**](docs/Api/CoolingDegreeDaysApi.md#coolingdegreedaysbylocation) | **GET** /cooling-degree-days/{latitude}/{longitude} | Cooling degree days by location
*CoolingDegreeDaysApi* | [**coolingDegreeDaysContoursByAsset**](docs/Api/CoolingDegreeDaysApi.md#coolingdegreedayscontoursbyasset) | **GET** /cooling-degree-days/{asset-uuid}/contours | Cooling degree days contours by asset
*DailyEvapotranspirationShortCropApi* | [**dailyEvapotranspirationShortCropByAsset**](docs/Api/DailyEvapotranspirationShortCropApi.md#dailyevapotranspirationshortcropbyasset) | **GET** /daily-evapotranspiration-short-crop/{asset-uuid} | Daily Evapotranspiration Short Crop by asset
*DailyEvapotranspirationShortCropApi* | [**dailyEvapotranspirationShortCropByLocation**](docs/Api/DailyEvapotranspirationShortCropApi.md#dailyevapotranspirationshortcropbylocation) | **GET** /daily-evapotranspiration-short-crop/{latitude}/{longitude} | Daily Evapotranspiration Short Crop by location
*DailyEvapotranspirationShortCropApi* | [**dailyEvapotranspirationShortCropContoursByAsset**](docs/Api/DailyEvapotranspirationShortCropApi.md#dailyevapotranspirationshortcropcontoursbyasset) | **GET** /daily-evapotranspiration-short-crop/{asset-uuid}/contours | Daily Evapotranspiration Short Crop contours by asset
*DailyEvapotranspirationTallCropApi* | [**dailyEvapotranspirationTallCropByAsset**](docs/Api/DailyEvapotranspirationTallCropApi.md#dailyevapotranspirationtallcropbyasset) | **GET** /daily-evapotranspiration-tall-crop/{asset-uuid} | Daily Evapotranspiration Tall Crop by asset
*DailyEvapotranspirationTallCropApi* | [**dailyEvapotranspirationTallCropByLocation**](docs/Api/DailyEvapotranspirationTallCropApi.md#dailyevapotranspirationtallcropbylocation) | **GET** /daily-evapotranspiration-tall-crop/{latitude}/{longitude} | Daily Evapotranspiration Tall Crop by location
*DailyEvapotranspirationTallCropApi* | [**dailyEvapotranspirationTallCropContoursByAsset**](docs/Api/DailyEvapotranspirationTallCropApi.md#dailyevapotranspirationtallcropcontoursbyasset) | **GET** /daily-evapotranspiration-tall-crop/{asset-uuid}/contours | Daily Evapotranspiration Tall Crop contours by asset
*DailyHighTemperatureApi* | [**dailyHighTemperatureByAsset**](docs/Api/DailyHighTemperatureApi.md#dailyhightemperaturebyasset) | **GET** /daily-high-temperature/{asset-uuid} | Daily High Temperature by asset
*DailyHighTemperatureApi* | [**dailyHighTemperatureByLocation**](docs/Api/DailyHighTemperatureApi.md#dailyhightemperaturebylocation) | **GET** /daily-high-temperature/{latitude}/{longitude} | Daily High Temperature by location
*DailyHighTemperatureApi* | [**dailyHighTemperatureContoursByAsset**](docs/Api/DailyHighTemperatureApi.md#dailyhightemperaturecontoursbyasset) | **GET** /daily-high-temperature/{asset-uuid}/contours | Daily High Temperature contours by asset
*DailyLowTemperatureApi* | [**dailyLowTemperatureByAsset**](docs/Api/DailyLowTemperatureApi.md#dailylowtemperaturebyasset) | **GET** /daily-low-temperature/{asset-uuid} | Daily Low Temperature by asset
*DailyLowTemperatureApi* | [**dailyLowTemperatureByLocation**](docs/Api/DailyLowTemperatureApi.md#dailylowtemperaturebylocation) | **GET** /daily-low-temperature/{latitude}/{longitude} | Daily Low Temperature by location
*DailyLowTemperatureApi* | [**dailyLowTemperatureContoursByAsset**](docs/Api/DailyLowTemperatureApi.md#dailylowtemperaturecontoursbyasset) | **GET** /daily-low-temperature/{asset-uuid}/contours | Daily Low Temperature contours by asset
*DailyPrecipitationApi* | [**dailyPrecipitationByAsset**](docs/Api/DailyPrecipitationApi.md#dailyprecipitationbyasset) | **GET** /daily-precipitation/{asset-uuid} | Daily Precipitation by asset
*DailyPrecipitationApi* | [**dailyPrecipitationByLocation**](docs/Api/DailyPrecipitationApi.md#dailyprecipitationbylocation) | **GET** /daily-precipitation/{latitude}/{longitude} | Daily Precipitation by location
*DailyPrecipitationApi* | [**dailyPrecipitationContoursByAsset**](docs/Api/DailyPrecipitationApi.md#dailyprecipitationcontoursbyasset) | **GET** /daily-precipitation/{asset-uuid}/contours | Daily Precipitation contours by asset
*DailySolarRadiationApi* | [**dailySolarRadiationByAsset**](docs/Api/DailySolarRadiationApi.md#dailysolarradiationbyasset) | **GET** /daily-solar-radiation/{asset-uuid} | Daily Solar Radiation by asset
*DailySolarRadiationApi* | [**dailySolarRadiationByLocation**](docs/Api/DailySolarRadiationApi.md#dailysolarradiationbylocation) | **GET** /daily-solar-radiation/{latitude}/{longitude} | Daily Solar Radiation by location
*DailySolarRadiationApi* | [**dailySolarRadiationContoursByAsset**](docs/Api/DailySolarRadiationApi.md#dailysolarradiationcontoursbyasset) | **GET** /daily-solar-radiation/{asset-uuid}/contours | Daily Solar Radiation contours by asset
*GrowingDegreeDaysApi* | [**growingDegreeDaysByAsset**](docs/Api/GrowingDegreeDaysApi.md#growingdegreedaysbyasset) | **GET** /growing-degree-days/{asset-uuid} | Growing degree days by asset
*GrowingDegreeDaysApi* | [**growingDegreeDaysByLocation**](docs/Api/GrowingDegreeDaysApi.md#growingdegreedaysbylocation) | **GET** /growing-degree-days/{latitude}/{longitude} | Growing degree days by location
*GrowingDegreeDaysApi* | [**growingDegreeDaysContoursByAsset**](docs/Api/GrowingDegreeDaysApi.md#growingdegreedayscontoursbyasset) | **GET** /growing-degree-days/{asset-uuid}/contours | Growing degree days contours by asset
*HeatingDegreeDaysApi* | [**heatingDegreeDaysByAsset**](docs/Api/HeatingDegreeDaysApi.md#heatingdegreedaysbyasset) | **GET** /heating-degree-days/{asset-uuid} | Heating degree days by asset
*HeatingDegreeDaysApi* | [**heatingDegreeDaysByLocation**](docs/Api/HeatingDegreeDaysApi.md#heatingdegreedaysbylocation) | **GET** /heating-degree-days/{latitude}/{longitude} | Heating degree days by location
*HeatingDegreeDaysApi* | [**heatingDegreeDaysContoursByAsset**](docs/Api/HeatingDegreeDaysApi.md#heatingdegreedayscontoursbyasset) | **GET** /heating-degree-days/{asset-uuid}/contours | Heating degree days contours by asset
*HourlyDewpointApi* | [**hourlyDewpointByAsset**](docs/Api/HourlyDewpointApi.md#hourlydewpointbyasset) | **GET** /hourly-dewpoint/{asset-uuid} | Hourly Dewpoint by asset
*HourlyDewpointApi* | [**hourlyDewpointByLocation**](docs/Api/HourlyDewpointApi.md#hourlydewpointbylocation) | **GET** /hourly-dewpoint/{latitude}/{longitude} | Hourly Dewpoint by location
*HourlyDewpointApi* | [**hourlyDewpointContoursByAsset**](docs/Api/HourlyDewpointApi.md#hourlydewpointcontoursbyasset) | **GET** /hourly-dewpoint/{asset-uuid}/contours | Hourly Dewpoint contours by asset
*HourlyEvapotranspirationShortCropApi* | [**hourlyEvapotranspirationShortCropByAsset**](docs/Api/HourlyEvapotranspirationShortCropApi.md#hourlyevapotranspirationshortcropbyasset) | **GET** /hourly-evapotranspiration-short-crop/{asset-uuid} | Hourly Evapotranspiration Short Crop by asset
*HourlyEvapotranspirationShortCropApi* | [**hourlyEvapotranspirationShortCropByLocation**](docs/Api/HourlyEvapotranspirationShortCropApi.md#hourlyevapotranspirationshortcropbylocation) | **GET** /hourly-evapotranspiration-short-crop/{latitude}/{longitude} | Hourly Evapotranspiration Short Crop by location
*HourlyEvapotranspirationShortCropApi* | [**hourlyEvapotranspirationShortCropContoursByAsset**](docs/Api/HourlyEvapotranspirationShortCropApi.md#hourlyevapotranspirationshortcropcontoursbyasset) | **GET** /hourly-evapotranspiration-short-crop/{asset-uuid}/contours | Hourly Evapotranspiration Short Crop contours by asset
*HourlyEvapotranspirationTallCropApi* | [**hourlyEvapotranspirationTallCropByAsset**](docs/Api/HourlyEvapotranspirationTallCropApi.md#hourlyevapotranspirationtallcropbyasset) | **GET** /hourly-evapotranspiration-tall-crop/{asset-uuid} | Hourly Evapotranspiration Tall Crop by asset
*HourlyEvapotranspirationTallCropApi* | [**hourlyEvapotranspirationTallCropByLocation**](docs/Api/HourlyEvapotranspirationTallCropApi.md#hourlyevapotranspirationtallcropbylocation) | **GET** /hourly-evapotranspiration-tall-crop/{latitude}/{longitude} | Hourly Evapotranspiration Tall Crop by location
*HourlyEvapotranspirationTallCropApi* | [**hourlyEvapotranspirationTallCropContoursByAsset**](docs/Api/HourlyEvapotranspirationTallCropApi.md#hourlyevapotranspirationtallcropcontoursbyasset) | **GET** /hourly-evapotranspiration-tall-crop/{asset-uuid}/contours | Hourly Evapotranspiration Tall Crop contours by asset
*HourlyPrecipitationApi* | [**hourlyPrecipitationByAsset**](docs/Api/HourlyPrecipitationApi.md#hourlyprecipitationbyasset) | **GET** /hourly-precipitation/{asset-uuid} | Hourly Precipitation by asset
*HourlyPrecipitationApi* | [**hourlyPrecipitationByLocation**](docs/Api/HourlyPrecipitationApi.md#hourlyprecipitationbylocation) | **GET** /hourly-precipitation/{latitude}/{longitude} | Hourly Precipitation by location
*HourlyPrecipitationApi* | [**hourlyPrecipitationContoursByAsset**](docs/Api/HourlyPrecipitationApi.md#hourlyprecipitationcontoursbyasset) | **GET** /hourly-precipitation/{asset-uuid}/contours | Hourly Precipitation contours by asset
*HourlyRelativeHumidityApi* | [**hourlyRelativeHumidityByAsset**](docs/Api/HourlyRelativeHumidityApi.md#hourlyrelativehumiditybyasset) | **GET** /hourly-relative-humidity/{asset-uuid} | Hourly Relative Humidity by asset
*HourlyRelativeHumidityApi* | [**hourlyRelativeHumidityByLocation**](docs/Api/HourlyRelativeHumidityApi.md#hourlyrelativehumiditybylocation) | **GET** /hourly-relative-humidity/{latitude}/{longitude} | Hourly Relative Humidity by location
*HourlyRelativeHumidityApi* | [**hourlyRelativeHumidityContoursByAsset**](docs/Api/HourlyRelativeHumidityApi.md#hourlyrelativehumiditycontoursbyasset) | **GET** /hourly-relative-humidity/{asset-uuid}/contours | Hourly Relative Humidity contours by asset
*HourlySolarRadiationApi* | [**hourlySolarRadiationByAsset**](docs/Api/HourlySolarRadiationApi.md#hourlysolarradiationbyasset) | **GET** /hourly-solar-radiation/{asset-uuid} | Hourly Solar Radiation by asset
*HourlySolarRadiationApi* | [**hourlySolarRadiationByLocation**](docs/Api/HourlySolarRadiationApi.md#hourlysolarradiationbylocation) | **GET** /hourly-solar-radiation/{latitude}/{longitude} | Hourly Solar Radiation by location
*HourlySolarRadiationApi* | [**hourlySolarRadiationContoursByAsset**](docs/Api/HourlySolarRadiationApi.md#hourlysolarradiationcontoursbyasset) | **GET** /hourly-solar-radiation/{asset-uuid}/contours | Hourly Solar Radiation contours by asset
*HourlyTemperatureApi* | [**hourlyTemperatureByAsset**](docs/Api/HourlyTemperatureApi.md#hourlytemperaturebyasset) | **GET** /hourly-temperature/{asset-uuid} | Hourly Temperature by asset
*HourlyTemperatureApi* | [**hourlyTemperatureByLocation**](docs/Api/HourlyTemperatureApi.md#hourlytemperaturebylocation) | **GET** /hourly-temperature/{latitude}/{longitude} | Hourly Temperature by location
*HourlyTemperatureApi* | [**hourlyTemperatureContoursByAsset**](docs/Api/HourlyTemperatureApi.md#hourlytemperaturecontoursbyasset) | **GET** /hourly-temperature/{asset-uuid}/contours | Hourly Temperature contours by asset
*HourlyWindDirectionApi* | [**hourlyWindDirectionByAsset**](docs/Api/HourlyWindDirectionApi.md#hourlywinddirectionbyasset) | **GET** /hourly-wind-direction/{asset-uuid} | Hourly Wind Direction by asset
*HourlyWindDirectionApi* | [**hourlyWindDirectionByLocation**](docs/Api/HourlyWindDirectionApi.md#hourlywinddirectionbylocation) | **GET** /hourly-wind-direction/{latitude}/{longitude} | Hourly Wind Direction by location
*HourlyWindSpeedApi* | [**hourlyWindSpeedByAsset**](docs/Api/HourlyWindSpeedApi.md#hourlywindspeedbyasset) | **GET** /hourly-wind-speed/{asset-uuid} | Hourly Wind Speed by asset
*HourlyWindSpeedApi* | [**hourlyWindSpeedByLocation**](docs/Api/HourlyWindSpeedApi.md#hourlywindspeedbylocation) | **GET** /hourly-wind-speed/{latitude}/{longitude} | Hourly Wind Speed by location
*HourlyWindSpeedApi* | [**hourlyWindSpeedContoursByAsset**](docs/Api/HourlyWindSpeedApi.md#hourlywindspeedcontoursbyasset) | **GET** /hourly-wind-speed/{asset-uuid}/contours | Hourly Wind Speed contours by asset


## Documentation For Models

 - [Asset](docs/Model/Asset.md)
 - [AssetCentroid](docs/Model/AssetCentroid.md)
 - [DailyAssetSeries](docs/Model/DailyAssetSeries.md)
 - [DailyAssetSeriesAssetStatistics](docs/Model/DailyAssetSeriesAssetStatistics.md)
 - [DailyEvapotranspirationShortCropContourFeatures](docs/Model/DailyEvapotranspirationShortCropContourFeatures.md)
 - [DailyEvapotranspirationShortCropContourFeaturesProperties](docs/Model/DailyEvapotranspirationShortCropContourFeaturesProperties.md)
 - [DailyEvapotranspirationShortCropContoursByAssetData](docs/Model/DailyEvapotranspirationShortCropContoursByAssetData.md)
 - [DailyEvapotranspirationTallCropContourFeatures](docs/Model/DailyEvapotranspirationTallCropContourFeatures.md)
 - [DailyEvapotranspirationTallCropContoursByAssetData](docs/Model/DailyEvapotranspirationTallCropContoursByAssetData.md)
 - [DailyHighTemperatureContourFeatures](docs/Model/DailyHighTemperatureContourFeatures.md)
 - [DailyHighTemperatureContourFeaturesProperties](docs/Model/DailyHighTemperatureContourFeaturesProperties.md)
 - [DailyHighTemperatureContoursByAssetData](docs/Model/DailyHighTemperatureContoursByAssetData.md)
 - [DailyLocationSeries](docs/Model/DailyLocationSeries.md)
 - [DailyLowTemperatureContourFeatures](docs/Model/DailyLowTemperatureContourFeatures.md)
 - [DailyLowTemperatureContourFeaturesProperties](docs/Model/DailyLowTemperatureContourFeaturesProperties.md)
 - [DailyLowTemperatureContoursByAssetData](docs/Model/DailyLowTemperatureContoursByAssetData.md)
 - [DailyPrecipContourFeatures](docs/Model/DailyPrecipContourFeatures.md)
 - [DailyPrecipContourFeaturesProperties](docs/Model/DailyPrecipContourFeaturesProperties.md)
 - [DailyPrecipitationByAssetData](docs/Model/DailyPrecipitationByAssetData.md)
 - [DailyPrecipitationByLocationData](docs/Model/DailyPrecipitationByLocationData.md)
 - [DailyPrecipitationContoursByAssetData](docs/Model/DailyPrecipitationContoursByAssetData.md)
 - [DailyProductByAssetData](docs/Model/DailyProductByAssetData.md)
 - [DailyProductByLocationData](docs/Model/DailyProductByLocationData.md)
 - [DailySolarRadiationByAssetData](docs/Model/DailySolarRadiationByAssetData.md)
 - [DailySolarRadiationByLocationData](docs/Model/DailySolarRadiationByLocationData.md)
 - [DailySolarRadiationContourFeatures](docs/Model/DailySolarRadiationContourFeatures.md)
 - [DailySolarRadiationContourFeaturesProperties](docs/Model/DailySolarRadiationContourFeaturesProperties.md)
 - [DailySolarRadiationContoursByAssetData](docs/Model/DailySolarRadiationContoursByAssetData.md)
 - [DegreeDaysByAssetData](docs/Model/DegreeDaysByAssetData.md)
 - [DegreeDaysByAssetDataAccumulationStatistics](docs/Model/DegreeDaysByAssetDataAccumulationStatistics.md)
 - [DegreeDaysByLocationData](docs/Model/DegreeDaysByLocationData.md)
 - [DegreeDaysByLocationDataUnit](docs/Model/DegreeDaysByLocationDataUnit.md)
 - [DegreeDaysContourFeatures](docs/Model/DegreeDaysContourFeatures.md)
 - [DegreeDaysContourFeaturesProperties](docs/Model/DegreeDaysContourFeaturesProperties.md)
 - [DegreeDaysContoursByAssetData](docs/Model/DegreeDaysContoursByAssetData.md)
 - [Error](docs/Model/Error.md)
 - [Geometry](docs/Model/Geometry.md)
 - [HourlyAssetSeries](docs/Model/HourlyAssetSeries.md)
 - [HourlyDewpointContourFeatures](docs/Model/HourlyDewpointContourFeatures.md)
 - [HourlyDewpointContourFeaturesProperties](docs/Model/HourlyDewpointContourFeaturesProperties.md)
 - [HourlyDewpointContoursByAssetData](docs/Model/HourlyDewpointContoursByAssetData.md)
 - [HourlyEvapotranspirationShortCropContourFeatures](docs/Model/HourlyEvapotranspirationShortCropContourFeatures.md)
 - [HourlyEvapotranspirationShortCropContoursByAssetData](docs/Model/HourlyEvapotranspirationShortCropContoursByAssetData.md)
 - [HourlyEvapotranspirationTallCropContourFeatures](docs/Model/HourlyEvapotranspirationTallCropContourFeatures.md)
 - [HourlyEvapotranspirationTallCropContoursByAssetData](docs/Model/HourlyEvapotranspirationTallCropContoursByAssetData.md)
 - [HourlyLocationSeries](docs/Model/HourlyLocationSeries.md)
 - [HourlyPrecipContourFeatures](docs/Model/HourlyPrecipContourFeatures.md)
 - [HourlyPrecipitationByAssetData](docs/Model/HourlyPrecipitationByAssetData.md)
 - [HourlyPrecipitationByLocationData](docs/Model/HourlyPrecipitationByLocationData.md)
 - [HourlyPrecipitationContoursByAssetData](docs/Model/HourlyPrecipitationContoursByAssetData.md)
 - [HourlyProductByAssetData](docs/Model/HourlyProductByAssetData.md)
 - [HourlyProductByLocationData](docs/Model/HourlyProductByLocationData.md)
 - [HourlyRelativeHumidityContourFeatures](docs/Model/HourlyRelativeHumidityContourFeatures.md)
 - [HourlyRelativeHumidityContourFeaturesProperties](docs/Model/HourlyRelativeHumidityContourFeaturesProperties.md)
 - [HourlyRelativeHumidityContoursByAssetData](docs/Model/HourlyRelativeHumidityContoursByAssetData.md)
 - [HourlySolarRadiationContourFeatures](docs/Model/HourlySolarRadiationContourFeatures.md)
 - [HourlySolarRadiationContoursByAssetData](docs/Model/HourlySolarRadiationContoursByAssetData.md)
 - [HourlyTemperatureContourFeatures](docs/Model/HourlyTemperatureContourFeatures.md)
 - [HourlyTemperatureContourFeaturesProperties](docs/Model/HourlyTemperatureContourFeaturesProperties.md)
 - [HourlyTemperatureContoursByAssetData](docs/Model/HourlyTemperatureContoursByAssetData.md)
 - [HourlyWindDirectionByAssetData](docs/Model/HourlyWindDirectionByAssetData.md)
 - [HourlyWindSpeedContourFeatures](docs/Model/HourlyWindSpeedContourFeatures.md)
 - [HourlyWindSpeedContourFeaturesProperties](docs/Model/HourlyWindSpeedContourFeaturesProperties.md)
 - [HourlyWindSpeedContoursByAssetData](docs/Model/HourlyWindSpeedContoursByAssetData.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author




