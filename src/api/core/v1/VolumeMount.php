<?php

namespace k8s\api\core\v1;

/**
 * VolumeMount describes a mounting of a Volume within a container.
 */
class VolumeMount extends \k8s\Resource
{
    /**
     * @var string $mountPath required
     * Path within the container at which the volume should be mounted.  Must not contain ':'.
     */
    public $mountPath;

    /**
     * @var string $mountPropagation
     * mountPropagation determines how mounts are propagated from the host to container and the other way around. When not set, MountPropagationNone is used. This field is beta in 1.10.
     */
    public $mountPropagation;

    /**
     * @var string $name required
     * This must match the Name of a Volume.
     */
    public $name;

    /**
     * @var boolean $readOnly
     * Mounted read-only if true, read-write otherwise (false or unspecified). Defaults to false.
     */
    public $readOnly;

    /**
     * @var string $subPath
     * Path within the volume from which the container's volume should be mounted. Defaults to "" (volume's root).
     */
    public $subPath;

    /**
     * @var string $subPathExpr
     * Expanded path within the volume from which the container's volume should be mounted. Behaves similarly to SubPath but environment variable references $(VAR_NAME) are expanded using the container's environment. Defaults to "" (volume's root). SubPathExpr and SubPath are mutually exclusive.
     */
    public $subPathExpr;

    public function __construct($data)
    {
        $this->mountPath = $data['mountPath'] ?? null;
        $this->mountPropagation = $data['mountPropagation'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->readOnly = $data['readOnly'] ?? null;
        $this->subPath = $data['subPath'] ?? null;
        $this->subPathExpr = $data['subPathExpr'] ?? null;
    }
}
