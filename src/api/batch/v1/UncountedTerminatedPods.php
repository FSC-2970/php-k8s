<?php

namespace k8s\api\batch\v1;

/**
 * UncountedTerminatedPods holds UIDs of Pods that have terminated but haven't been accounted in Job status counters.
 */
class UncountedTerminatedPods extends \k8s\Resource
{
    /**
     * @var string $failed
     * Failed holds UIDs of failed Pods.
     */
    public $failed;

    /**
     * @var string $succeeded
     * Succeeded holds UIDs of succeeded Pods.
     */
    public $succeeded;

    public function __construct($data)
    {
        $this->failed = $data['failed'] ?? [];
        $this->succeeded = $data['succeeded'] ?? [];
    }
}
