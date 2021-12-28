<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\api\resource\Quantity;

/**
 * Represents an empty directory for a pod. Empty directory volumes support ownership management and SELinux relabeling.
 */
class EmptyDirVolumeSource extends \k8s\Resource
{
    /**
     * @var string $medium
     * What type of storage medium should back this directory. The default is "" which means to use the node's default medium. Must be an empty string (default) or Memory. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#emptydir
     */
    public $medium;

    /**
     * @var Quantity $sizeLimit
     * Total amount of local storage required for this EmptyDir volume. The size limit is also applicable for memory medium. The maximum usage on memory medium EmptyDir would be the minimum value between the SizeLimit specified here and the sum of memory limits of all containers in a pod. The default is nil which means that the limit is undefined. More info: http:\/\/kubernetes.io\/docs\/user-guide\/volumes#emptydir
     */
    public $sizeLimit;

    public function __construct($data)
    {
        $this->medium = isset($data['medium']) ? $data['medium'] : null;
        if (isset($data['sizeLimit'])) {
            $this->sizeLimit = new Quantity($data['sizeLimit']);
        }
    }
}
