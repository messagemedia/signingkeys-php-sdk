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
class GETSignatureKeyListResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps key_id
     * @var string $keyId public property
     */
    public $keyId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $cipher public property
     */
    public $cipher;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $digest public property
     */
    public $digest;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $created public property
     */
    public $created;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $enabled public property
     */
    public $enabled;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $keyId   Initialization value for $this->keyId
     * @param string $cipher  Initialization value for $this->cipher
     * @param string $digest  Initialization value for $this->digest
     * @param string $created Initialization value for $this->created
     * @param bool   $enabled Initialization value for $this->enabled
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->keyId   = func_get_arg(0);
            $this->cipher  = func_get_arg(1);
            $this->digest  = func_get_arg(2);
            $this->created = func_get_arg(3);
            $this->enabled = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['key_id']  = $this->keyId;
        $json['cipher']  = $this->cipher;
        $json['digest']  = $this->digest;
        $json['created'] = $this->created;
        $json['enabled'] = $this->enabled;

        return $json;
    }
}
