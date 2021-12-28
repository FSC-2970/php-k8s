<?php

namespace k8s\api\core\v1;

/**
 * Represents an NFS mount that lasts the lifetime of a pod. NFS volumes do not support ownership management or SELinux relabeling.
 */
class NFSVolumeSource extends \k8s\Resource
{
    /**
     * @var string $path required
     * Path that is exported by the NFS server. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#nfs
     */
    public $path;

    /**
     * @var boolean $readOnly
     * ReadOnly here will force the NFS export to be mounted with read-only permissions. Defaults to false. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#nfs
     */
    public $readOnly;

    /**
     * @var string $server required
     * Server is the hostname or IP address of the NFS server. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#nfs
     */
    public $server;

    public function __construct($data)
    {
        $this->path = $data['path'] ?? null;
        $this->readOnly = $data['readOnly'] ?? null;
        $this->server = $data['server'] ?? null;
    }
}
