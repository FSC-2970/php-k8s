<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\WebhookConversion;

/**
 * CustomResourceConversion describes how to convert different versions of a CR.
 */
class CustomResourceConversion extends \k8s\Resource
{
    /**
     * @var string $strategy required
     * strategy specifies how custom resources are converted between versions. Allowed values are: - `None`: The converter only change the apiVersion and would not touch any other field in the custom resource. - `Webhook`: API Server will call to an external webhook to do the conversion. Additional information
     *   is needed for this option. This requires spec.preserveUnknownFields to be false, and spec.conversion.webhook to be set.
     */
    public $strategy;

    /**
     * @var WebhookConversion $webhook
     * webhook describes how to call the conversion webhook. Required when `strategy` is set to `Webhook`.
     */
    public $webhook;

    public function __construct($data)
    {
        $this->strategy = $data['strategy'] ?? null;
        if (isset($data['webhook'])) {
            $this->webhook = new WebhookConversion($data['webhook']);
        }
    }
}
