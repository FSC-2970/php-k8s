<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Initializer;
use k8s\apimachinery\pkg\apis\meta\v1\Status_v2;

/**
 * Initializers tracks the progress of initialization.
 */
class Initializers extends \k8s\Resource
{
    /**
     * @var Initializer[] $pending
     * Pending is a list of initializers that must execute in order before this object is visible. When the last pending initializer is removed, and no failing result is set, the initializers struct will be set to nil and the object is considered as initialized and visible to all clients.
     */
    public $pending;

    /**
     * @var Status_v2 $result
     * If result is set with the Failure field, the object will be persisted to storage and then deleted, ensuring that other clients can observe the deletion.
     */
    public $result;

    public function __construct($data)
    {
        $this->pending = array_map(function ($a) {
            return new Initializer($a);
        }, isset($data['pending']) ? $data['pending'] : []);
        if (isset($data['result'])) {
            $this->result = new Status_v2($data['result']);
        }
    }
}
