<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

/**
 * ListMeta describes metadata that synthetic resources must have, including lists and various status objects. A resource may have only one of {ObjectMeta, ListMeta}.
 */
class ListMeta_v2 extends \k8s\Resource
{
    /**
     * @var string $continue
     * continue may be set if the user set a limit on the number of items returned, and indicates that the server has more data available. The value is opaque and may be used to issue another request to the endpoint that served this list to retrieve the next set of available objects. Continuing a consistent list may not be possible if the server configuration has changed or more than a few minutes have passed. The resourceVersion field returned when using this continue value will be identical to the value in the first response, unless you have received this token from an error message.
     */
    public $continue;

    /**
     * @var string $resourceVersion
     * String that identifies the server's internal version of this object that can be used by clients to determine when objects have changed. Value must be treated as opaque by clients and passed unmodified back to the server. Populated by the system. Read-only. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/api-conventions.md#concurrency-control-and-consistency
     */
    public $resourceVersion;

    /**
     * @var string $selfLink
     * selfLink is a URL representing this object. Populated by the system. Read-only.
     */
    public $selfLink;

    public function __construct($data)
    {
        $this->continue = isset($data['continue']) ? $data['continue'] : null;
        $this->resourceVersion = isset($data['resourceVersion']) ? $data['resourceVersion'] : null;
        $this->selfLink = isset($data['selfLink']) ? $data['selfLink'] : null;
    }
}
