<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\DownwardAPIVolumeFile;

/**
 * DownwardAPIVolumeSource represents a volume containing downward API info. Downward API volumes support ownership management and SELinux relabeling.
 */
class DownwardAPIVolumeSource extends \k8s\Resource
{
    /**
     * @var integer $defaultMode
     * Optional: mode bits to use on created files by default. Must be a Optional: mode bits used to set permissions on created files by default. Must be an octal value between 0000 and 0777 or a decimal value between 0 and 511. YAML accepts both octal and decimal values, JSON requires decimal values for mode bits. Defaults to 0644. Directories within the path are not affected by this setting. This might be in conflict with other options that affect the file mode, like fsGroup, and the result can be other mode bits set.
     */
    public $defaultMode;

    /**
     * @var DownwardAPIVolumeFile[] $items
     * Items is a list of downward API volume file
     */
    public $items;

    public function __construct($data)
    {
        $this->defaultMode = isset($data['defaultMode']) ? $data['defaultMode'] : null;
        $this->items = array_map(function ($a) {
            return new DownwardAPIVolumeFile($a);
        }, isset($data['items']) ? $data['items'] : []);
    }
}
