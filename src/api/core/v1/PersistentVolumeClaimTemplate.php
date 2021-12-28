<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\core\v1\PersistentVolumeClaimSpec;

/**
 * PersistentVolumeClaimTemplate is used to produce PersistentVolumeClaim objects as part of an EphemeralVolumeSource.
 */
class PersistentVolumeClaimTemplate extends \k8s\Resource
{
    /**
     * @var ObjectMeta $metadata
     * May contain labels and annotations that will be copied into the PVC when creating it. No other fields are allowed and will be rejected during validation.
     */
    public $metadata;

    /**
     * @var PersistentVolumeClaimSpec $spec
     * The specification for the PersistentVolumeClaim. The entire content is copied unchanged into the PVC that gets created from this template. The same fields as in a PersistentVolumeClaim are also valid here.
     */
    public $spec;

    public function __construct($data)
    {
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        if (isset($data['spec'])) {
            $this->spec = new PersistentVolumeClaimSpec($data['spec']);
        }
    }
}
