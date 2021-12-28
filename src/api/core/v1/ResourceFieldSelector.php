<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\api\resource\Quantity;

/**
 * ResourceFieldSelector represents container resources (cpu, memory) and their output format
 */
class ResourceFieldSelector extends \k8s\Resource
{
    /**
     * @var string $containerName
     * Container name: required for volumes, optional for env vars
     */
    public $containerName;

    /**
     * @var Quantity $divisor
     * Specifies the output format of the exposed resources, defaults to "1"
     */
    public $divisor;

    /**
     * @var string $resource required
     * Required: resource to select
     */
    public $resource;

    public function __construct($data)
    {
        $this->containerName = $data['containerName'] ?? null;
        if (isset($data['divisor'])) {
            $this->divisor = new Quantity($data['divisor']);
        }
        $this->resource = $data['resource'] ?? null;
    }
}
