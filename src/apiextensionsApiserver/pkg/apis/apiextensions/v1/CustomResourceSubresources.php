<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\CustomResourceSubresourceScale;
use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\CustomResourceSubresourceStatus;

/**
 * CustomResourceSubresources defines the status and scale subresources for CustomResources.
 */
class CustomResourceSubresources extends \k8s\Resource
{
    /**
     * @var CustomResourceSubresourceScale $scale
     * scale indicates the custom resource should serve a `\/scale` subresource that returns an `autoscaling\/v1` Scale object.
     */
    public $scale;

    /**
     * @var CustomResourceSubresourceStatus $status
     * status indicates the custom resource should serve a `\/status` subresource. When enabled: 1. requests to the custom resource primary endpoint ignore changes to the `status` stanza of the object. 2. requests to the custom resource `\/status` subresource ignore changes to anything other than the `status` stanza of the object.
     */
    public $status;

    public function __construct($data)
    {
        if (isset($data['scale'])) {
            $this->scale = new CustomResourceSubresourceScale($data['scale']);
        }
        if (isset($data['status'])) {
            $this->status = new CustomResourceSubresourceStatus($data['status']);
        }
    }
}
