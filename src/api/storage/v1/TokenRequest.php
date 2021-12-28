<?php

namespace k8s\api\storage\v1;

/**
 * TokenRequest contains parameters of a service account token.
 */
class TokenRequest extends \k8s\Resource
{
    /**
     * @var string $audience required
     * Audience is the intended audience of the token in "TokenRequestSpec". It will default to the audiences of kube apiserver.
     */
    public $audience;

    /**
     * @var integer $expirationSeconds
     * ExpirationSeconds is the duration of validity of the token in "TokenRequestSpec". It has the same default value of "ExpirationSeconds" in "TokenRequestSpec".
     */
    public $expirationSeconds;

    public function __construct($data)
    {
        $this->audience = isset($data['audience']) ? $data['audience'] : null;
        $this->expirationSeconds = isset($data['expirationSeconds']) ? $data['expirationSeconds'] : null;
    }
}
