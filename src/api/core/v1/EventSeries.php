<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\MicroTime;

/**
 * EventSeries contain information on series of events, i.e. thing that was\/is happening continuously for some time.
 */
class EventSeries extends \k8s\Resource
{
    /**
     * @var integer $count
     * Number of occurrences in this series up to the last heartbeat time
     */
    public $count;

    /**
     * @var MicroTime $lastObservedTime
     * Time of the last occurrence observed
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
