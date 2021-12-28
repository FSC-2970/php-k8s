<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

/**
 * ListMeta describes metadata that synthetic resources must have, including lists and various status objects. A resource may have only one of {ObjectMeta, ListMeta}.
 */
class ListMeta extends \k8s\Resource
{
    /**
     * @var string $continue
     * continue may be set if the user set a limit on the number of items returned, and indicates that the server has more data available. The value is opaque and may be used to issue another request to the endpoint that served this list to retrieve the next set of available objects. Continuing a consistent list may not be possible if the server configuration has changed or more than a few minutes have passed. The resourceVersion field returned when using this continue value will be identical to the value in the first response, unless you have received this token from an error message.
     */
    public $continue;

    /**
     * @var integer $remainingItemCount
     * remainingItemCount is the number of subsequent items in the list which are not included in this list response. If the list request contained label or field selectors, then the number of remaining items is unknown and the field will be left unset and omitted during serialization. If the list is complete (either because it is not chunking or because this is the last chunk), then there are no more remaining items and this field will be left unset and omitted during serialization. Servers older than v1.15 do not set this field. The intended use of the remainingItemCount is *estimating* the size of a collection. Clients should not rely on the remainingItemCount to be set or to be exact.
     */
    public $remainingItemCount;

    /**
     * @var string $resourceVersion
     * String that identifies the server's internal version of this object that can be used by clients to determine when objects have changed. Value must be treated as opaque by clients and passed unmodified back to the server. Populated by the system. Read-only. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#concurrency-control-and-consistency
     */
    public $resourceVersion;

    /**
     * @var string $selfLink
     * selfLink is a URL representing this object. Populated by the system. Read-only.
     * 
     * DEPRECATED Kubernetes will stop propagating this field in 1.20 release and the field is planned to be removed in 1.21 release.
     */
    public $selfLink;

    public function __construct($data)
    {
        $this->continue = isset($data['continue']) ? $data['continue'] : null;
        $this->remainingItemCount = isset($data['remainingItemCount']) ? $data['remainingItemCount'] : null;
        $this->resourceVersion = isset($data['resourceVersion']) ? $data['resourceVersion'] : null;
        $this->selfLink = isset($data['selfLink']) ? $data['selfLink'] : null;
    }
}
