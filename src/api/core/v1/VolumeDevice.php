<?php

namespace k8s\api\core\v1;

/**
 * volumeDevice describes a mapping of a raw block device within a container.
 */
class VolumeDevice extends \k8s\Resource
{
    /**
     * @var string $devicePath required
     * devicePath is the path inside of the container that the device will be mapped to.
     */
    public $devicePath;

    /**
     * @var string $name required
     * name must match the name of a persistentVolumeClaim in the pod
     */
    public $name;

    public function __construct($data)
    {
        $this->devicePath = isset($data['devicePath']) ? $data['devicePath'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
    }
}
