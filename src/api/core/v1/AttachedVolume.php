<?php

namespace k8s\api\core\v1;

/**
 * AttachedVolume describes a volume attached to a node
 */
class AttachedVolume extends \k8s\Resource
{
    /**
     * @var string $devicePath required
     * DevicePath represents the device path where the volume should be available
     */
    public $devicePath;

    /**
     * @var string $name required
     * Name of the attached volume
     */
    public $name;

    public function __construct($data)
    {
        $this->devicePath = $data['devicePath'] ?? null;
        $this->name = $data['name'] ?? null;
    }
}
