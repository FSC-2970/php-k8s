<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\apis\meta\v1\FieldsV1;
use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * ManagedFieldsEntry is a workflow-id, a FieldSet and the group version of the resource that the fieldset applies to.
 */
class ManagedFieldsEntry extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the version of this resource that this field set applies to. The format is "group\/version" just like the top-level APIVersion field. It is necessary to track the version of a field set because it cannot be automatically converted.
     */
    public $apiVersion;

    /**
     * @var string $fieldsType
     * FieldsType is the discriminator for the different fields format and version. There is currently only one possible value: "FieldsV1"
     */
    public $fieldsType;

    /**
     * @var FieldsV1 $fieldsV1
     * FieldsV1 holds the first JSON version format as described in the "FieldsV1" type.
     */
    public $fieldsV1;

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
     * @var string $subresource
     * Subresource is the name of the subresource used to update that object, or empty string if the object was updated through the main resource. The value of this field is used to distinguish between managers, even if they share the same name. For example, a status update will be distinct from a regular update using the same manager name. Note that the APIVersion field is not related to the Subresource field and it always corresponds to the version of the main resource.
     */
    public $subresource;

    /**
     * @var Time $time
     * Time is timestamp of when these fields were set. It should always be empty if Operation is 'Apply'
     */
    public $time;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->fieldsType = isset($data['fieldsType']) ? $data['fieldsType'] : null;
        if (isset($data['fieldsV1'])) {
            $this->fieldsV1 = new FieldsV1($data['fieldsV1']);
        }
        $this->manager = isset($data['manager']) ? $data['manager'] : null;
        $this->operation = isset($data['operation']) ? $data['operation'] : null;
        $this->subresource = isset($data['subresource']) ? $data['subresource'] : null;
        if (isset($data['time'])) {
            $this->time = new Time($data['time']);
        }
    }
}
