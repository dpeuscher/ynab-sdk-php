<?php
/**
 * CategoriesApi
 * PHP version 5
 *
 * @category Class
 * @package  YNAB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * YNAB API Endpoints
 *
 * Our API uses a REST based design, leverages the JSON data format, and relies upon HTTPS for transport. We respond with meaningful HTTP response codes and if an error occurs, we include error details in the response body.  API Documentation is at https://api.youneedabudget.com
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace YNAB\Api\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use YNAB\Api\ApiException;
use YNAB\Api\Configuration;
use YNAB\Api\HeaderSelector;
use YNAB\Api\ObjectSerializer;

/**
 * CategoriesApi Class Doc Comment
 *
 * @category Class
 * @package  YNAB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoriesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getCategories
     *
     * List categories
     *
     * @param  string $budgetId The ID of the Budget. (required)
     *
     * @throws \YNAB\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \YNAB\Api\Model\CategoriesResponse
     */
    public function getCategories($budgetId)
    {
        list($response) = $this->getCategoriesWithHttpInfo($budgetId);
        return $response;
    }

    /**
     * Operation getCategoriesWithHttpInfo
     *
     * List categories
     *
     * @param  string $budgetId The ID of the Budget. (required)
     *
     * @throws \YNAB\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \YNAB\Api\Model\CategoriesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoriesWithHttpInfo($budgetId)
    {
        $returnType = '\YNAB\Api\Model\CategoriesResponse';
        $request = $this->getCategoriesRequest($budgetId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YNAB\Api\Model\CategoriesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YNAB\Api\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YNAB\Api\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCategoriesAsync
     *
     * List categories
     *
     * @param  string $budgetId The ID of the Budget. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoriesAsync($budgetId)
    {
        return $this->getCategoriesAsyncWithHttpInfo($budgetId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCategoriesAsyncWithHttpInfo
     *
     * List categories
     *
     * @param  string $budgetId The ID of the Budget. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoriesAsyncWithHttpInfo($budgetId)
    {
        $returnType = '\YNAB\Api\Model\CategoriesResponse';
        $request = $this->getCategoriesRequest($budgetId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCategories'
     *
     * @param  string $budgetId The ID of the Budget. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCategoriesRequest($budgetId)
    {
        // verify the required parameter 'budgetId' is set
        if ($budgetId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $budgetId when calling getCategories'
            );
        }

        $resourcePath = '/budgets/{budget_id}/categories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($budgetId !== null) {
            $resourcePath = str_replace(
                '{' . 'budget_id' . '}',
                ObjectSerializer::toPathValue($budgetId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCategoryById
     *
     * Single category
     *
     * @param  string $budgetId The ID of the Budget. (required)
     * @param  string $categoryId The ID of the Category. (required)
     *
     * @throws \YNAB\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \YNAB\Api\Model\CategoryResponse
     */
    public function getCategoryById($budgetId, $categoryId)
    {
        list($response) = $this->getCategoryByIdWithHttpInfo($budgetId, $categoryId);
        return $response;
    }

    /**
     * Operation getCategoryByIdWithHttpInfo
     *
     * Single category
     *
     * @param  string $budgetId The ID of the Budget. (required)
     * @param  string $categoryId The ID of the Category. (required)
     *
     * @throws \YNAB\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \YNAB\Api\Model\CategoryResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoryByIdWithHttpInfo($budgetId, $categoryId)
    {
        $returnType = '\YNAB\Api\Model\CategoryResponse';
        $request = $this->getCategoryByIdRequest($budgetId, $categoryId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YNAB\Api\Model\CategoryResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YNAB\Api\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YNAB\Api\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCategoryByIdAsync
     *
     * Single category
     *
     * @param  string $budgetId The ID of the Budget. (required)
     * @param  string $categoryId The ID of the Category. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoryByIdAsync($budgetId, $categoryId)
    {
        return $this->getCategoryByIdAsyncWithHttpInfo($budgetId, $categoryId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCategoryByIdAsyncWithHttpInfo
     *
     * Single category
     *
     * @param  string $budgetId The ID of the Budget. (required)
     * @param  string $categoryId The ID of the Category. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoryByIdAsyncWithHttpInfo($budgetId, $categoryId)
    {
        $returnType = '\YNAB\Api\Model\CategoryResponse';
        $request = $this->getCategoryByIdRequest($budgetId, $categoryId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCategoryById'
     *
     * @param  string $budgetId The ID of the Budget. (required)
     * @param  string $categoryId The ID of the Category. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCategoryByIdRequest($budgetId, $categoryId)
    {
        // verify the required parameter 'budgetId' is set
        if ($budgetId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $budgetId when calling getCategoryById'
            );
        }
        // verify the required parameter 'categoryId' is set
        if ($categoryId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $categoryId when calling getCategoryById'
            );
        }

        $resourcePath = '/budgets/{budget_id}/categories/{category_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($budgetId !== null) {
            $resourcePath = str_replace(
                '{' . 'budget_id' . '}',
                ObjectSerializer::toPathValue($budgetId),
                $resourcePath
            );
        }
        // path params
        if ($categoryId !== null) {
            $resourcePath = str_replace(
                '{' . 'category_id' . '}',
                ObjectSerializer::toPathValue($categoryId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}