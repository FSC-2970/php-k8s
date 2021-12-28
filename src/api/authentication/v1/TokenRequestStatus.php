<?php

namespace k8s\api\authentication\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * TokenRequestStatus is the result of a token request.
 */
class TokenRequestStatus extends \k8s\Resource
{
    /**
     * @var Time $expirationTimestamp
     * ExpirationTimestamp is the time of expiration of the returned token.
     */
    public $expirationTimestamp;

    /**
     * @var string $token required
     * Token is the opaque bearer token.
     */
    public $token;

    public function __construct($data)
    {
        if (isset($data['expirationTimestamp'])) {
            $this->expirationTimestamp = new Time($data['expirationTimestamp']);
        }
        $this->token = isset($data['token']) ? $data['token'] : null;
    }
}
