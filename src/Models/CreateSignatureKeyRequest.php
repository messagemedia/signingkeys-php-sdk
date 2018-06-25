<?php
/*
 * MessageMediaSigningKeys
 *
 * This file was automatically generated for MessageMedia by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MessageMediaSigningKeysLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CreateSignatureKeyRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $digest public property
     */
    public $digest;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $cipher public property
     */
    public $cipher;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $digest Initialization value for $this->digest
     * @param string $cipher Initialization value for $this->cipher
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->digest = func_get_arg(0);
            $this->cipher = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['digest'] = $this->digest;
        $json['cipher'] = $this->cipher;

        return $json;
    }
}
