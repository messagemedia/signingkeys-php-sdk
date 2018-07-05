<?php
/*
 * MessageMediaSigningKeys
 *
 * This file was automatically generated for MessageMedia by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MessageMediaSigningKeysLib\Tests;

use MessageMediaSigningKeysLib\APIException;
use MessageMediaSigningKeysLib\Exceptions;
use MessageMediaSigningKeysLib\APIHelper;
use MessageMediaSigningKeysLib\Models;

class SignatureKeyManagementControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \MessageMediaSigningKeysLib\Controllers\SignatureKeyManagementController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        TestHelper::getAuthorizationFromEnvironment();
        $client = new \MessageMediaSigningKeysLib\MessageMediaSigningKeysClient();
        self::$controller = $client->getSignatureKeyManagement();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Todo Add description for test testCreateSignatureKeyTest
     */
    public function testCreateSignatureKeyTest()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '{   "digest": "SHA224",   "cipher": "RSA" }'),
            'MessageMediaSigningKeysLib\\Models\\CreateSignatureKeyRequest'
        );

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->createSignatureKey($body);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            201,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 201"
        );

        // Test whether the captured response is as we expected
        $this->assertNotNull($result, "Result does not exist");

        $this->assertTrue(
            TestHelper::isJsonObjectProperSubsetOf(
                "{\n  \"key_id\": \"7ca628a8-08b0-4e42-aeb8-960b37049c31\",\n  \"public_key\": \"MIGfMA0GCSqGSIb3DQEB" .
                "AQUAA4GNADCBiQKBgQCTIxtRyT5CuOD74r7UCT+AKzWNxvaAP9myjAqR7+vBnJKEvoPnmbKTnm6uLlxutnMbjKrnCCWnQ9vtBVnn" .
                "d+ElhwLDPADfMcJoOqwi7mTcxucckeEbBsfsgYRfdacxgSZL8hVD1hLViQr3xwjEIkJcx1w3x8npvwMuTY0uW8+PjwIDAQAB\"," .
                "\n  \"cipher\": \"RSA\",\n  \"digest\": \"SHA224\",\n  \"created\": \"2018-01-18T10:16:12.364Z\",\n " .
                " \"enabled\": false\n}",
                $this->httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }
}
