<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\TypedLocalObjectReference;
use k8s\api\core\v1\ResourceRequirements;
use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;

/**
 * PersistentVolumeClaimSpec describes the common attributes of storage devices and allows a Source for provider-specific attributes
 */
class PersistentVolumeClaimSpec extends \k8s\Resource
{
    /**
     * @var string $accessModes
     * AccessModes contains the desired access modes the volume should have. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes#access-modes-1
     */
    public $accessModes;

    /**
     * @var TypedLocalObjectReference $dataSource
     * This field can be used to specify either: * An existing VolumeSnapshot object (snapshot.storage.k8s.io\/VolumeSnapshot) * An existing PVC (PersistentVolumeClaim) If the provisioner or an external controller can support the specified data source, it will create a new volume based on the contents of the specified data source. If the AnyVolumeDataSource feature gate is enabled, this field will always have the same contents as the DataSourceRef field.
     */
    public $dataSource;

    /**
     * @var TypedLocalObjectReference $dataSourceRef
     * Specifies the object from which to populate the volume with data, if a non-empty volume is desired. This may be any local object from a non-empty API group (non core object) or a PersistentVolumeClaim object. When this field is specified, volume binding will only succeed if the type of the specified object matches some installed volume populator or dynamic provisioner. This field will replace the functionality of the DataSource field and as such if both fields are non-empty, they must have the same value. For backwards compatibility, both fields (DataSource and DataSourceRef) will be set to the same value automatically if one of them is empty and the other is non-empty. There are two important differences between DataSource and DataSourceRef: * While DataSource only allows two specific types of objects, DataSourceRef
     *   allows any non-core object, as well as PersistentVolumeClaim objects.
     * * While DataSource ignores disallowed values (dropping them), DataSourceRef
     *   preserves all values, and generates an error if a disallowed value is
     *   specified.
     * (Alpha) Using this field requires the AnyVolumeDataSource feature gate to be enabled.
     */
    public $dataSourceRef;

    /**
     * @var ResourceRequirements $resources
     * Resources represents the minimum resources the volume should have. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes#resources
     */
    public $resources;

    /**
     * @var LabelSelector $selector
     * A label query over volumes to consider for binding.
     */
    public $selector;

    /**
     * @var string $storageClassName
     * Name of the StorageClass required by the claim. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes#class-1
     */
    public $storageClassName;

    /**
     * @var string $volumeMode
     * volumeMode defines what type of volume is required by the claim. Value of Filesystem is implied when not included in claim spec.
     */
    public $volumeMode;

    /**
     * @var string $volumeName
     * VolumeName is the binding reference to the PersistentVolume backing this claim.
     */
    public $volumeName;

    public function __construct($data)
    {
        $this->accessModes = isset($data['accessModes']) ? $data['accessModes'] : [];
        if (isset($data['dataSource'])) {
            $this->dataSource = new TypedLocalObjectReference($data['dataSource']);
        }
        if (isset($data['dataSourceRef'])) {
            $this->dataSourceRef = new TypedLocalObjectReference($data['dataSourceRef']);
        }
        if (isset($data['resources'])) {
            $this->resources = new ResourceRequirements($data['resources']);
        }
        if (isset($data['selector'])) {
            $this->selector = new LabelSelector($data['selector']);
        }
        $this->storageClassName = isset($data['storageClassName']) ? $data['storageClassName'] : null;
        $this->volumeMode = isset($data['volumeMode']) ? $data['volumeMode'] : null;
        $this->volumeName = isset($data['volumeName']) ? $data['volumeName'] : null;
    }
}
