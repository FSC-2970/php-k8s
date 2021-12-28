<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\NodeSelectorTerm;

/**
 * An empty preferred scheduling term matches all objects with implicit weight 0 (i.e. it's a no-op). A null preferred scheduling term matches no objects (i.e. is also a no-op).
 */
class PreferredSchedulingTerm extends \k8s\Resource
{
    /**
     * @var NodeSelectorTerm $preference
     * A node selector term, associated with the corresponding weight.
     */
    public $preference;

    /**
     * @var integer $weight required
     * Weight associated with matching the corresponding nodeSelectorTerm, in the range 1-100.
     */
    public $weight;

    public function __construct($data)
    {
        if (isset($data['preference'])) {
            $this->preference = new NodeSelectorTerm($data['preference']);
        }
        $this->weight = $data['weight'] ?? null;
    }
}
