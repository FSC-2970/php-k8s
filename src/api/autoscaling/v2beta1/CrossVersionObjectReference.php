<?php

namespace k8s\api\autoscaling\v2beta1;

/**
 * CrossVersionObjectReference contains enough information to let you identify the referred resource.
 */
class CrossVersionObjectReference extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * API version of the referent
     */
    public $apiVersion;

    /**
     * @var string $kind required
     * Kind of the referent; More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds"
     */
    public $kind;

    /**
     * @var string $name required
     * Name of the referent; More info: http:\/\/kubernetes.io\/docs\/user-guide\/identifiers#names
     */
    public $name;

    public function __construct($data)
    {
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->kind = $data['kind'] ?? null;
        $this->name = $data['name'] ?? null;
    }
}
