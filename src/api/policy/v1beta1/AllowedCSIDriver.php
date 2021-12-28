<?php

namespace k8s\api\policy\v1beta1;

/**
 * AllowedCSIDriver represents a single inline CSI Driver that is allowed to be used.
 */
class AllowedCSIDriver extends \k8s\Resource
{
    /**
     * @var string $name required
     * Name is the registered name of the CSI driver
     */
    public $name;

    public function __construct($data)
    {
        $this->name = $data['name'] ?? null;
    }
}
