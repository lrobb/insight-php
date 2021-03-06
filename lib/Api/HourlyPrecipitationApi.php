<?php
/**
 * HourlyPrecipitationApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SkyWise Insight API (Beta)
 *
 * The SkyWise Insight API is an interface to WDT’s Weather as a Service® analytics platform,  allowing application developers to leverage high quality weather information  for applications, and products. The SkyWise Insight API provides access to  historical, current, and forecast data for any region of interest,  such as an agriculture field, urban area, or utility service area.  API response formats can include time-series, summaries, or contours.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * HourlyPrecipitationApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HourlyPrecipitationApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return HourlyPrecipitationApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation hourlyPrecipitationByAsset
     *
     * Hourly Precipitation by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param \DateTime $end End time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param string $unit Unit of measure (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\HourlyPrecipitationByAssetData
     */
    public function hourlyPrecipitationByAsset($asset_uuid, $start = null, $end = null, $unit = null)
    {
        list($response) = $this->hourlyPrecipitationByAssetWithHttpInfo($asset_uuid, $start, $end, $unit);
        return $response;
    }

    /**
     * Operation hourlyPrecipitationByAssetWithHttpInfo
     *
     * Hourly Precipitation by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param \DateTime $end End time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param string $unit Unit of measure (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\HourlyPrecipitationByAssetData, HTTP status code, HTTP response headers (array of strings)
     */
    public function hourlyPrecipitationByAssetWithHttpInfo($asset_uuid, $start = null, $end = null, $unit = null)
    {
        // verify the required parameter 'asset_uuid' is set
        if ($asset_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $asset_uuid when calling hourlyPrecipitationByAsset');
        }
        // parse inputs
        $resourcePath = "/hourly-precipitation/{asset-uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.wdt+json; version=1']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }
        // query params
        if ($unit !== null) {
            $queryParams['unit'] = $this->apiClient->getSerializer()->toQueryValue($unit);
        }
        // path params
        if ($asset_uuid !== null) {
            $resourcePath = str_replace(
                "{" . "asset-uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($asset_uuid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\HourlyPrecipitationByAssetData',
                '/hourly-precipitation/{asset-uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\HourlyPrecipitationByAssetData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\HourlyPrecipitationByAssetData', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation hourlyPrecipitationByLocation
     *
     * Hourly Precipitation by location
     *
     * @param double $latitude  (required)
     * @param double $longitude  (required)
     * @param \DateTime $start Start time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param \DateTime $end End time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param string $unit Unit of measure (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\HourlyPrecipitationByLocationData
     */
    public function hourlyPrecipitationByLocation($latitude, $longitude, $start = null, $end = null, $unit = null)
    {
        list($response) = $this->hourlyPrecipitationByLocationWithHttpInfo($latitude, $longitude, $start, $end, $unit);
        return $response;
    }

    /**
     * Operation hourlyPrecipitationByLocationWithHttpInfo
     *
     * Hourly Precipitation by location
     *
     * @param double $latitude  (required)
     * @param double $longitude  (required)
     * @param \DateTime $start Start time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param \DateTime $end End time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param string $unit Unit of measure (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\HourlyPrecipitationByLocationData, HTTP status code, HTTP response headers (array of strings)
     */
    public function hourlyPrecipitationByLocationWithHttpInfo($latitude, $longitude, $start = null, $end = null, $unit = null)
    {
        // verify the required parameter 'latitude' is set
        if ($latitude === null) {
            throw new \InvalidArgumentException('Missing the required parameter $latitude when calling hourlyPrecipitationByLocation');
        }
        // verify the required parameter 'longitude' is set
        if ($longitude === null) {
            throw new \InvalidArgumentException('Missing the required parameter $longitude when calling hourlyPrecipitationByLocation');
        }
        // parse inputs
        $resourcePath = "/hourly-precipitation/{latitude}/{longitude}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.wdt+json; version=1']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }
        // query params
        if ($unit !== null) {
            $queryParams['unit'] = $this->apiClient->getSerializer()->toQueryValue($unit);
        }
        // path params
        if ($latitude !== null) {
            $resourcePath = str_replace(
                "{" . "latitude" . "}",
                $this->apiClient->getSerializer()->toPathValue($latitude),
                $resourcePath
            );
        }
        // path params
        if ($longitude !== null) {
            $resourcePath = str_replace(
                "{" . "longitude" . "}",
                $this->apiClient->getSerializer()->toPathValue($longitude),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\HourlyPrecipitationByLocationData',
                '/hourly-precipitation/{latitude}/{longitude}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\HourlyPrecipitationByLocationData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\HourlyPrecipitationByLocationData', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation hourlyPrecipitationContoursByAsset
     *
     * Hourly Precipitation contours by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start time. Start of 2015 to 7 days in the future.  (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param \DateTime $end End time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param string $unit Unit of measure (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\HourlyPrecipitationContoursByAssetData
     */
    public function hourlyPrecipitationContoursByAsset($asset_uuid, $start = null, $end = null, $unit = null)
    {
        list($response) = $this->hourlyPrecipitationContoursByAssetWithHttpInfo($asset_uuid, $start, $end, $unit);
        return $response;
    }

    /**
     * Operation hourlyPrecipitationContoursByAssetWithHttpInfo
     *
     * Hourly Precipitation contours by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start time. Start of 2015 to 7 days in the future.  (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param \DateTime $end End time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param string $unit Unit of measure (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\HourlyPrecipitationContoursByAssetData, HTTP status code, HTTP response headers (array of strings)
     */
    public function hourlyPrecipitationContoursByAssetWithHttpInfo($asset_uuid, $start = null, $end = null, $unit = null)
    {
        // verify the required parameter 'asset_uuid' is set
        if ($asset_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $asset_uuid when calling hourlyPrecipitationContoursByAsset');
        }
        // parse inputs
        $resourcePath = "/hourly-precipitation/{asset-uuid}/contours";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.wdt+json; version=1']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }
        // query params
        if ($unit !== null) {
            $queryParams['unit'] = $this->apiClient->getSerializer()->toQueryValue($unit);
        }
        // path params
        if ($asset_uuid !== null) {
            $resourcePath = str_replace(
                "{" . "asset-uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($asset_uuid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\HourlyPrecipitationContoursByAssetData',
                '/hourly-precipitation/{asset-uuid}/contours'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\HourlyPrecipitationContoursByAssetData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\HourlyPrecipitationContoursByAssetData', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
