<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\PodAffinityTerm;

/**
 * The weights of all of the matched WeightedPodAffinityTerm fields are added per-node to find the most preferred node(s)
 */
class WeightedPodAffinityTerm extends \k8s\Resource
{
    /**
     * @var PodAffinityTerm $podAffinityTerm
     * Required. A pod affinity term, associated with the corresponding weight.
     */
    public $podAffinityTerm;

    /**
     * @var integer $weight required
     * weight associated with matching the corresponding podAffinityTerm, in the range 1-100.
     */
    public $weight;

    public function __construct($data)
    {
        if (isset($data['podAffinityTerm'])) {
            $this->podAffinityTerm = new PodAffinityTerm($data['podAffinityTerm']);
        }
        $this->weight = isset($data['weight']) ? $data['weight'] : null;
    }
}
