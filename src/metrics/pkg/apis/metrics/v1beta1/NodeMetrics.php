<?php

namespace k8s\metrics\pkg\apis\metrics\v1beta1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta_v2;
use k8s\apimachinery\pkg\apis\meta\v1\Time;
use k8s\apimachinery\pkg\apis\meta\v1\Duration;

/**
 * NodeMetrics sets resource usage metrics of a node.
 */
class NodeMetrics extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ObjectMeta_v2 $metadata
     */
    public $metadata;

    /**
     * @var Time $timestamp
     * The following fields define time interval from which metrics were collected from the interval [Timestamp-Window, Timestamp].
     */
    public $timestamp;

    /**
     * @var object $usage required
     * The memory usage is the memory working set.
     */
    public $usage;

    /**
     * @var Duration $window
     */
    public $window;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta_v2($data['metadata']);
        }
        if (isset($data['timestamp'])) {
            $this->timestamp = new Time($data['timestamp']);
        }
        $this->usage = isset($data['usage']) ? $data['usage'] : null;
        if (isset($data['window'])) {
            $this->window = new Duration($data['window']);
        }
    }
}
