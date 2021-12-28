<?php

namespace k8s\api\authorization\v1;

use k8s\api\authorization\v1\NonResourceAttributes;
use k8s\api\authorization\v1\ResourceAttributes;

/**
 * SelfSubjectAccessReviewSpec is a description of the access request.  Exactly one of ResourceAuthorizationAttributes and NonResourceAuthorizationAttributes must be set
 */
class SelfSubjectAccessReviewSpec extends \k8s\Resource
{
    /**
     * @var NonResourceAttributes $nonResourceAttributes
     * NonResourceAttributes describes information for a non-resource access request
     */
    public $nonResourceAttributes;

    /**
     * @var ResourceAttributes $resourceAttributes
     * ResourceAuthorizationAttributes describes information for a resource access request
     */
    public $resourceAttributes;

    public function __construct($data)
    {
        if (isset($data['nonResourceAttributes'])) {
            $this->nonResourceAttributes = new NonResourceAttributes($data['nonResourceAttributes']);
        }
        if (isset($data['resourceAttributes'])) {
            $this->resourceAttributes = new ResourceAttributes($data['resourceAttributes']);
        }
    }
}
