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
class EnableSignatureKeyRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps key_id
     * @var string $keyId public property
     */
    public $keyId;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $keyId Initialization value for $this->keyId
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->keyId = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['key_id'] = $this->keyId;

        return $json;
    }
}
