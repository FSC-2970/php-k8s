<?php

namespace k8s\api\policy\v1beta1;

/**
 * IDRange provides a min\/max of an allowed range of IDs.
 */
class IDRange extends \k8s\Resource
{
    /**
     * @var integer $max required
     * max is the end of the range, inclusive.
     */
    public $max;

    /**
     * @var integer $min required
     * min is the start of the range, inclusive.
     */
    public $min;

    public function __construct($data)
    {
        $this->max = $data['max'] ?? null;
        $this->min = $data['min'] ?? null;
    }
}
