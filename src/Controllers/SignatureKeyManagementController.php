<?php
/*
 * MessageMediaSigningKeys
 *
 * This file was automatically generated for MessageMedia by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MessageMediaSigningKeysLib\Controllers;

use MessageMediaSigningKeysLib\APIException;
use MessageMediaSigningKeysLib\APIHelper;
use MessageMediaSigningKeysLib\Configuration;
use MessageMediaSigningKeysLib\Models;
use MessageMediaSigningKeysLib\Exceptions;
use MessageMediaSigningKeysLib\Http\HttpRequest;
use MessageMediaSigningKeysLib\Http\HttpResponse;
use MessageMediaSigningKeysLib\Http\HttpMethod;
use MessageMediaSigningKeysLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class SignatureKeyManagementController extends BaseController
{
    /**
     * @var SignatureKeyManagementController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return SignatureKeyManagementController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Disable the current enabled signature key.
     * A successful request for the ```disable the current enabled signature key.``` endpoint will return
     * no content when successful.
     * If there is an enabled key, it will be disabled; and the 204 status code is returned.
     * If there is no key or no enabled key, the 204 status code is also returned.
     *
     * @param string $contentType  TODO: type description here
     * @param string $accept       TODO: type description here
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteDisableTheCurrentEnabledSignatureKey(
        $contentType,
        $accept
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/iam/signature_keys/enabled';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagesmedia-signingkeys',
            'Content-Type'    => $contentType,
            'Accept'          => $accept
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Delete a signature key using the key_id returned in the ```create signature key``` endpoint.
     * A successful request for the ```delete signature key``` endpoint will return an empty response body.
     * *Note: If an invalid or non-existent key_id parameter is specified in the request, then an HTTP 404
     * Not Found response will be returned*
     *
     * @param string $keyId        TODO: type description here
     * @param string $contentType  TODO: type description here
     * @param string $accept       TODO: type description here
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteSignatureKey(
        $keyId,
        $contentType,
        $accept
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/iam/signature_keys/{key_id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'key_id'       => $keyId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagesmedia-signingkeys',
            'Content-Type'    => $contentType,
            'Accept'          => $accept
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 404) {
            throw new Exceptions\DeleteSignatureKey403ResponseException(
                'Unexpected error in API call. See HTTP response body for details.',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Retrieve the current detail of a signature key using the key_id returned in the ```create signature
     * key``` endpoint.
     * A successful request for the ```get signature key detail``` endpoint will return a response body as
     * follows:
     * ```json
     * {
     * "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31",
     * "cipher": "RSA",
     * "digest": "SHA224",
     * "created": "2018-01-18T10:16:12.364Z",
     * "enabled": false
     * }
     * ```
     * *Note: If an invalid or non-existent key_id parameter is specified in the request, then an HTTP 404
     * Not Found response will be returned*
     *
     * @param string $keyId        TODO: type description here
     * @param string $contentType  TODO: type description here
     * @param string $accept       TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function gETSignatureKeyDetail(
        $keyId,
        $contentType,
        $accept
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/iam/signature_keys/{key_id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'key_id'       => $keyId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagesmedia-signingkeys',
            'Content-Type'    => $contentType,
            'Accept'          => $accept
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\GETSignatureKeyDetail400ResponseException(
                'Unexpected error in API call. See HTTP response body for details.',
                $_httpContext
            );
        }

        if ($response->code == 404) {
            throw new Exceptions\GETSignatureKeyDetail403ResponseException(
                'Unexpected error in API call. See HTTP response body for details.',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaSigningKeysLib\\Models\\GETSignatureKeyDetailResponse');
    }

    /**
     * This will create a key pair:
     * - The ```private key``` stored in MessageMedia is used to create the signature.
     * - The ```public key``` is returned and stored at your side to verify the signature in callbacks.
     * You need to enable your signature key after creating.
     * The most basic body has the following structure:
     * ```json
     * {
     * "digest": "SHA224",
     * "cipher": "RSA"
     * }
     * ```
     * - ```digest``` is used to hash the message. The valid values for digest type are: SHA224, SHA256,
     * SHA512
     * - ```cipher``` is used to encrypt the hashed message. The valid value for cipher type is: RSA
     * A successful request for the ```create signature key``` endpoint will return a response body as
     * follows:
     * ```json
     * {
     * "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31",
     * "public_key":
     * "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCTIxtRyT5CuOD74r7UCT+AKzWNxvaAP9myjAqR7+vBnJKEvoPnmbKTnm6uLlx
     * utnMbjKrnCCWnQ9vtBVnnd+ElhwLDPADfMcJoOqwi7mTcxucckeEbBsfsgYRfdacxgSZL8hVD1hLViQr3xwjEIkJcx1w3x8npvwM
     * uTY0uW8+PjwIDAQAB",
     * "cipher": "RSA",
     * "digest": "SHA224",
     * "created": "2018-01-18T10:16:12.364Z",
     * "enabled": false
     * }
     * ```
     * The response body of a successful POST request to the ```create signature key``` endpoint will
     * contain six properties:
     * - ```key_id``` will be a 36 character UUID which can be used to enable, delete or get the details.
     * - ```public_key``` is used to decrypt the signature.
     * - ```cipher``` same as cipher in request body.
     * - ```digest``` same as digest in request body.
     * - ```created``` is the created date.
     * - ```enabled``` is false for the new signature key. You can use the ```enable signature key```
     * endpoint to set this field to true.
     *
     * @param string                           $contentType  TODO: type description here
     * @param string                           $accept       TODO: type description here
     * @param Models\CreateSignatureKeyRequest $body         TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSignatureKey(
        $contentType,
        $accept,
        $body
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/iam/signature_keys';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagesmedia-signingkeys',
            'Content-Type'    => $contentType,
            'Accept'          => $accept
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($body));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\CreateSignatureKey400ResponseException(
                'Unexpected error in API call. See HTTP response body for details.',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaSigningKeysLib\\Models\\CreateSignatureKeyResponse');
    }

    /**
     * Retrieve the currently enabled signature key.
     * A successful request for the ```get enabled signature key``` endpoint will return a response body as
     * follows:
     * ```json
     * {
     * "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31",
     * "cipher": "RSA",
     * "digest": "SHA224",
     * "created": "2018-01-18T10:16:12.364Z",
     * "enabled": true
     * }
     * ```
     * *Note: If there is no enabled signature key, then an HTTP 404 Not Found response will be returned*
     *
     * @param string $contentType  TODO: type description here
     * @param string $accept       TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getEnabledSignatureKey(
        $contentType,
        $accept
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/iam/signature_keys/enabled';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagesmedia-signingkeys',
            'Content-Type'    => $contentType,
            'Accept'          => $accept
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 404) {
            throw new Exceptions\GetEnabledSignatureKey403ResponseException(
                'Unexpected error in API call. See HTTP response body for details.',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaSigningKeysLib\\Models\\GetEnabledSignatureKeyResponse');
    }

    /**
     * Enable a signature key using the key_id returned in the ```create signature key``` endpoint.
     * There is only one signature key is enabled at the one moment in time. So if you enable the new
     * signature key, the old one will be disabled.
     * The most basic body has the following structure:
     * ```json
     * {
     * "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31"
     * }
     * ```
     * The response body of a successful PATCH request to ```enable signature key``` endpoint will contain
     * the ```enabled``` properties with the value is true as follows:
     * ```json
     * {
     * "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31",
     * "cipher": "RSA",
     * "digest": "SHA224",
     * "created": "2018-01-18T10:16:12.364Z",
     * "enabled": true
     * }
     * ```
     * *Note: If an invalid or non-existent key_id parameter is specified in the request, then an HTTP 404
     * Not Found response will be returned*
     *
     * @param string                           $contentType  TODO: type description here
     * @param string                           $accept       TODO: type description here
     * @param Models\EnableSignatureKeyRequest $body         TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateEnableSignatureKey(
        $contentType,
        $accept,
        $body
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/iam/signature_keys/enabled';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagesmedia-signingkeys',
            'Content-Type'    => $contentType,
            'Accept'          => $accept
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PATCH, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::patch($_queryUrl, $_headers, Request\Body::Json($body));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\EnableSignatureKey400ResponseException(
                'Unexpected error in API call. See HTTP response body for details.',
                $_httpContext
            );
        }

        if ($response->code == 404) {
            throw new Exceptions\EnableSignatureKey403ResponseException(
                'Unexpected error in API call. See HTTP response body for details.',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MessageMediaSigningKeysLib\\Models\\EnableSignatureKeyResponse');
    }

    /**
     * Retrieve the paginated list of signature keys.
     * A successful request for the ```get signature key list``` endpoint will return a response body as
     * follows:
     * ```json
     * [
     * {
     * "key_id": "7ca628a8-08b0-4e42-aeb8-960b37049c31",
     * "cipher": "RSA",
     * "digest": "SHA224",
     * "created": "2018-01-18T10:16:12.364Z",
     * "enabled": false
     * }
     * ]
     * ```
     *
     * @param string $contentType  TODO: type description here
     * @param string $accept       TODO: type description here
     * @param string $page         (optional) TODO: type description here
     * @param string $pageSize     (optional) TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function gETSignatureKeyList(
        $contentType,
        $accept,
        $page = null,
        $pageSize = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/iam/signature_keys?page={page}&page_size={page_size}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'page'         => $page,
            'page_size'    => $pageSize,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'messagesmedia-signingkeys',
            'Content-Type'    => $contentType,
            'Accept'          => $accept
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\GETSignatureKeyList400ResponseException(
                'Unexpected error in API call. See HTTP response body for details.',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'MessageMediaSigningKeysLib\\Models\\GETSignatureKeyListResponse');
    }
}
