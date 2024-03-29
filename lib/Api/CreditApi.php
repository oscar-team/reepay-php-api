<?php
/**
 * CreditApi
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Reepay\Api;

use \Reepay\ApiClient;
use \Reepay\ApiException;
use \Reepay\Configuration;
use \Reepay\ObjectSerializer;

/**
 * CreditApi Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditApi
{
    /**
     * API Client
     *
     * @var \Reepay\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Reepay\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Reepay\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Reepay\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Reepay\ApiClient $apiClient set the API client
     *
     * @return CreditApi
     */
    public function setApiClient(\Reepay\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation cancelCredit
     *
     * Cancel credit
     *
     * @param string $handle Credit handle (required)
     * @throws \Reepay\ApiException on non-2xx response
     * @return \Reepay\Model\Credit
     */
    public function cancelCredit($handle)
    {
        list($response) = $this->cancelCreditWithHttpInfo($handle);
        return $response;
    }

    /**
     * Operation cancelCreditWithHttpInfo
     *
     * Cancel credit
     *
     * @param string $handle Credit handle (required)
     * @throws \Reepay\ApiException on non-2xx response
     * @return array of \Reepay\Model\Credit, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelCreditWithHttpInfo($handle)
    {
        // verify the required parameter 'handle' is set
        if ($handle === null) {
            throw new \InvalidArgumentException('Missing the required parameter $handle when calling cancelCredit');
        }
        // parse inputs
        $resourcePath = "/v1/credit/{handle}/cancel";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($handle !== null) {
            $resourcePath = str_replace(
                "{" . "handle" . "}",
                $this->apiClient->getSerializer()->toPathValue($handle),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Auth-Token');
        if (!empty($apiKey)) {
            $headerParams['X-Auth-Token'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Reepay\Model\Credit',
                '/v1/credit/{handle}/cancel'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Reepay\Model\Credit', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\Credit', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createCreditJson
     *
     * Create credit
     *
     * @param \Reepay\Model\CreateCredit $body  (optional)
     * @throws \Reepay\ApiException on non-2xx response
     * @return \Reepay\Model\Credit
     */
    public function createCreditJson($body = null)
    {
        list($response) = $this->createCreditJsonWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createCreditJsonWithHttpInfo
     *
     * Create credit
     *
     * @param \Reepay\Model\CreateCredit $body  (optional)
     * @throws \Reepay\ApiException on non-2xx response
     * @return array of \Reepay\Model\Credit, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCreditJsonWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/v1/credit";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Auth-Token');
        if (!empty($apiKey)) {
            $headerParams['X-Auth-Token'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Reepay\Model\Credit',
                '/v1/credit'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Reepay\Model\Credit', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\Credit', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCredit
     *
     * Get credit
     *
     * @param string $handle Credit handle (required)
     * @throws \Reepay\ApiException on non-2xx response
     * @return \Reepay\Model\Credit
     */
    public function getCredit($handle)
    {
        list($response) = $this->getCreditWithHttpInfo($handle);
        return $response;
    }

    /**
     * Operation getCreditWithHttpInfo
     *
     * Get credit
     *
     * @param string $handle Credit handle (required)
     * @throws \Reepay\ApiException on non-2xx response
     * @return array of \Reepay\Model\Credit, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCreditWithHttpInfo($handle)
    {
        // verify the required parameter 'handle' is set
        if ($handle === null) {
            throw new \InvalidArgumentException('Missing the required parameter $handle when calling getCredit');
        }
        // parse inputs
        $resourcePath = "/v1/credit/{handle}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($handle !== null) {
            $resourcePath = str_replace(
                "{" . "handle" . "}",
                $this->apiClient->getSerializer()->toPathValue($handle),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Auth-Token');
        if (!empty($apiKey)) {
            $headerParams['X-Auth-Token'] = $apiKey;
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
                '\Reepay\Model\Credit',
                '/v1/credit/{handle}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Reepay\Model\Credit', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\Credit', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCredits
     *
     * Get credits for subscription
     *
     * @param string $handle Subscription handle (required)
     * @throws \Reepay\ApiException on non-2xx response
     * @return \Reepay\Model\Credit[]
     */
    public function getCredits($handle)
    {
        list($response) = $this->getCreditsWithHttpInfo($handle);
        return $response;
    }

    /**
     * Operation getCreditsWithHttpInfo
     *
     * Get credits for subscription
     *
     * @param string $handle Subscription handle (required)
     * @throws \Reepay\ApiException on non-2xx response
     * @return array of \Reepay\Model\Credit[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCreditsWithHttpInfo($handle)
    {
        // verify the required parameter 'handle' is set
        if ($handle === null) {
            throw new \InvalidArgumentException('Missing the required parameter $handle when calling getCredits');
        }
        // parse inputs
        $resourcePath = "/v1/credit/subscription/{handle}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($handle !== null) {
            $resourcePath = str_replace(
                "{" . "handle" . "}",
                $this->apiClient->getSerializer()->toPathValue($handle),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Auth-Token');
        if (!empty($apiKey)) {
            $headerParams['X-Auth-Token'] = $apiKey;
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
                '\Reepay\Model\Credit[]',
                '/v1/credit/subscription/{handle}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Reepay\Model\Credit[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\Credit[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
