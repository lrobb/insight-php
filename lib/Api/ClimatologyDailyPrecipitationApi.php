<?php
/**
 * ClimatologyDailyPrecipitationApi
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
 * ClimatologyDailyPrecipitationApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClimatologyDailyPrecipitationApi
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
     * @return ClimatologyDailyPrecipitationApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation climoDailyPrecipitationByAsset
     *
     * Climatology Daily Precipitation by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start date. A valid ISO 8601 month and day (MM-DD) (optional)
     * @param \DateTime $end End date. A valid ISO 8601 month and day (MM-DD) (optional)
     * @param string $unit Unit of measure (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\DailyPrecipitationByAssetData
     */
    public function climoDailyPrecipitationByAsset($asset_uuid, $start = null, $end = null, $unit = null)
    {
        list($response) = $this->climoDailyPrecipitationByAssetWithHttpInfo($asset_uuid, $start, $end, $unit);
        return $response;
    }

    /**
     * Operation climoDailyPrecipitationByAssetWithHttpInfo
     *
     * Climatology Daily Precipitation by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start date. A valid ISO 8601 month and day (MM-DD) (optional)
     * @param \DateTime $end End date. A valid ISO 8601 month and day (MM-DD) (optional)
     * @param string $unit Unit of measure (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\DailyPrecipitationByAssetData, HTTP status code, HTTP response headers (array of strings)
     */
    public function climoDailyPrecipitationByAssetWithHttpInfo($asset_uuid, $start = null, $end = null, $unit = null)
    {
        // verify the required parameter 'asset_uuid' is set
        if ($asset_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $asset_uuid when calling climoDailyPrecipitationByAsset');
        }
        // parse inputs
        $resourcePath = "/climatology/daily-precipitation/{asset-uuid}";
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
                '\Swagger\Client\Model\DailyPrecipitationByAssetData',
                '/climatology/daily-precipitation/{asset-uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DailyPrecipitationByAssetData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DailyPrecipitationByAssetData', $e->getResponseHeaders());
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
     * Operation climoDailyPrecipitationByLocation
     *
     * Climatology Daily Precipitation by location
     *
     * @param double $latitude  (required)
     * @param double $longitude  (required)
     * @param \DateTime $start Start date. A valid ISO 8601 month and day. (MM-DD) (optional)
     * @param \DateTime $end End date (inclusive). A valid ISO 8601 month and day. (MM-DD) (optional)
     * @param string $unit Unit of measure (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\DailyPrecipitationByLocationData
     */
    public function climoDailyPrecipitationByLocation($latitude, $longitude, $start = null, $end = null, $unit = null)
    {
        list($response) = $this->climoDailyPrecipitationByLocationWithHttpInfo($latitude, $longitude, $start, $end, $unit);
        return $response;
    }

    /**
     * Operation climoDailyPrecipitationByLocationWithHttpInfo
     *
     * Climatology Daily Precipitation by location
     *
     * @param double $latitude  (required)
     * @param double $longitude  (required)
     * @param \DateTime $start Start date. A valid ISO 8601 month and day. (MM-DD) (optional)
     * @param \DateTime $end End date (inclusive). A valid ISO 8601 month and day. (MM-DD) (optional)
     * @param string $unit Unit of measure (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\DailyPrecipitationByLocationData, HTTP status code, HTTP response headers (array of strings)
     */
    public function climoDailyPrecipitationByLocationWithHttpInfo($latitude, $longitude, $start = null, $end = null, $unit = null)
    {
        // verify the required parameter 'latitude' is set
        if ($latitude === null) {
            throw new \InvalidArgumentException('Missing the required parameter $latitude when calling climoDailyPrecipitationByLocation');
        }
        // verify the required parameter 'longitude' is set
        if ($longitude === null) {
            throw new \InvalidArgumentException('Missing the required parameter $longitude when calling climoDailyPrecipitationByLocation');
        }
        // parse inputs
        $resourcePath = "/climatology/daily-precipitation/{latitude}/{longitude}";
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
                '\Swagger\Client\Model\DailyPrecipitationByLocationData',
                '/climatology/daily-precipitation/{latitude}/{longitude}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DailyPrecipitationByLocationData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DailyPrecipitationByLocationData', $e->getResponseHeaders());
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
     * Operation climoDailyPrecipitationContoursByAsset
     *
     * Climatology Daily Precipitation contours by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start date. A valid ISO 8601 month and day (MM-DD) (optional)
     * @param \DateTime $end End date. A valid ISO 8601 month and day (MM-DD) (optional)
     * @param string $unit Unit of measure (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\DailyPrecipitationContoursByAssetData
     */
    public function climoDailyPrecipitationContoursByAsset($asset_uuid, $start = null, $end = null, $unit = null)
    {
        list($response) = $this->climoDailyPrecipitationContoursByAssetWithHttpInfo($asset_uuid, $start, $end, $unit);
        return $response;
    }

    /**
     * Operation climoDailyPrecipitationContoursByAssetWithHttpInfo
     *
     * Climatology Daily Precipitation contours by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start date. A valid ISO 8601 month and day (MM-DD) (optional)
     * @param \DateTime $end End date. A valid ISO 8601 month and day (MM-DD) (optional)
     * @param string $unit Unit of measure (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\DailyPrecipitationContoursByAssetData, HTTP status code, HTTP response headers (array of strings)
     */
    public function climoDailyPrecipitationContoursByAssetWithHttpInfo($asset_uuid, $start = null, $end = null, $unit = null)
    {
        // verify the required parameter 'asset_uuid' is set
        if ($asset_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $asset_uuid when calling climoDailyPrecipitationContoursByAsset');
        }
        // parse inputs
        $resourcePath = "/climatology/daily-precipitation/{asset-uuid}/contours";
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
                '\Swagger\Client\Model\DailyPrecipitationContoursByAssetData',
                '/climatology/daily-precipitation/{asset-uuid}/contours'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DailyPrecipitationContoursByAssetData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DailyPrecipitationContoursByAssetData', $e->getResponseHeaders());
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
