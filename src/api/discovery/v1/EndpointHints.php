<?php

namespace k8s\api\discovery\v1;

use k8s\api\discovery\v1\ForZone;

/**
 * EndpointHints provides hints describing how an endpoint should be consumed.
 */
class EndpointHints extends \k8s\Resource
{
    /**
     * @var ForZone[] $forZones
     * forZones indicates the zone(s) this endpoint should be consumed by to enable topology aware routing.
     */
    public $forZones;

    public function __construct($data)
    {
        $this->forZones = array_map(function ($a) {
            return new ForZone($a);
        }, isset($data['forZones']) ? $data['forZones'] : []);
    }
}
