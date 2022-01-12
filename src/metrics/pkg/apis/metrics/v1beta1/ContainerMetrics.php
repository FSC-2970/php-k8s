<?php

namespace k8s\metrics\pkg\apis\metrics\v1beta1;

/**
 * ContainerMetrics sets resource usage metrics of a container.
 */
class ContainerMetrics extends \k8s\Resource
{
    /**
     * @var string $name required
     * Container name corresponding to the one from pod.spec.containers.
     */
    public $name;

    /**
     * @var object $usage required
     * The memory usage is the memory working set.
     */
    public $usage;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->usage = isset($data['usage']) ? $data['usage'] : null;
    }
}
