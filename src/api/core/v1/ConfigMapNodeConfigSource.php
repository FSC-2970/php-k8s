<?php

namespace k8s\api\core\v1;

/**
 * ConfigMapNodeConfigSource contains the information to reference a ConfigMap as a config source for the Node. This API is deprecated since 1.22: https:\/\/git.k8s.io\/enhancements\/keps\/sig-node\/281-dynamic-kubelet-configuration
 */
class ConfigMapNodeConfigSource extends \k8s\Resource
{
    /**
     * @var string $kubeletConfigKey required
     * KubeletConfigKey declares which key of the referenced ConfigMap corresponds to the KubeletConfiguration structure This field is required in all cases.
     */
    public $kubeletConfigKey;

    /**
     * @var string $name required
     * Name is the metadata.name of the referenced ConfigMap. This field is required in all cases.
     */
    public $name;

    /**
     * @var string $namespace required
     * Namespace is the metadata.namespace of the referenced ConfigMap. This field is required in all cases.
     */
    public $namespace;

    /**
     * @var string $resourceVersion
     * ResourceVersion is the metadata.ResourceVersion of the referenced ConfigMap. This field is forbidden in Node.Spec, and required in Node.Status.
     */
    public $resourceVersion;

    /**
     * @var string $uid
     * UID is the metadata.UID of the referenced ConfigMap. This field is forbidden in Node.Spec, and required in Node.Status.
     */
    public $uid;

    public function __construct($data)
    {
        $this->kubeletConfigKey = isset($data['kubeletConfigKey']) ? $data['kubeletConfigKey'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->namespace = isset($data['namespace']) ? $data['namespace'] : null;
        $this->resourceVersion = isset($data['resourceVersion']) ? $data['resourceVersion'] : null;
        $this->uid = isset($data['uid']) ? $data['uid'] : null;
    }
}
