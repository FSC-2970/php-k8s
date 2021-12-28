<?php

namespace k8s\api\core\v1;

/**
 * ObjectReference contains enough information to let you inspect or modify the referred object.
 */
class ObjectReference extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * API version of the referent.
     */
    public $apiVersion;

    /**
     * @var string $fieldPath
     * If referring to a piece of an object instead of an entire object, this string should contain a valid JSON\/Go field access statement, such as desiredState.manifest.containers[2]. For example, if the object reference is to a container within a pod, this would take on a value like: "spec.containers{name}" (where "name" refers to the name of the container that triggered the event) or if no container name is specified "spec.containers[2]" (container with index 2 in this pod). This syntax is chosen only to have some well-defined way of referencing a part of an object.
     */
    public $fieldPath;

    /**
     * @var string $kind
     * Kind of the referent. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var string $name
     * Name of the referent. More info: https:\/\/kubernetes.io\/docs\/concepts\/overview\/working-with-objects\/names\/#names
     */
    public $name;

    /**
     * @var string $namespace
     * Namespace of the referent. More info: https:\/\/kubernetes.io\/docs\/concepts\/overview\/working-with-objects\/namespaces\/
     */
    public $namespace;

    /**
     * @var string $resourceVersion
     * Specific resourceVersion to which this reference is made, if any. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#concurrency-control-and-consistency
     */
    public $resourceVersion;

    /**
     * @var string $uid
     * UID of the referent. More info: https:\/\/kubernetes.io\/docs\/concepts\/overview\/working-with-objects\/names\/#uids
     */
    public $uid;

    public function __construct($data)
    {
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->fieldPath = $data['fieldPath'] ?? null;
        $this->kind = $data['kind'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->namespace = $data['namespace'] ?? null;
        $this->resourceVersion = $data['resourceVersion'] ?? null;
        $this->uid = $data['uid'] ?? null;
    }
}
