<?php

namespace k8s\api\authentication\v1;

use k8s\api\authentication\v1\UserInfo;

/**
 * TokenReviewStatus is the result of the token authentication request.
 */
class TokenReviewStatus extends \k8s\Resource
{
    /**
     * @var string $audiences
     * Audiences are audience identifiers chosen by the authenticator that are compatible with both the TokenReview and token. An identifier is any identifier in the intersection of the TokenReviewSpec audiences and the token's audiences. A client of the TokenReview API that sets the spec.audiences field should validate that a compatible audience identifier is returned in the status.audiences field to ensure that the TokenReview server is audience aware. If a TokenReview returns an empty status.audience field where status.authenticated is "true", the token is valid against the audience of the Kubernetes API server.
     */
    public $audiences;

    /**
     * @var boolean $authenticated
     * Authenticated indicates that the token was associated with a known user.
     */
    public $authenticated;

    /**
     * @var string $error
     * Error indicates that the token couldn't be checked
     */
    public $error;

    /**
     * @var UserInfo $user
     * User is the UserInfo associated with the provided token.
     */
    public $user;

    public function __construct($data)
    {
        $this->audiences = isset($data['audiences']) ? $data['audiences'] : [];
        $this->authenticated = isset($data['authenticated']) ? $data['authenticated'] : null;
        $this->error = isset($data['error']) ? $data['error'] : null;
        if (isset($data['user'])) {
            $this->user = new UserInfo($data['user']);
        }
    }
}
