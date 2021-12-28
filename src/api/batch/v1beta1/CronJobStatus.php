<?php

namespace k8s\api\batch\v1beta1;

use k8s\api\core\v1\ObjectReference;
use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * CronJobStatus represents the current state of a cron job.
 */
class CronJobStatus extends \k8s\Resource
{
    /**
     * @var ObjectReference[] $active
     * A list of pointers to currently running jobs.
     */
    public $active;

    /**
     * @var Time $lastScheduleTime
     * Information when was the last time the job was successfully scheduled.
     */
    public $lastScheduleTime;

    /**
     * @var Time $lastSuccessfulTime
     * Information when was the last time the job successfully completed.
     */
    public $lastSuccessfulTime;

    public function __construct($data)
    {
        $this->active = array_map(function ($a) {
            return new ObjectReference($a);
        }, $data['active'] ?? []);
        if (isset($data['lastScheduleTime'])) {
            $this->lastScheduleTime = new Time($data['lastScheduleTime']);
        }
        if (isset($data['lastSuccessfulTime'])) {
            $this->lastSuccessfulTime = new Time($data['lastSuccessfulTime']);
        }
    }
}
