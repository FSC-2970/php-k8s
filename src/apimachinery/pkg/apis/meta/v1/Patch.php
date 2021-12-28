<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

/**
 * Patch is provided to give a concrete name and type to the Kubernetes PATCH request body.
 */
class Patch extends \k8s\Resource
{
    public function __construct($data)
    {
    }
}
