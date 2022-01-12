<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;
use k8s\apimachinery\pkg\apis\meta\v1\Initializers;
use k8s\apimachinery\pkg\apis\meta\v1\ManagedFieldsEntry_v2;
use k8s\apimachinery\pkg\apis\meta\v1\OwnerReference_v2;

/**
 * ObjectMeta is metadata that all persisted resources must have, which includes all objects users must create.
 */
class ObjectMeta_v2 extends \k8s\Resource
{
    /**
     * @var object $annotations
     * Annotations is an unstructured key value map stored with a resource that may be set by external tools to store and retrieve arbitrary metadata. They are not queryable and should be preserved when modifying objects. More info: http:\/\/kubernetes.io\/docs\/user-guide\/annotations
     */
    public $annotations;

    /**
     * @var string $clusterName
     * The name of the cluster which the object belongs to. This is used to distinguish resources with same name and namespace in different clusters. This field is not set anywhere right now and apiserver is going to ignore it if set in create or update request.
     */
    public $clusterName;

    /**
     * @var Time $creationTimestamp
     * CreationTimestamp is a timestamp representing the server time when this object was created. It is not guaranteed to be set in happens-before order across separate operations. Clients may not set this value. It is represented in RFC3339 form and is in UTC.
     * 
     * Populated by the system. Read-only. Null for lists. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/api-conventions.md#metadata
     */
    public $creationTimestamp;

    /**
     * @var integer $deletionGracePeriodSeconds
     * Number of seconds allowed for this object to gracefully terminate before it will be removed from the system. Only set when deletionTimestamp is also set. May only be shortened. Read-only.
     */
    public $deletionGracePeriodSeconds;

    /**
     * @var Time $deletionTimestamp
     * DeletionTimestamp is RFC 3339 date and time at which this resource will be deleted. This field is set by the server when a graceful deletion is requested by the user, and is not directly settable by a client. The resource is expected to be deleted (no longer visible from resource lists, and not reachable by name) after the time in this field, once the finalizers list is empty. As long as the finalizers list contains items, deletion is blocked. Once the deletionTimestamp is set, this value may not be unset or be set further into the future, although it may be shortened or the resource may be deleted prior to this time. For example, a user may request that a pod is deleted in 30 seconds. The Kubelet will react by sending a graceful termination signal to the containers in the pod. After that 30 seconds, the Kubelet will send a hard termination signal (SIGKILL) to the container and after cleanup, remove the pod from the API. In the presence of network partitions, this object may still exist after this timestamp, until an administrator or automated process can determine the resource is fully terminated. If not set, graceful deletion of the object has not been requested.
     * 
     * Populated by the system when a graceful deletion is requested. Read-only. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/api-conventions.md#metadata
     */
    public $deletionTimestamp;

    /**
     * @var string $finalizers
     * Must be empty before the object is deleted from the registry. Each entry is an identifier for the responsible component that will remove the entry from the list. If the deletionTimestamp of the object is non-nil, entries in this list can only be removed.
     */
    public $finalizers;

    /**
     * @var string $generateName
     * GenerateName is an optional prefix, used by the server, to generate a unique name ONLY IF the Name field has not been provided. If this field is used, the name returned to the client will be different than the name passed. This value will also be combined with a unique suffix. The provided value has the same validation rules as the Name field, and may be truncated by the length of the suffix required to make the value unique on the server.
     * 
     * If this field is specified and the generated name exists, the server will NOT return a 409 - instead, it will either return 201 Created or 500 with Reason ServerTimeout indicating a unique name could not be found in the time allotted, and the client should retry (optionally after the time indicated in the Retry-After header).
     * 
     * Applied only if Name is not specified. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/api-conventions.md#idempotency
     */
    public $generateName;

    /**
     * @var integer $generation
     * A sequence number representing a specific generation of the desired state. Populated by the system. Read-only.
     */
    public $generation;

    /**
     * @var Initializers $initializers
     * An initializer is a controller which enforces some system invariant at object creation time. This field is a list of initializers that have not yet acted on this object. If nil or empty, this object has been completely initialized. Otherwise, the object is considered uninitialized and is hidden (in list\/watch and get calls) from clients that haven't explicitly asked to observe uninitialized objects.
     * 
     * When an object is created, the system will populate this list with the current set of initializers. Only privileged users may set or modify this list. Once it is empty, it may not be modified further by any user.
     * 
     * DEPRECATED - initializers are an alpha field and will be removed in v1.15.
     */
    public $initializers;

    /**
     * @var object $labels
     * Map of string keys and values that can be used to organize and categorize (scope and select) objects. May match selectors of replication controllers and services. More info: http:\/\/kubernetes.io\/docs\/user-guide\/labels
     */
    public $labels;

    /**
     * @var ManagedFieldsEntry_v2[] $managedFields
     * ManagedFields maps workflow-id and version to the set of fields that are managed by that workflow. This is mostly for internal housekeeping, and users typically shouldn't need to set or understand this field. A workflow can be the user's name, a controller's name, or the name of a specific apply path like "ci-cd". The set of fields is always in the version that the workflow used when modifying the object.
     * 
     * This field is alpha and can be changed or removed without notice.
     */
    public $managedFields;

    /**
     * @var string $name
     * Name must be unique within a namespace. Is required when creating resources, although some resources may allow a client to request the generation of an appropriate name automatically. Name is primarily intended for creation idempotence and configuration definition. Cannot be updated. More info: http:\/\/kubernetes.io\/docs\/user-guide\/identifiers#names
     */
    public $name;

    /**
     * @var string $namespace
     * Namespace defines the space within each name must be unique. An empty namespace is equivalent to the "default" namespace, but "default" is the canonical representation. Not all objects are required to be scoped to a namespace - the value of this field for those objects will be empty.
     * 
     * Must be a DNS_LABEL. Cannot be updated. More info: http:\/\/kubernetes.io\/docs\/user-guide\/namespaces
     */
    public $namespace;

    /**
     * @var OwnerReference_v2[] $ownerReferences
     * List of objects depended by this object. If ALL objects in the list have been deleted, this object will be garbage collected. If this object is managed by a controller, then an entry in this list will point to this controller, with the controller field set to true. There cannot be more than one managing controller.
     */
    public $ownerReferences;

    /**
     * @var string $resourceVersion
     * An opaque value that represents the internal version of this object that can be used by clients to determine when objects have changed. May be used for optimistic concurrency, change detection, and the watch operation on a resource or set of resources. Clients must treat these values as opaque and passed unmodified back to the server. They may only be valid for a particular resource or set of resources.
     * 
     * Populated by the system. Read-only. Value must be treated as opaque by clients and . More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/api-conventions.md#concurrency-control-and-consistency
     */
    public $resourceVersion;

    /**
     * @var string $selfLink
     * SelfLink is a URL representing this object. Populated by the system. Read-only.
     */
    public $selfLink;

    /**
     * @var string $uid
     * UID is the unique in time and space value for this object. It is typically generated by the server on successful creation of a resource and is not allowed to change on PUT operations.
     * 
     * Populated by the system. Read-only. More info: http:\/\/kubernetes.io\/docs\/user-guide\/identifiers#uids
     */
    public $uid;

    public function __construct($data)
    {
        $this->annotations = isset($data['annotations']) ? $data['annotations'] : null;
        $this->clusterName = isset($data['clusterName']) ? $data['clusterName'] : null;
        if (isset($data['creationTimestamp'])) {
            $this->creationTimestamp = new Time($data['creationTimestamp']);
        }
        $this->deletionGracePeriodSeconds = isset($data['deletionGracePeriodSeconds']) ? $data['deletionGracePeriodSeconds'] : null;
        if (isset($data['deletionTimestamp'])) {
            $this->deletionTimestamp = new Time($data['deletionTimestamp']);
        }
        $this->finalizers = isset($data['finalizers']) ? $data['finalizers'] : [];
        $this->generateName = isset($data['generateName']) ? $data['generateName'] : null;
        $this->generation = isset($data['generation']) ? $data['generation'] : null;
        if (isset($data['initializers'])) {
            $this->initializers = new Initializers($data['initializers']);
        }
        $this->labels = isset($data['labels']) ? $data['labels'] : null;
        $this->managedFields = array_map(function ($a) {
            return new ManagedFieldsEntry_v2($a);
        }, isset($data['managedFields']) ? $data['managedFields'] : []);
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->namespace = isset($data['namespace']) ? $data['namespace'] : null;
        $this->ownerReferences = array_map(function ($a) {
            return new OwnerReference_v2($a);
        }, isset($data['ownerReferences']) ? $data['ownerReferences'] : []);
        $this->resourceVersion = isset($data['resourceVersion']) ? $data['resourceVersion'] : null;
        $this->selfLink = isset($data['selfLink']) ? $data['selfLink'] : null;
        $this->uid = isset($data['uid']) ? $data['uid'] : null;
    }
}
