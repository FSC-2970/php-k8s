<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\runtime\RawExtension;

/**
 * Event represents a single event to a watched resource.
 */
class WatchEvent extends \k8s\Resource
{
    /**
     * @var RawExtension $object
     * Object is:
     *  * If Type is Added or Modified: the new state of the object.
     *  * If Type is Deleted: the state of the object immediately before deletion.
     *  * If Type is Error: *Status is recommended; other types may make sense
     *    depending on context.
     */
    public $object;

    /**
     * @var string $type required
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['object'])) {
            $this->object = new RawExtension($data['object']);
        }
        $this->type = $data['type'] ?? null;
    }
}
