<?php

namespace k8s\api\core\v1;

/**
 * Represents a Quobyte mount that lasts the lifetime of a pod. Quobyte volumes do not support ownership management or SELinux relabeling.
 */
class QuobyteVolumeSource extends \k8s\Resource
{
    /**
     * @var string $group
     * Group to map volume access to Default is no group
     */
    public $group;

    /**
     * @var boolean $readOnly
     * ReadOnly here will force the Quobyte volume to be mounted with read-only permissions. Defaults to false.
     */
    public $readOnly;

    /**
     * @var string $registry required
     * Registry represents a single or multiple Quobyte Registry services specified as a string as host:port pair (multiple entries are separated with commas) which acts as the central registry for volumes
     */
    public $registry;

    /**
     * @var string $tenant
     * Tenant owning the given Quobyte volume in the Backend Used with dynamically provisioned Quobyte volumes, value is set by the plugin
     */
    public $tenant;

    /**
     * @var string $user
     * User to map volume access to Defaults to serivceaccount user
     */
    public $user;

    /**
     * @var string $volume required
     * Volume is a string that references an already created Quobyte volume by name.
     */
    public $volume;

    public function __construct($data)
    {
        $this->group = isset($data['group']) ? $data['group'] : null;
        $this->readOnly = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->registry = isset($data['registry']) ? $data['registry'] : null;
        $this->tenant = isset($data['tenant']) ? $data['tenant'] : null;
        $this->user = isset($data['user']) ? $data['user'] : null;
        $this->volume = isset($data['volume']) ? $data['volume'] : null;
    }
}
