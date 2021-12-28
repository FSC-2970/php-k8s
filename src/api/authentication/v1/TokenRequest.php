<?php

namespace k8s\api\authentication\v1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\authentication\v1\TokenRequestSpec;
use k8s\api\authentication\v1\TokenRequestStatus;

/**
 * TokenRequest requests a token for a given service account.
 */
class TokenRequest extends \k8s\Resource
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
     * Standard object's metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var TokenRequestSpec $spec
     * Spec holds information about the request being evaluated
     */
    public $spec;

    /**
     * @var TokenRequestStatus $status
     * Status is filled in by the server and indicates whether the token can be authenticated.
     */
    public $status;

    public function __construct($data)
    {
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->kind = $data['kind'] ?? null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        if (isset($data['spec'])) {
            $this->spec = new TokenRequestSpec($data['spec']);
        }
        if (isset($data['status'])) {
            $this->status = new TokenRequestStatus($data['status']);
        }
    }
}
