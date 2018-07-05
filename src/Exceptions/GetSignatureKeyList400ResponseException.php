<?php
/*
 * MessageMediaSigningKeys
 *
 * This file was automatically generated for MessageMedia by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MessageMediaSigningKeysLib\Exceptions;

use MessageMediaSigningKeysLib\APIException;
use MessageMediaSigningKeysLib\APIHelper;

/**
 * @todo Write general description for this model
 */
class GetSignatureKeyList400ResponseException extends APIException
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $message public property
     */
    public $message;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $details public property
     */
    public $details;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct($reason, $context)
    {
        parent::__construct($reason, $context);
    }

    /**
     * Unbox response into this exception class
     */
    public function unbox()
    {
        APIHelper::deserialize(self::getResponseBody(), $this, false, false);
    }
}
