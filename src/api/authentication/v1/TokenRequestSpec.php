<?php

namespace k8s\api\authentication\v1;

use k8s\api\authentication\v1\BoundObjectReference;

/**
 * TokenRequestSpec contains client provided parameters of a token request.
 */
class TokenRequestSpec extends \k8s\Resource
{
    /**
     * @var string $audiences required
     * Audiences are the intendend audiences of the token. A recipient of a token must identitfy themself with an identifier in the list of audiences of the token, and otherwise should reject the token. A token issued for multiple audiences may be used to authenticate against any of the audiences listed but implies a high degree of trust between the target audiences.
     */
    public $audiences;

    /**
     * @var BoundObjectReference $boundObjectRef
     * BoundObjectRef is a reference to an object that the token will be bound to. The token will only be valid for as long as the bound object exists. NOTE: The API server's TokenReview endpoint will validate the BoundObjectRef, but other audiences may not. Keep ExpirationSeconds small if you want prompt revocation.
     */
    public $boundObjectRef;

    /**
     * @var integer $expirationSeconds
     * ExpirationSeconds is the requested duration of validity of the request. The token issuer may return a token with a different validity duration so a client needs to check the 'expiration' field in a response.
     */
    public $expirationSeconds;

    public function __construct($data)
    {
        $this->audiences = $data['audiences'] ?? [];
        if (isset($data['boundObjectRef'])) {
            $this->boundObjectRef = new BoundObjectReference($data['boundObjectRef']);
        }
        $this->expirationSeconds = $data['expirationSeconds'] ?? null;
    }
}
