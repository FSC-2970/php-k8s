<?php

namespace k8s\api\core\v1;

/**
 * ClientIPConfig represents the configurations of Client IP based session affinity.
 */
class ClientIPConfig extends \k8s\Resource
{
    /**
     * @var integer $timeoutSeconds
     * timeoutSeconds specifies the seconds of ClientIP type session sticky time. The value must be >0 && <=86400(for 1 day) if ServiceAffinity == "ClientIP". Default value is 10800(for 3 hours).
     */
    public $timeoutSeconds;

    public function __construct($data)
    {
        $this->timeoutSeconds = $data['timeoutSeconds'] ?? null;
    }
}
