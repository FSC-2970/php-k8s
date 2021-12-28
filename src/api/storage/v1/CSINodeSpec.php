<?php

namespace k8s\api\storage\v1;

use k8s\api\storage\v1\CSINodeDriver;

/**
 * CSINodeSpec holds information about the specification of all CSI drivers installed on a node
 */
class CSINodeSpec extends \k8s\Resource
{
    /**
     * @var CSINodeDriver[] $drivers
     * drivers is a list of information of all CSI Drivers existing on a node. If all drivers in the list are uninstalled, this can become empty.
     */
    public $drivers;

    public function __construct($data)
    {
        $this->drivers = array_map(function ($a) {
            return new CSINodeDriver($a);
        }, $data['drivers'] ?? []);
    }
}
