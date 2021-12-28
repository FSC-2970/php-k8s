<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\LocalObjectReference;
use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\core\v1\ObjectReference;

/**
 * ServiceAccount binds together: * a name, understood by users, and perhaps by peripheral systems, for an identity * a principal that can be authenticated and authorized * a set of secrets
 */
class ServiceAccount extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var boolean $automountServiceAccountToken
     * AutomountServiceAccountToken indicates whether pods running as this service account should have an API token automatically mounted. Can be overridden at the pod level.
     */
    public $automountServiceAccountToken;

    /**
     * @var LocalObjectReference[] $imagePullSecrets
     * ImagePullSecrets is a list of references to secrets in the same namespace to use for pulling any images in pods that reference this ServiceAccount. ImagePullSecrets are distinct from Secrets because Secrets can be mounted in the pod, but ImagePullSecrets are only accessed by the kubelet. More info: https:\/\/kubernetes.io\/docs\/concepts\/containers\/images\/#specifying-imagepullsecrets-on-a-pod
     */
    public $imagePullSecrets;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ObjectMeta $metadata
     * Standard object's metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var ObjectReference[] $secrets
     * Secrets is the list of secrets allowed to be used by pods running using this ServiceAccount. More info: https:\/\/kubernetes.io\/docs\/concepts\/configuration\/secret
     */
    public $secrets;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->automountServiceAccountToken = isset($data['automountServiceAccountToken']) ? $data['automountServiceAccountToken'] : null;
        $this->imagePullSecrets = array_map(function ($a) {
            return new LocalObjectReference($a);
        }, isset($data['imagePullSecrets']) ? $data['imagePullSecrets'] : []);
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        $this->secrets = array_map(function ($a) {
            return new ObjectReference($a);
        }, isset($data['secrets']) ? $data['secrets'] : []);
    }
}
