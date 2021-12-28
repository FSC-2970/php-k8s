<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\LimitRangeItem;

/**
 * LimitRangeSpec defines a min\/max usage limit for resources that match on kind.
 */
class LimitRangeSpec extends \k8s\Resource
{
    /**
     * @var LimitRangeItem[] $limits
     * Limits is the list of LimitRangeItem objects that are enforced.
     */
    public $limits;

    public function __construct($data)
    {
        $this->limits = array_map(function ($a) {
            return new LimitRangeItem($a);
        }, isset($data['limits']) ? $data['limits'] : []);
    }
}
