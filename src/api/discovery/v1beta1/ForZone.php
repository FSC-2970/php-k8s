<?php

namespace k8s\api\discovery\v1beta1;

/**
 * ForZone provides information about which zones should consume this endpoint.
 */
class ForZone extends \k8s\Resource
{
    /**
     * @var string $name required
     * name represents the name of the zone.
     */
    public $name;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
    }
}
