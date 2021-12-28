<?php

namespace k8s\api\discovery\v1beta1;

use k8s\api\discovery\v1beta1\ForZone;

/**
 * EndpointHints provides hints describing how an endpoint should be consumed.
 */
class EndpointHints extends \k8s\Resource
{
    /**
     * @var ForZone[] $forZones
     * forZones indicates the zone(s) this endpoint should be consumed by to enable topology aware routing. May contain a maximum of 8 entries.
     */
    public $forZones;

    public function __construct($data)
    {
        $this->forZones = array_map(function ($a) {
            return new ForZone($a);
        }, $data['forZones'] ?? []);
    }
}
