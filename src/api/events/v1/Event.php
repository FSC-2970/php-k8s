<?php

namespace k8s\api\events\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;
use k8s\api\core\v1\EventSource;
use k8s\apimachinery\pkg\apis\meta\v1\MicroTime;
use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\core\v1\ObjectReference;
use k8s\api\events\v1\EventSeries;

/**
 * Event is a report of an event somewhere in the cluster. It generally denotes some state change in the system. Events have a limited retention time and triggers and messages may evolve with time.  Event consumers should not rely on the timing of an event with a given Reason reflecting a consistent underlying trigger, or the continued existence of events with that Reason.  Events should be treated as informative, best-effort, supplemental data.
 */
class Event extends \k8s\Resource
{
    /**
     * @var string $action
     * action is what action was taken\/failed regarding to the regarding object. It is machine-readable. This field cannot be empty for new Events and it can have at most 128 characters.
     */
    public $action;

    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var integer $deprecatedCount
     * deprecatedCount is the deprecated field assuring backward compatibility with core.v1 Event type.
     */
    public $deprecatedCount;

    /**
     * @var Time $deprecatedFirstTimestamp
     * deprecatedFirstTimestamp is the deprecated field assuring backward compatibility with core.v1 Event type.
     */
    public $deprecatedFirstTimestamp;

    /**
     * @var Time $deprecatedLastTimestamp
     * deprecatedLastTimestamp is the deprecated field assuring backward compatibility with core.v1 Event type.
     */
    public $deprecatedLastTimestamp;

    /**
     * @var EventSource $deprecatedSource
     * deprecatedSource is the deprecated field assuring backward compatibility with core.v1 Event type.
     */
    public $deprecatedSource;

    /**
     * @var MicroTime $eventTime
     * eventTime is the time when this Event was first observed. It is required.
     */
    public $eventTime;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ObjectMeta $metadata
     * Standard object's metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var string $note
     * note is a human-readable description of the status of this operation. Maximal length of the note is 1kB, but libraries should be prepared to handle values up to 64kB.
     */
    public $note;

    /**
     * @var string $reason
     * reason is why the action was taken. It is human-readable. This field cannot be empty for new Events and it can have at most 128 characters.
     */
    public $reason;

    /**
     * @var ObjectReference $regarding
     * regarding contains the object this Event is about. In most cases it's an Object reporting controller implements, e.g. ReplicaSetController implements ReplicaSets and this event is emitted because it acts on some changes in a ReplicaSet object.
     */
    public $regarding;

    /**
     * @var ObjectReference $related
     * related is the optional secondary object for more complex actions. E.g. when regarding object triggers a creation or deletion of related object.
     */
    public $related;

    /**
     * @var string $reportingController
     * reportingController is the name of the controller that emitted this Event, e.g. `kubernetes.io\/kubelet`. This field cannot be empty for new Events.
     */
    public $reportingController;

    /**
     * @var string $reportingInstance
     * reportingInstance is the ID of the controller instance, e.g. `kubelet-xyzf`. This field cannot be empty for new Events and it can have at most 128 characters.
     */
    public $reportingInstance;

    /**
     * @var EventSeries $series
     * series is data about the Event series this event represents or nil if it's a singleton Event.
     */
    public $series;

    /**
     * @var string $type
     * type is the type of this event (Normal, Warning), new types could be added in the future. It is machine-readable. This field cannot be empty for new Events.
     */
    public $type;

    public function __construct($data)
    {
        $this->action = isset($data['action']) ? $data['action'] : null;
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->deprecatedCount = isset($data['deprecatedCount']) ? $data['deprecatedCount'] : null;
        if (isset($data['deprecatedFirstTimestamp'])) {
            $this->deprecatedFirstTimestamp = new Time($data['deprecatedFirstTimestamp']);
        }
        if (isset($data['deprecatedLastTimestamp'])) {
            $this->deprecatedLastTimestamp = new Time($data['deprecatedLastTimestamp']);
        }
        if (isset($data['deprecatedSource'])) {
            $this->deprecatedSource = new EventSource($data['deprecatedSource']);
        }
        if (isset($data['eventTime'])) {
            $this->eventTime = new MicroTime($data['eventTime']);
        }
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        $this->note = isset($data['note']) ? $data['note'] : null;
        $this->reason = isset($data['reason']) ? $data['reason'] : null;
        if (isset($data['regarding'])) {
            $this->regarding = new ObjectReference($data['regarding']);
        }
        if (isset($data['related'])) {
            $this->related = new ObjectReference($data['related']);
        }
        $this->reportingController = isset($data['reportingController']) ? $data['reportingController'] : null;
        $this->reportingInstance = isset($data['reportingInstance']) ? $data['reportingInstance'] : null;
        if (isset($data['series'])) {
            $this->series = new EventSeries($data['series']);
        }
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
