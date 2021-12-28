<?php

namespace k8s\api\core\v1;

/**
 * DaemonEndpoint contains information about a single Daemon endpoint.
 */
class DaemonEndpoint extends \k8s\Resource
{
    /**
     * @var integer $Port required
     * Port number of the given endpoint.
     */
    public $Port;

    public function __construct($data)
    {
        $this->Port = $data['Port'] ?? null;
    }
}
