<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ObjectFieldSelector;
use k8s\api\core\v1\ResourceFieldSelector;

/**
 * DownwardAPIVolumeFile represents information to create the file containing the pod field
 */
class DownwardAPIVolumeFile extends \k8s\Resource
{
    /**
     * @var ObjectFieldSelector $fieldRef
     * Required: Selects a field of the pod: only annotations, labels, name and namespace are supported.
     */
    public $fieldRef;

    /**
     * @var integer $mode
     * Optional: mode bits used to set permissions on this file, must be an octal value between 0000 and 0777 or a decimal value between 0 and 511. YAML accepts both octal and decimal values, JSON requires decimal values for mode bits. If not specified, the volume defaultMode will be used. This might be in conflict with other options that affect the file mode, like fsGroup, and the result can be other mode bits set.
     */
    public $mode;

    /**
     * @var string $path required
     * Required: Path is  the relative path name of the file to be created. Must not be absolute or contain the '..' path. Must be utf-8 encoded. The first item of the relative path must not start with '..'
     */
    public $path;

    /**
     * @var ResourceFieldSelector $resourceFieldRef
     * Selects a resource of the container: only resources limits and requests (limits.cpu, limits.memory, requests.cpu and requests.memory) are currently supported.
     */
    public $resourceFieldRef;

    public function __construct($data)
    {
        if (isset($data['fieldRef'])) {
            $this->fieldRef = new ObjectFieldSelector($data['fieldRef']);
        }
        $this->mode = $data['mode'] ?? null;
        $this->path = $data['path'] ?? null;
        if (isset($data['resourceFieldRef'])) {
            $this->resourceFieldRef = new ResourceFieldSelector($data['resourceFieldRef']);
        }
    }
}
