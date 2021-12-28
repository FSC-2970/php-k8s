<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\DaemonEndpoint;

/**
 * NodeDaemonEndpoints lists ports opened by daemons running on the Node.
 */
class NodeDaemonEndpoints extends \k8s\Resource
{
    /**
     * @var DaemonEndpoint $kubeletEndpoint
     * Endpoint on which Kubelet is listening.
     */
    public $kubeletEndpoint;

    public function __construct($data)
    {
        if (isset($data['kubeletEndpoint'])) {
            $this->kubeletEndpoint = new DaemonEndpoint($data['kubeletEndpoint']);
        }
    }
}
