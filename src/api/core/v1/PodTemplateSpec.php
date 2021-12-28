<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\core\v1\PodSpec;

/**
 * PodTemplateSpec describes the data a pod should have when created from a template
 */
class PodTemplateSpec extends \k8s\Resource
{
    /**
     * @var ObjectMeta $metadata
     * Standard object's metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var PodSpec $spec
     * Specification of the desired behavior of the pod. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#spec-and-status
     */
    public $spec;

    public function __construct($data)
    {
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        if (isset($data['spec'])) {
            $this->spec = new PodSpec($data['spec']);
        }
    }
}
