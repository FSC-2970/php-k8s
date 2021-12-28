<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ConfigMapNodeConfigSource;

/**
 * NodeConfigSource specifies a source of node configuration. Exactly one subfield (excluding metadata) must be non-nil. This API is deprecated since 1.22
 */
class NodeConfigSource extends \k8s\Resource
{
    /**
     * @var ConfigMapNodeConfigSource $configMap
     * ConfigMap is a reference to a Node's ConfigMap
     */
    public $configMap;

    public function __construct($data)
    {
        if (isset($data['configMap'])) {
            $this->configMap = new ConfigMapNodeConfigSource($data['configMap']);
        }
    }
}
