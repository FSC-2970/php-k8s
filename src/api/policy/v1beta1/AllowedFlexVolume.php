<?php

namespace k8s\api\policy\v1beta1;

/**
 * AllowedFlexVolume represents a single Flexvolume that is allowed to be used.
 */
class AllowedFlexVolume extends \k8s\Resource
{
    /**
     * @var string $driver required
     * driver is the name of the Flexvolume driver.
     */
    public $driver;

    public function __construct($data)
    {
        $this->driver = isset($data['driver']) ? $data['driver'] : null;
    }
}
