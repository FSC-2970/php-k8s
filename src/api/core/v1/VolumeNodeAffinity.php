<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\NodeSelector;

/**
 * VolumeNodeAffinity defines constraints that limit what nodes this volume can be accessed from.
 */
class VolumeNodeAffinity extends \k8s\Resource
{
    /**
     * @var NodeSelector $required
     * Required specifies hard node constraints that must be met.
     */
    public $required;

    public function __construct($data)
    {
        if (isset($data['required'])) {
            $this->required = new NodeSelector($data['required']);
        }
    }
}
