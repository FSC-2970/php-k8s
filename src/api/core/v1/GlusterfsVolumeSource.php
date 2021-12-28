<?php

namespace k8s\api\core\v1;

/**
 * Represents a Glusterfs mount that lasts the lifetime of a pod. Glusterfs volumes do not support ownership management or SELinux relabeling.
 */
class GlusterfsVolumeSource extends \k8s\Resource
{
    /**
     * @var string $endpoints required
     * EndpointsName is the endpoint name that details Glusterfs topology. More info: https:\/\/examples.k8s.io\/volumes\/glusterfs\/README.md#create-a-pod
     */
    public $endpoints;

    /**
     * @var string $path required
     * Path is the Glusterfs volume path. More info: https:\/\/examples.k8s.io\/volumes\/glusterfs\/README.md#create-a-pod
     */
    public $path;

    /**
     * @var boolean $readOnly
     * ReadOnly here will force the Glusterfs volume to be mounted with read-only permissions. Defaults to false. More info: https:\/\/examples.k8s.io\/volumes\/glusterfs\/README.md#create-a-pod
     */
    public $readOnly;

    public function __construct($data)
    {
        $this->endpoints = $data['endpoints'] ?? null;
        $this->path = $data['path'] ?? null;
        $this->readOnly = $data['readOnly'] ?? null;
    }
}
