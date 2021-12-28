<?php

namespace k8s\api\batch\v1beta1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\batch\v1\JobSpec;

/**
 * JobTemplateSpec describes the data a Job should have when created from a template
 */
class JobTemplateSpec extends \k8s\Resource
{
    /**
     * @var ObjectMeta $metadata
     * Standard object's metadata of the jobs created from this template. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var JobSpec $spec
     * Specification of the desired behavior of the job. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#spec-and-status
     */
    public $spec;

    public function __construct($data)
    {
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        if (isset($data['spec'])) {
            $this->spec = new JobSpec($data['spec']);
        }
    }
}
