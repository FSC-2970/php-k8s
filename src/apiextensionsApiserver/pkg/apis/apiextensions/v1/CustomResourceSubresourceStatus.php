<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

/**
 * CustomResourceSubresourceStatus defines how to serve the status subresource for CustomResources. Status is represented by the `.status` JSON path inside of a CustomResource. When set, * exposes a \/status subresource for the custom resource * PUT requests to the \/status subresource take a custom resource object, and ignore changes to anything except the status stanza * PUT\/POST\/PATCH requests to the custom resource ignore changes to the status stanza
 */
class CustomResourceSubresourceStatus extends \k8s\Resource
{
    public function __construct($data)
    {
    }
}
