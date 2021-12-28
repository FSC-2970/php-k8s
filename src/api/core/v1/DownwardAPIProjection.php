<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\DownwardAPIVolumeFile;

/**
 * Represents downward API info for projecting into a projected volume. Note that this is identical to a downwardAPI volume source without the default mode.
 */
class DownwardAPIProjection extends \k8s\Resource
{
    /**
     * @var DownwardAPIVolumeFile[] $items
     * Items is a list of DownwardAPIVolume file
     */
    public $items;

    public function __construct($data)
    {
        $this->items = array_map(function ($a) {
            return new DownwardAPIVolumeFile($a);
        }, isset($data['items']) ? $data['items'] : []);
    }
}
