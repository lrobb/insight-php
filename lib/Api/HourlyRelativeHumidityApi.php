<?php
/**
 * HourlyRelativeHumidityApi
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
 * HourlyRelativeHumidityApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HourlyRelativeHumidityApi
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
     * @return HourlyRelativeHumidityApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation hourlyRelativeHumidityByAsset
     *
     * Hourly Relative Humidity by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param \DateTime $end End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\HourlyProductByAssetData
     */
    public function hourlyRelativeHumidityByAsset($asset_uuid, $start = null, $end = null)
    {
        list($response) = $this->hourlyRelativeHumidityByAssetWithHttpInfo($asset_uuid, $start, $end);
        return $response;
    }

    /**
     * Operation hourlyRelativeHumidityByAssetWithHttpInfo
     *
     * Hourly Relative Humidity by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param \DateTime $end End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\HourlyProductByAssetData, HTTP status code, HTTP response headers (array of strings)
     */
    public function hourlyRelativeHumidityByAssetWithHttpInfo($asset_uuid, $start = null, $end = null)
    {
        // verify the required parameter 'asset_uuid' is set
        if ($asset_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $asset_uuid when calling hourlyRelativeHumidityByAsset');
        }
        // parse inputs
        $resourcePath = "/hourly-relative-humidity/{asset-uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.wdt+json; version=1', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.wdt+json; version=1']);

        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
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
                '\Swagger\Client\Model\HourlyProductByAssetData',
                '/hourly-relative-humidity/{asset-uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\HourlyProductByAssetData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\HourlyProductByAssetData', $e->getResponseHeaders());
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
     * Operation hourlyRelativeHumidityByLocation
     *
     * Hourly Relative Humidity by location
     *
     * @param double $latitude  (required)
     * @param double $longitude  (required)
     * @param \DateTime $start Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param \DateTime $end End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\HourlyProductByLocationData
     */
    public function hourlyRelativeHumidityByLocation($latitude, $longitude, $start = null, $end = null)
    {
        list($response) = $this->hourlyRelativeHumidityByLocationWithHttpInfo($latitude, $longitude, $start, $end);
        return $response;
    }

    /**
     * Operation hourlyRelativeHumidityByLocationWithHttpInfo
     *
     * Hourly Relative Humidity by location
     *
     * @param double $latitude  (required)
     * @param double $longitude  (required)
     * @param \DateTime $start Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @param \DateTime $end End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\HourlyProductByLocationData, HTTP status code, HTTP response headers (array of strings)
     */
    public function hourlyRelativeHumidityByLocationWithHttpInfo($latitude, $longitude, $start = null, $end = null)
    {
        // verify the required parameter 'latitude' is set
        if ($latitude === null) {
            throw new \InvalidArgumentException('Missing the required parameter $latitude when calling hourlyRelativeHumidityByLocation');
        }
        // verify the required parameter 'longitude' is set
        if ($longitude === null) {
            throw new \InvalidArgumentException('Missing the required parameter $longitude when calling hourlyRelativeHumidityByLocation');
        }
        // parse inputs
        $resourcePath = "/hourly-relative-humidity/{latitude}/{longitude}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.wdt+json; version=1', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.wdt+json; version=1']);

        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
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
                '\Swagger\Client\Model\HourlyProductByLocationData',
                '/hourly-relative-humidity/{latitude}/{longitude}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\HourlyProductByLocationData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\HourlyProductByLocationData', $e->getResponseHeaders());
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
     * Operation hourlyRelativeHumidityContoursByAsset
     *
     * Hourly Relative Humidity contours by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $valid_time Valid time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\HourlyRelativeHumidityContoursByAssetData
     */
    public function hourlyRelativeHumidityContoursByAsset($asset_uuid, $valid_time = null)
    {
        list($response) = $this->hourlyRelativeHumidityContoursByAssetWithHttpInfo($asset_uuid, $valid_time);
        return $response;
    }

    /**
     * Operation hourlyRelativeHumidityContoursByAssetWithHttpInfo
     *
     * Hourly Relative Humidity contours by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $valid_time Valid time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\HourlyRelativeHumidityContoursByAssetData, HTTP status code, HTTP response headers (array of strings)
     */
    public function hourlyRelativeHumidityContoursByAssetWithHttpInfo($asset_uuid, $valid_time = null)
    {
        // verify the required parameter 'asset_uuid' is set
        if ($asset_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $asset_uuid when calling hourlyRelativeHumidityContoursByAsset');
        }
        // parse inputs
        $resourcePath = "/hourly-relative-humidity/{asset-uuid}/contours";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.wdt+json; version=1', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.wdt+json; version=1']);

        // query params
        if ($valid_time !== null) {
            $queryParams['validTime'] = $this->apiClient->getSerializer()->toQueryValue($valid_time);
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
                '\Swagger\Client\Model\HourlyRelativeHumidityContoursByAssetData',
                '/hourly-relative-humidity/{asset-uuid}/contours'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\HourlyRelativeHumidityContoursByAssetData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\HourlyRelativeHumidityContoursByAssetData', $e->getResponseHeaders());
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
