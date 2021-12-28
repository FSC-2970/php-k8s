<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

/**
 * GroupVersion contains the "group\/version" and "version" string of a version. It is made a struct to keep extensibility.
 */
class GroupVersionForDiscovery extends \k8s\Resource
{
    /**
     * @var string $groupVersion required
     * groupVersion specifies the API group and version in the form "group\/version"
     */
    public $groupVersion;

    /**
     * @var string $version required
     * version specifies the version in the form of "version". This is to save the clients the trouble of splitting the GroupVersion.
     */
    public $version;

    public function __construct($data)
    {
        $this->groupVersion = isset($data['groupVersion']) ? $data['groupVersion'] : null;
        $this->version = isset($data['version']) ? $data['version'] : null;
    }
}
