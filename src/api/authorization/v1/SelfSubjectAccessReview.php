<?php

namespace k8s\api\authorization\v1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\authorization\v1\SelfSubjectAccessReviewSpec;
use k8s\api\authorization\v1\SubjectAccessReviewStatus;

/**
 * SelfSubjectAccessReview checks whether or the current user can perform an action.  Not filling in a spec.namespace means "in all namespaces".  Self is a special case, because users should always be able to check whether they can perform an action
 */
class SelfSubjectAccessReview extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ObjectMeta $metadata
     * Standard list metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var SelfSubjectAccessReviewSpec $spec
     * Spec holds information about the request being evaluated.  user and groups must be empty
     */
    public $spec;

    /**
     * @var SubjectAccessReviewStatus $status
     * Status is filled in by the server and indicates whether the request is allowed or not
     */
    public $status;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        if (isset($data['spec'])) {
            $this->spec = new SelfSubjectAccessReviewSpec($data['spec']);
        }
        if (isset($data['status'])) {
            $this->status = new SubjectAccessReviewStatus($data['status']);
        }
    }
}
