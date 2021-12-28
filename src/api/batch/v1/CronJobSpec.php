<?php

namespace k8s\api\batch\v1;

use k8s\api\batch\v1\JobTemplateSpec;

/**
 * CronJobSpec describes how the job execution will look like and when it will actually run.
 */
class CronJobSpec extends \k8s\Resource
{
    /**
     * @var string $concurrencyPolicy
     * Specifies how to treat concurrent executions of a Job. Valid values are: - "Allow" (default): allows CronJobs to run concurrently; - "Forbid": forbids concurrent runs, skipping next run if previous run hasn't finished yet; - "Replace": cancels currently running job and replaces it with a new one
     */
    public $concurrencyPolicy;

    /**
     * @var integer $failedJobsHistoryLimit
     * The number of failed finished jobs to retain. Value must be non-negative integer. Defaults to 1.
     */
    public $failedJobsHistoryLimit;

    /**
     * @var JobTemplateSpec $jobTemplate
     * Specifies the job that will be created when executing a CronJob.
     */
    public $jobTemplate;

    /**
     * @var string $schedule required
     * The schedule in Cron format, see https:\/\/en.wikipedia.org\/wiki\/Cron.
     */
    public $schedule;

    /**
     * @var integer $startingDeadlineSeconds
     * Optional deadline in seconds for starting the job if it misses scheduled time for any reason.  Missed jobs executions will be counted as failed ones.
     */
    public $startingDeadlineSeconds;

    /**
     * @var integer $successfulJobsHistoryLimit
     * The number of successful finished jobs to retain. Value must be non-negative integer. Defaults to 3.
     */
    public $successfulJobsHistoryLimit;

    /**
     * @var boolean $suspend
     * This flag tells the controller to suspend subsequent executions, it does not apply to already started executions.  Defaults to false.
     */
    public $suspend;

    public function __construct($data)
    {
        $this->concurrencyPolicy = $data['concurrencyPolicy'] ?? null;
        $this->failedJobsHistoryLimit = $data['failedJobsHistoryLimit'] ?? null;
        if (isset($data['jobTemplate'])) {
            $this->jobTemplate = new JobTemplateSpec($data['jobTemplate']);
        }
        $this->schedule = $data['schedule'] ?? null;
        $this->startingDeadlineSeconds = $data['startingDeadlineSeconds'] ?? null;
        $this->successfulJobsHistoryLimit = $data['successfulJobsHistoryLimit'] ?? null;
        $this->suspend = $data['suspend'] ?? null;
    }
}
