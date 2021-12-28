<?php

namespace k8s\api\core\v1;

/**
 * NamespaceSpec describes the attributes on a Namespace.
 */
class NamespaceSpec extends \k8s\Resource
{
    /**
     * @var string $finalizers
     * Finalizers is an opaque list of values that must be empty to permanently remove object from storage. More info: https:\/\/kubernetes.io\/docs\/tasks\/administer-cluster\/namespaces\/
     */
    public $finalizers;

    public function __construct($data)
    {
        $this->finalizers = isset($data['finalizers']) ? $data['finalizers'] : [];
    }
}
