<?php

namespace k8s\api\authorization\v1;

use k8s\api\authorization\v1\NonResourceAttributes;
use k8s\api\authorization\v1\ResourceAttributes;

/**
 * SubjectAccessReviewSpec is a description of the access request.  Exactly one of ResourceAuthorizationAttributes and NonResourceAuthorizationAttributes must be set
 */
class SubjectAccessReviewSpec extends \k8s\Resource
{
    /**
     * @var object $extra
     * Extra corresponds to the user.Info.GetExtra() method from the authenticator.  Since that is input to the authorizer it needs a reflection here.
     */
    public $extra;

    /**
     * @var string $groups
     * Groups is the groups you're testing for.
     */
    public $groups;

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

    /**
     * @var string $uid
     * UID information about the requesting user.
     */
    public $uid;

    /**
     * @var string $user
     * User is the user you're testing for. If you specify "User" but not "Groups", then is it interpreted as "What if User were not a member of any groups
     */
    public $user;

    public function __construct($data)
    {
        $this->extra = isset($data['extra']) ? $data['extra'] : null;
        $this->groups = isset($data['groups']) ? $data['groups'] : [];
        if (isset($data['nonResourceAttributes'])) {
            $this->nonResourceAttributes = new NonResourceAttributes($data['nonResourceAttributes']);
        }
        if (isset($data['resourceAttributes'])) {
            $this->resourceAttributes = new ResourceAttributes($data['resourceAttributes']);
        }
        $this->uid = isset($data['uid']) ? $data['uid'] : null;
        $this->user = isset($data['user']) ? $data['user'] : null;
    }
}
