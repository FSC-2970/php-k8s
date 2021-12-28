<?php

namespace k8s\api\authentication\v1;

/**
 * TokenReviewSpec is a description of the token authentication request.
 */
class TokenReviewSpec extends \k8s\Resource
{
    /**
     * @var string $audiences
     * Audiences is a list of the identifiers that the resource server presented with the token identifies as. Audience-aware token authenticators will verify that the token was intended for at least one of the audiences in this list. If no audiences are provided, the audience will default to the audience of the Kubernetes apiserver.
     */
    public $audiences;

    /**
     * @var string $token
     * Token is the opaque bearer token.
     */
    public $token;

    public function __construct($data)
    {
        $this->audiences = isset($data['audiences']) ? $data['audiences'] : [];
        $this->token = isset($data['token']) ? $data['token'] : null;
    }
}
