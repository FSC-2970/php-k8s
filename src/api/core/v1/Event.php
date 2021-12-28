<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\MicroTime;
use k8s\apimachinery\pkg\apis\meta\v1\Time;
use k8s\api\core\v1\ObjectReference;
use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\core\v1\EventSeries;
use k8s\api\core\v1\EventSource;

/**
 * Event is a report of an event somewhere in the cluster.  Events have a limited retention time and triggers and messages may evolve with time.  Event consumers should not rely on the timing of an event with a given Reason reflecting a consistent underlying trigger, or the continued existence of events with that Reason.  Events should be treated as informative, best-effort, supplemental data.
 */
class Event extends \k8s\Resource
{
    /**
     * @var string $action
     * What action was taken\/failed regarding to the Regarding object.
     */
    public $action;

    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var integer $count
     * The number of times this event has occurred.
     */
    public $count;

    /**
     * @var MicroTime $eventTime
     * Time when this Event was first observed.
     */
    public $eventTime;

    /**
     * @var Time $firstTimestamp
     * The time at which the event was first recorded. (Time of server receipt is in TypeMeta.)
     */
    public $firstTimestamp;

    /**
     * @var ObjectReference $involvedObject
     * The object that this event is about.
     */
    public $involvedObject;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var Time $lastTimestamp
     * The time at which the most recent occurrence of this event was recorded.
     */
    public $lastTimestamp;

    /**
     * @var string $message
     * A human-readable description of the status of this operation.
     */
    public $message;

    /**
     * @var ObjectMeta $metadata
     * Standard object's metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var string $reason
     * This should be a short, machine understandable string that gives the reason for the transition into the object's current status.
     */
    public $reason;

    /**
     * @var ObjectReference $related
     * Optional secondary object for more complex actions.
     */
    public $related;

    /**
     * @var string $reportingComponent
     * Name of the controller that emitted this Event, e.g. `kubernetes.io\/kubelet`.
     */
    public $reportingComponent;

    /**
     * @var string $reportingInstance
     * ID of the controller instance, e.g. `kubelet-xyzf`.
     */
    public $reportingInstance;

    /**
     * @var EventSeries $series
     * Data about the Event series this event represents or nil if it's a singleton Event.
     */
    public $series;

    /**
     * @var EventSource $source
     * The component reporting this event. Should be a short machine understandable string.
     */
    public $source;

    /**
     * @var string $type
     * Type of this event (Normal, Warning), new types could be added in the future
     */
    public $type;

    public function __construct($data)
    {
        $this->action = isset($data['action']) ? $data['action'] : null;
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->count = isset($data['count']) ? $data['count'] : null;
        if (isset($data['eventTime'])) {
            $this->eventTime = new MicroTime($data['eventTime']);
        }
        if (isset($data['firstTimestamp'])) {
            $this->firstTimestamp = new Time($data['firstTimestamp']);
        }
        if (isset($data['involvedObject'])) {
            $this->involvedObject = new ObjectReference($data['involvedObject']);
        }
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        if (isset($data['lastTimestamp'])) {
            $this->lastTimestamp = new Time($data['lastTimestamp']);
        }
        $this->message = isset($data['message']) ? $data['message'] : null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        $this->reason = isset($data['reason']) ? $data['reason'] : null;
        if (isset($data['related'])) {
            $this->related = new ObjectReference($data['related']);
        }
        $this->reportingComponent = isset($data['reportingComponent']) ? $data['reportingComponent'] : null;
        $this->reportingInstance = isset($data['reportingInstance']) ? $data['reportingInstance'] : null;
        if (isset($data['series'])) {
            $this->series = new EventSeries($data['series']);
        }
        if (isset($data['source'])) {
            $this->source = new EventSource($data['source']);
        }
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
