<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Fields;
use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * ManagedFieldsEntry is a workflow-id, a FieldSet and the group version of the resource that the fieldset applies to.
 */
class ManagedFieldsEntry_v2 extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the version of this resource that this field set applies to. The format is "group\/version" just like the top-level APIVersion field. It is necessary to track the version of a field set because it cannot be automatically converted.
     */
    public $apiVersion;

    /**
     * @var Fields $fields
     * Fields identifies a set of fields.
     */
    public $fields;

    /**
     * @var string $manager
     * Manager is an identifier of the workflow managing these fields.
     */
    public $manager;

    /**
     * @var string $operation
     * Operation is the type of operation which lead to this ManagedFieldsEntry being created. The only valid values for this field are 'Apply' and 'Update'.
     */
    public $operation;

    /**
     * @var Time $time
     * Time is timestamp of when these fields were set. It should always be empty if Operation is 'Apply'
     */
    public $time;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        if (isset($data['fields'])) {
            $this->fields = new Fields($data['fields']);
        }
        $this->manager = isset($data['manager']) ? $data['manager'] : null;
        $this->operation = isset($data['operation']) ? $data['operation'] : null;
        if (isset($data['time'])) {
            $this->time = new Time($data['time']);
        }
    }
}
