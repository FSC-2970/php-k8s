<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ConfigMapKeySelector;
use k8s\api\core\v1\ObjectFieldSelector;
use k8s\api\core\v1\ResourceFieldSelector;
use k8s\api\core\v1\SecretKeySelector;

/**
 * EnvVarSource represents a source for the value of an EnvVar.
 */
class EnvVarSource extends \k8s\Resource
{
    /**
     * @var ConfigMapKeySelector $configMapKeyRef
     * Selects a key of a ConfigMap.
     */
    public $configMapKeyRef;

    /**
     * @var ObjectFieldSelector $fieldRef
     * Selects a field of the pod: supports metadata.name, metadata.namespace, `metadata.labels['<KEY>']`, `metadata.annotations['<KEY>']`, spec.nodeName, spec.serviceAccountName, status.hostIP, status.podIP, status.podIPs.
     */
    public $fieldRef;

    /**
     * @var ResourceFieldSelector $resourceFieldRef
     * Selects a resource of the container: only resources limits and requests (limits.cpu, limits.memory, limits.ephemeral-storage, requests.cpu, requests.memory and requests.ephemeral-storage) are currently supported.
     */
    public $resourceFieldRef;

    /**
     * @var SecretKeySelector $secretKeyRef
     * Selects a key of a secret in the pod's namespace
     */
    public $secretKeyRef;

    public function __construct($data)
    {
        if (isset($data['configMapKeyRef'])) {
            $this->configMapKeyRef = new ConfigMapKeySelector($data['configMapKeyRef']);
        }
        if (isset($data['fieldRef'])) {
            $this->fieldRef = new ObjectFieldSelector($data['fieldRef']);
        }
        if (isset($data['resourceFieldRef'])) {
            $this->resourceFieldRef = new ResourceFieldSelector($data['resourceFieldRef']);
        }
        if (isset($data['secretKeyRef'])) {
            $this->secretKeyRef = new SecretKeySelector($data['secretKeyRef']);
        }
    }
}
