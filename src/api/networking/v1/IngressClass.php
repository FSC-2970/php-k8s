<?php

namespace k8s\api\networking\v1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\networking\v1\IngressClassSpec;

/**
 * IngressClass represents the class of the Ingress, referenced by the Ingress Spec. The `ingressclass.kubernetes.io\/is-default-class` annotation can be used to indicate that an IngressClass should be considered default. When a single IngressClass resource has this annotation set to true, new Ingress resources without a class specified will be assigned this default class.
 */
class IngressClass extends \k8s\Resource
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
     * @var IngressClassSpec $spec
     * Spec is the desired state of the IngressClass. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#spec-and-status
     */
    public $spec;

    public function __construct($data)
    {
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->kind = $data['kind'] ?? null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        if (isset($data['spec'])) {
            $this->spec = new IngressClassSpec($data['spec']);
        }
    }
}
