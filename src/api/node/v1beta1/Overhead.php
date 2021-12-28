<?php

namespace k8s\api\node\v1beta1;

/**
 * Overhead structure represents the resource overhead associated with running a pod.
 */
class Overhead extends \k8s\Resource
{
    /**
     * @var object $podFixed
     * PodFixed represents the fixed resource overhead associated with running a pod.
     */
    public $podFixed;

    public function __construct($data)
    {
        $this->podFixed = $data['podFixed'] ?? null;
    }
}
