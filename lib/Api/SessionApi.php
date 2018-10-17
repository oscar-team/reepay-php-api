<?php
/**
 * SessionApi
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

namespace Reepay\Api;

use Reepay\ApiClient;
use Reepay\ApiException;
use Reepay\Configuration;
use Reepay\ObjectSerializer;

/**
 * SessionApi Class Doc Comment
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SessionApi
{
    /**
     * API Client
     *
     * @var \Reepay\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * The host
     *
     * @var string
     */
    protected $host = 'https://checkout-api.reepay.com';

    /**
     * Constructor
     *
     * @param \Reepay\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Reepay\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            Configuration::getDefaultConfiguration()->setHost($this->host);
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
     * @return CustomerApi
     */
    public function setApiClient(\Reepay\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;

        return $this;
    }

    /**
     * Operation createSession
     *
     * Create session
     *
     * @param \Reepay\Model\CreateSession $body (optional)
     *
     * @throws \Reepay\ApiException on non-2xx response
     *
     * @return \Reepay\Model\Session
     */
    public function createSession($body = null)
    {
        list($response) = $this->createSessionWithHttpInfo($body);

        return $response;
    }

    public function createSessionWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/v1/session/charge";
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
        if (strlen($apiKey) !== 0) {
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
                '\Reepay\Model\Session',
                '/v1/charge'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Reepay\Model\Session', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\Session', $e->getResponseHeaders());
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
     * Operation deleteSession
     *
     * Delete session
     *
     * @param string $id Session id (required)
     * @throws \Reepay\ApiException on non-2xx response
     * @return \Reepay\Model\Session
     */
    public function deleteSession($id)
    {
        list($response) = $this->deleteSessionWithHttpInfo($id);

        return $response;
    }

    /**
     * Operation deleteSessionWithHttpInfo
     *
     * Delete session
     *
     * @param string $id Session id (required)
     * @throws \Reepay\ApiException on non-2xx response
     * @return array of \Reepay\Model\Session, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSessionWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteSession');
        }
        // parse inputs
        $resourcePath = "/v1/session/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
        if (strlen($apiKey) !== 0) {
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Reepay\Model\Session',
                '/v1/session/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Reepay\Model\Session', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Reepay\Model\Session', $e->getResponseHeaders());
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
