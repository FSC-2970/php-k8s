<?php

namespace k8s\api\storage\v1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\storage\v1\VolumeAttachmentSpec;
use k8s\api\storage\v1\VolumeAttachmentStatus;

/**
 * VolumeAttachment captures the intent to attach or detach the specified volume to\/from the specified node.
 * 
 * VolumeAttachment objects are non-namespaced.
 */
class VolumeAttachment extends \k8s\Resource
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
     * Standard object metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var VolumeAttachmentSpec $spec
     * Specification of the desired attach\/detach volume behavior. Populated by the Kubernetes system.
     */
    public $spec;

    /**
     * @var VolumeAttachmentStatus $status
     * Status of the VolumeAttachment request. Populated by the entity completing the attach or detach operation, i.e. the external-attacher.
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
            $this->spec = new VolumeAttachmentSpec($data['spec']);
        }
        if (isset($data['status'])) {
            $this->status = new VolumeAttachmentStatus($data['status']);
        }
    }
}
