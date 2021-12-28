<?php

namespace k8s\api\autoscaling\v1;

/**
 * ScaleSpec describes the attributes of a scale subresource.
 */
class ScaleSpec extends \k8s\Resource
{
    /**
     * @var integer $replicas
     * desired number of instances for the scaled object.
     */
    public $replicas;

    public function __construct($data)
    {
        $this->replicas = $data['replicas'] ?? null;
    }
}
