<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\NodeAffinity;
use k8s\api\core\v1\PodAffinity;
use k8s\api\core\v1\PodAntiAffinity;

/**
 * Affinity is a group of affinity scheduling rules.
 */
class Affinity extends \k8s\Resource
{
    /**
     * @var NodeAffinity $nodeAffinity
     * Describes node affinity scheduling rules for the pod.
     */
    public $nodeAffinity;

    /**
     * @var PodAffinity $podAffinity
     * Describes pod affinity scheduling rules (e.g. co-locate this pod in the same node, zone, etc. as some other pod(s)).
     */
    public $podAffinity;

    /**
     * @var PodAntiAffinity $podAntiAffinity
     * Describes pod anti-affinity scheduling rules (e.g. avoid putting this pod in the same node, zone, etc. as some other pod(s)).
     */
    public $podAntiAffinity;

    public function __construct($data)
    {
        if (isset($data['nodeAffinity'])) {
            $this->nodeAffinity = new NodeAffinity($data['nodeAffinity']);
        }
        if (isset($data['podAffinity'])) {
            $this->podAffinity = new PodAffinity($data['podAffinity']);
        }
        if (isset($data['podAntiAffinity'])) {
            $this->podAntiAffinity = new PodAntiAffinity($data['podAntiAffinity']);
        }
    }
}
