<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\CustomResourceDefinitionNames;
use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\CustomResourceDefinitionCondition;

/**
 * CustomResourceDefinitionStatus indicates the state of the CustomResourceDefinition
 */
class CustomResourceDefinitionStatus extends \k8s\Resource
{
    /**
     * @var CustomResourceDefinitionNames $acceptedNames
     * acceptedNames are the names that are actually being used to serve discovery. They may be different than the names in spec.
     */
    public $acceptedNames;

    /**
     * @var CustomResourceDefinitionCondition[] $conditions
     * conditions indicate state for particular aspects of a CustomResourceDefinition
     */
    public $conditions;

    /**
     * @var string $storedVersions
     * storedVersions lists all versions of CustomResources that were ever persisted. Tracking these versions allows a migration path for stored versions in etcd. The field is mutable so a migration controller can finish a migration to another version (ensuring no old objects are left in storage), and then remove the rest of the versions from this list. Versions may not be removed from `spec.versions` while they exist in this list.
     */
    public $storedVersions;

    public function __construct($data)
    {
        if (isset($data['acceptedNames'])) {
            $this->acceptedNames = new CustomResourceDefinitionNames($data['acceptedNames']);
        }
        $this->conditions = array_map(function ($a) {
            return new CustomResourceDefinitionCondition($a);
        }, $data['conditions'] ?? []);
        $this->storedVersions = $data['storedVersions'] ?? [];
    }
}
