<?php

namespace k8s\api\storage\v1beta1;

use k8s\apimachinery\pkg\api\resource\Quantity;
use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;

/**
 * CSIStorageCapacity stores the result of one CSI GetCapacity call. For a given StorageClass, this describes the available capacity in a particular topology segment.  This can be used when considering where to instantiate new PersistentVolumes.
 * 
 * For example this can express things like: - StorageClass "standard" has "1234 GiB" available in "topology.kubernetes.io\/zone=us-east1" - StorageClass "localssd" has "10 GiB" available in "kubernetes.io\/hostname=knode-abc123"
 * 
 * The following three cases all imply that no capacity is available for a certain combination: - no object exists with suitable topology and storage class name - such an object exists, but the capacity is unset - such an object exists, but the capacity is zero
 * 
 * The producer of these objects can decide which approach is more suitable.
 * 
 * They are consumed by the kube-scheduler if the CSIStorageCapacity beta feature gate is enabled there and a CSI driver opts into capacity-aware scheduling with CSIDriver.StorageCapacity.
 */
class CSIStorageCapacity extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var Quantity $capacity
     * Capacity is the value reported by the CSI driver in its GetCapacityResponse for a GetCapacityRequest with topology and parameters that match the previous fields.
     * 
     * The semantic is currently (CSI spec 1.2) defined as: The available capacity, in bytes, of the storage that can be used to provision volumes. If not set, that information is currently unavailable and treated like zero capacity.
     */
    public $capacity;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var Quantity $maximumVolumeSize
     * MaximumVolumeSize is the value reported by the CSI driver in its GetCapacityResponse for a GetCapacityRequest with topology and parameters that match the previous fields.
     * 
     * This is defined since CSI spec 1.4.0 as the largest size that may be used in a CreateVolumeRequest.capacity_range.required_bytes field to create a volume with the same parameters as those in GetCapacityRequest. The corresponding value in the Kubernetes API is ResourceRequirements.Requests in a volume claim.
     */
    public $maximumVolumeSize;

    /**
     * @var ObjectMeta $metadata
     * Standard object's metadata. The name has no particular meaning. It must be be a DNS subdomain (dots allowed, 253 characters). To ensure that there are no conflicts with other CSI drivers on the cluster, the recommendation is to use csisc-<uuid>, a generated name, or a reverse-domain name which ends with the unique CSI driver name.
     * 
     * Objects are namespaced.
     * 
     * More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var LabelSelector $nodeTopology
     * NodeTopology defines which nodes have access to the storage for which capacity was reported. If not set, the storage is not accessible from any node in the cluster. If empty, the storage is accessible from all nodes. This field is immutable.
     */
    public $nodeTopology;

    /**
     * @var string $storageClassName required
     * The name of the StorageClass that the reported capacity applies to. It must meet the same requirements as the name of a StorageClass object (non-empty, DNS subdomain). If that object no longer exists, the CSIStorageCapacity object is obsolete and should be removed by its creator. This field is immutable.
     */
    public $storageClassName;

    public function __construct($data)
    {
        $this->apiVersion = $data['apiVersion'] ?? null;
        if (isset($data['capacity'])) {
            $this->capacity = new Quantity($data['capacity']);
        }
        $this->kind = $data['kind'] ?? null;
        if (isset($data['maximumVolumeSize'])) {
            $this->maximumVolumeSize = new Quantity($data['maximumVolumeSize']);
        }
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        if (isset($data['nodeTopology'])) {
            $this->nodeTopology = new LabelSelector($data['nodeTopology']);
        }
        $this->storageClassName = $data['storageClassName'] ?? null;
    }
}
