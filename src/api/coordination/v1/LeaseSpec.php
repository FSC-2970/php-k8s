<?php

namespace k8s\api\coordination\v1;

use k8s\apimachinery\pkg\apis\meta\v1\MicroTime;

/**
 * LeaseSpec is a specification of a Lease.
 */
class LeaseSpec extends \k8s\Resource
{
    /**
     * @var MicroTime $acquireTime
     * acquireTime is a time when the current lease was acquired.
     */
    public $acquireTime;

    /**
     * @var string $holderIdentity
     * holderIdentity contains the identity of the holder of a current lease.
     */
    public $holderIdentity;

    /**
     * @var integer $leaseDurationSeconds
     * leaseDurationSeconds is a duration that candidates for a lease need to wait to force acquire it. This is measure against time of last observed RenewTime.
     */
    public $leaseDurationSeconds;

    /**
     * @var integer $leaseTransitions
     * leaseTransitions is the number of transitions of a lease between holders.
     */
    public $leaseTransitions;

    /**
     * @var MicroTime $renewTime
     * renewTime is a time when the current holder of a lease has last updated the lease.
     */
    public $renewTime;

    public function __construct($data)
    {
        if (isset($data['acquireTime'])) {
            $this->acquireTime = new MicroTime($data['acquireTime']);
        }
        $this->holderIdentity = isset($data['holderIdentity']) ? $data['holderIdentity'] : null;
        $this->leaseDurationSeconds = isset($data['leaseDurationSeconds']) ? $data['leaseDurationSeconds'] : null;
        $this->leaseTransitions = isset($data['leaseTransitions']) ? $data['leaseTransitions'] : null;
        if (isset($data['renewTime'])) {
            $this->renewTime = new MicroTime($data['renewTime']);
        }
    }
}
