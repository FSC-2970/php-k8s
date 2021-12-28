<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Preconditions;

/**
 * DeleteOptions may be provided when deleting an API object.
 */
class DeleteOptions extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var string $dryRun
     * When present, indicates that modifications should not be persisted. An invalid or unrecognized dryRun directive will result in an error response and no further processing of the request. Valid values are: - All: all dry run stages will be processed
     */
    public $dryRun;

    /**
     * @var integer $gracePeriodSeconds
     * The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
     */
    public $gracePeriodSeconds;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var boolean $orphanDependents
     * Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true\/false, the "orphan" finalizer will be added to\/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
     */
    public $orphanDependents;

    /**
     * @var Preconditions $preconditions
     * Must be fulfilled before a deletion is carried out. If not possible, a 409 Conflict status will be returned.
     */
    public $preconditions;

    /**
     * @var string $propagationPolicy
     * Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. Acceptable values are: 'Orphan' - orphan the dependents; 'Background' - allow the garbage collector to delete the dependents in the background; 'Foreground' - a cascading policy that deletes all dependents in the foreground.
     */
    public $propagationPolicy;

    public function __construct($data)
    {
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->dryRun = $data['dryRun'] ?? [];
        $this->gracePeriodSeconds = $data['gracePeriodSeconds'] ?? null;
        $this->kind = $data['kind'] ?? null;
        $this->orphanDependents = $data['orphanDependents'] ?? null;
        if (isset($data['preconditions'])) {
            $this->preconditions = new Preconditions($data['preconditions']);
        }
        $this->propagationPolicy = $data['propagationPolicy'] ?? null;
    }
}
