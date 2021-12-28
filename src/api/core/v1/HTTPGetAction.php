<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\HTTPHeader;
use k8s\apimachinery\pkg\util\intstr\IntOrString;

/**
 * HTTPGetAction describes an action based on HTTP Get requests.
 */
class HTTPGetAction extends \k8s\Resource
{
    /**
     * @var string $host
     * Host name to connect to, defaults to the pod IP. You probably want to set "Host" in httpHeaders instead.
     */
    public $host;

    /**
     * @var HTTPHeader[] $httpHeaders
     * Custom headers to set in the request. HTTP allows repeated headers.
     */
    public $httpHeaders;

    /**
     * @var string $path
     * Path to access on the HTTP server.
     */
    public $path;

    /**
     * @var IntOrString $port
     * Name or number of the port to access on the container. Number must be in the range 1 to 65535. Name must be an IANA_SVC_NAME.
     */
    public $port;

    /**
     * @var string $scheme
     * Scheme to use for connecting to the host. Defaults to HTTP.
     */
    public $scheme;

    public function __construct($data)
    {
        $this->host = $data['host'] ?? null;
        $this->httpHeaders = array_map(function ($a) {
            return new HTTPHeader($a);
        }, $data['httpHeaders'] ?? []);
        $this->path = $data['path'] ?? null;
        if (isset($data['port'])) {
            $this->port = new IntOrString($data['port']);
        }
        $this->scheme = $data['scheme'] ?? null;
    }
}
