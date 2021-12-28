<?php

namespace k8s\api\storage\v1;

use k8s\api\core\v1\TopologySelectorTerm;
use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;

/**
 * StorageClass describes the parameters for a class of storage for which PersistentVolumes can be dynamically provisioned.
 * 
 * StorageClasses are non-namespaced; the name of the storage class according to etcd is in ObjectMeta.Name.
 */
class StorageClass extends \k8s\Resource
{
    /**
     * @var boolean $allowVolumeExpansion
     * AllowVolumeExpansion shows whether the storage class allow volume expand
     */
    public $allowVolumeExpansion;

    /**
     * @var TopologySelectorTerm[] $allowedTopologies
     * Restrict the node topologies where volumes can be dynamically provisioned. Each volume plugin defines its own supported topology specifications. An empty TopologySelectorTerm list means there is no topology restriction. This field is only honored by servers that enable the VolumeScheduling feature.
     */
    public $allowedTopologies;

    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

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
     * @var string $mountOptions
     * Dynamically provisioned PersistentVolumes of this storage class are created with these mountOptions, e.g. ["ro", "soft"]. Not validated - mount of the PVs will simply fail if one is invalid.
     */
    public $mountOptions;

    /**
     * @var object $parameters
     * Parameters holds the parameters for the provisioner that should create volumes of this storage class.
     */
    public $parameters;

    /**
     * @var string $provisioner required
     * Provisioner indicates the type of the provisioner.
     */
    public $provisioner;

    /**
     * @var string $reclaimPolicy
     * Dynamically provisioned PersistentVolumes of this storage class are created with this reclaimPolicy. Defaults to Delete.
     */
    public $reclaimPolicy;

    /**
     * @var string $volumeBindingMode
     * VolumeBindingMode indicates how PersistentVolumeClaims should be provisioned and bound.  When unset, VolumeBindingImmediate is used. This field is only honored by servers that enable the VolumeScheduling feature.
     */
    public $volumeBindingMode;

    public function __construct($data)
    {
        $this->allowVolumeExpansion = $data['allowVolumeExpansion'] ?? null;
        $this->allowedTopologies = array_map(function ($a) {
            return new TopologySelectorTerm($a);
        }, $data['allowedTopologies'] ?? []);
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->kind = $data['kind'] ?? null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        $this->mountOptions = $data['mountOptions'] ?? [];
        $this->parameters = $data['parameters'] ?? null;
        $this->provisioner = $data['provisioner'] ?? null;
        $this->reclaimPolicy = $data['reclaimPolicy'] ?? null;
        $this->volumeBindingMode = $data['volumeBindingMode'] ?? null;
    }
}
