<?php
/**
 * StoreApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
<<<<<<< HEAD
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
=======
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * StoreApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StoreApi
{

    /**
     * API Client
<<<<<<< HEAD
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct(\Swagger\Client\ApiClient $apiClient = null)
=======
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://petstore.swagger.io/v2');
        }
<<<<<<< HEAD

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
=======
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
<<<<<<< HEAD

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return StoreApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
=======
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return StoreApi
     */
    public function setApiClient(ApiClient $apiClient)
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    {
        $this->apiClient = $apiClient;
        return $this;
    }
<<<<<<< HEAD

    /**
     * Operation deleteOrder
=======
  
    /**
     * deleteOrder
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     *
     * Delete purchase order by ID
     *
     * @param string $order_id ID of the order that needs to be deleted (required)
<<<<<<< HEAD
     *
=======
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteOrder($order_id)
    {
<<<<<<< HEAD
        list($response) = $this->deleteOrderWithHttpInfo($order_id);
        return $response;
=======
        list($response) = $this->deleteOrderWithHttpInfo ($order_id);
        return $response; 
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    }


    /**
<<<<<<< HEAD
     * Operation deleteOrderWithHttpInfo
=======
     * deleteOrderWithHttpInfo
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     *
     * Delete purchase order by ID
     *
     * @param string $order_id ID of the order that needs to be deleted (required)
<<<<<<< HEAD
     *
=======
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteOrderWithHttpInfo($order_id)
    {
        
        // verify the required parameter 'order_id' is set
        if ($order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling deleteOrder');
        }
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        // parse inputs
        $resourcePath = "/store/order/{orderId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        
        
        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                "{" . "orderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
                // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
            throw $e;
        }
    }
    /**
<<<<<<< HEAD
     * Operation getInventory
     *
     * Returns pet inventories by status
     *
     *
=======
     * getInventory
     *
     * Returns pet inventories by status
     *
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     * @return map[string,int]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getInventory()
    {
<<<<<<< HEAD
        list($response) = $this->getInventoryWithHttpInfo();
        return $response;
=======
        list($response) = $this->getInventoryWithHttpInfo ();
        return $response; 
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    }


    /**
<<<<<<< HEAD
     * Operation getInventoryWithHttpInfo
     *
     * Returns pet inventories by status
     *
     *
=======
     * getInventoryWithHttpInfo
     *
     * Returns pet inventories by status
     *
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     * @return Array of map[string,int], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getInventoryWithHttpInfo()
    {
        
<<<<<<< HEAD
=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        // parse inputs
        $resourcePath = "/store/inventory";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api_key'] = $apiKey;
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, 'map[string,int]'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, 'map[string,int]', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'map[string,int]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
            throw $e;
        }
    }
    /**
<<<<<<< HEAD
     * Operation getOrderById
=======
     * getOrderById
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     *
     * Find purchase order by ID
     *
     * @param string $order_id ID of pet that needs to be fetched (required)
<<<<<<< HEAD
     *
=======
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     * @return \Swagger\Client\Model\Order
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOrderById($order_id)
    {
<<<<<<< HEAD
        list($response) = $this->getOrderByIdWithHttpInfo($order_id);
        return $response;
=======
        list($response) = $this->getOrderByIdWithHttpInfo ($order_id);
        return $response; 
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    }


    /**
<<<<<<< HEAD
     * Operation getOrderByIdWithHttpInfo
=======
     * getOrderByIdWithHttpInfo
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     *
     * Find purchase order by ID
     *
     * @param string $order_id ID of pet that needs to be fetched (required)
<<<<<<< HEAD
     *
=======
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     * @return Array of \Swagger\Client\Model\Order, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOrderByIdWithHttpInfo($order_id)
    {
        
        // verify the required parameter 'order_id' is set
        if ($order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrderById');
        }
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        // parse inputs
        $resourcePath = "/store/order/{orderId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        
        
        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                "{" . "orderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
                // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Order'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Order', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Order', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
            throw $e;
        }
    }
    /**
<<<<<<< HEAD
     * Operation placeOrder
=======
     * placeOrder
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     *
     * Place an order for a pet
     *
     * @param \Swagger\Client\Model\Order $body order placed for purchasing the pet (optional)
<<<<<<< HEAD
     *
=======
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     * @return \Swagger\Client\Model\Order
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function placeOrder($body = null)
    {
<<<<<<< HEAD
        list($response) = $this->placeOrderWithHttpInfo($body);
        return $response;
=======
        list($response) = $this->placeOrderWithHttpInfo ($body);
        return $response; 
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    }


    /**
<<<<<<< HEAD
     * Operation placeOrderWithHttpInfo
=======
     * placeOrderWithHttpInfo
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     *
     * Place an order for a pet
     *
     * @param \Swagger\Client\Model\Order $body order placed for purchasing the pet (optional)
<<<<<<< HEAD
     *
=======
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     * @return Array of \Swagger\Client\Model\Order, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function placeOrderWithHttpInfo($body = null)
    {
        
<<<<<<< HEAD
=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        // parse inputs
        $resourcePath = "/store/order";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
                // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Order'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Order', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Order', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
            throw $e;
        }
    }
}
