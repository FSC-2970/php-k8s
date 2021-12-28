<?php

namespace k8s\api\events\v1beta1;

use k8s\apimachinery\pkg\apis\meta\v1\MicroTime;

/**
 * EventSeries contain information on series of events, i.e. thing that was\/is happening continuously for some time.
 */
class EventSeries extends \k8s\Resource
{
    /**
     * @var integer $count required
     * count is the number of occurrences in this series up to the last heartbeat time.
     */
    public $count;

    /**
     * @var MicroTime $lastObservedTime
     * lastObservedTime is the time when last Event from the series was seen before last heartbeat.
     */
    public $lastObservedTime;

    public function __construct($data)
    {
        $this->count = $data['count'] ?? null;
        if (isset($data['lastObservedTime'])) {
            $this->lastObservedTime = new MicroTime($data['lastObservedTime']);
        }
    }
}
