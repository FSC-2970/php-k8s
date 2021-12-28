<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\VolumeProjection;

/**
 * Represents a projected volume source
 */
class ProjectedVolumeSource extends \k8s\Resource
{
    /**
     * @var integer $defaultMode
     * Mode bits used to set permissions on created files by default. Must be an octal value between 0000 and 0777 or a decimal value between 0 and 511. YAML accepts both octal and decimal values, JSON requires decimal values for mode bits. Directories within the path are not affected by this setting. This might be in conflict with other options that affect the file mode, like fsGroup, and the result can be other mode bits set.
     */
    public $defaultMode;

    /**
     * @var VolumeProjection[] $sources
     * list of volume projections
     */
    public $sources;

    public function __construct($data)
    {
        $this->defaultMode = $data['defaultMode'] ?? null;
        $this->sources = array_map(function ($a) {
            return new VolumeProjection($a);
        }, $data['sources'] ?? []);
    }
}
