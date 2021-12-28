<?php

namespace k8s\api\core\v1;

/**
 * Maps a string key to a path within a volume.
 */
class KeyToPath extends \k8s\Resource
{
    /**
     * @var string $key required
     * The key to project.
     */
    public $key;

    /**
     * @var integer $mode
     * Optional: mode bits used to set permissions on this file. Must be an octal value between 0000 and 0777 or a decimal value between 0 and 511. YAML accepts both octal and decimal values, JSON requires decimal values for mode bits. If not specified, the volume defaultMode will be used. This might be in conflict with other options that affect the file mode, like fsGroup, and the result can be other mode bits set.
     */
    public $mode;

    /**
     * @var string $path required
     * The relative path of the file to map the key to. May not be an absolute path. May not contain the path element '..'. May not start with the string '..'.
     */
    public $path;

    public function __construct($data)
    {
        $this->key = $data['key'] ?? null;
        $this->mode = $data['mode'] ?? null;
        $this->path = $data['path'] ?? null;
    }
}
