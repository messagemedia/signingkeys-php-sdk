<?php
/*
 * MessageMediaSigningKeys
 *
 * This file was automatically generated for MessageMedia by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MessageMediaSigningKeysLib;

use MessageMediaSigningKeysLib\Controllers;

/**
 * MessageMediaSigningKeys client class
 */
class MessageMediaSigningKeysClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $basicAuthUserName = null,
        $basicAuthPassword = null
    ) {
        Configuration::$basicAuthUserName = $basicAuthUserName ? $basicAuthUserName : Configuration::$basicAuthUserName;
        Configuration::$basicAuthPassword = $basicAuthPassword ? $basicAuthPassword : Configuration::$basicAuthPassword;
    }
    /**
     * Singleton access to SignatureKeyManagement controller
     * @return Controllers\SignatureKeyManagementController The *Singleton* instance
     */
    public function getSignatureKeyManagement()
    {
        return Controllers\SignatureKeyManagementController::getInstance();
    }
}
