<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\WebhookClientConfig;

/**
 * WebhookConversion describes how to call a conversion webhook
 */
class WebhookConversion extends \k8s\Resource
{
    /**
     * @var WebhookClientConfig $clientConfig
     * clientConfig is the instructions for how to call the webhook if strategy is `Webhook`.
     */
    public $clientConfig;

    /**
     * @var string $conversionReviewVersions required
     * conversionReviewVersions is an ordered list of preferred `ConversionReview` versions the Webhook expects. The API server will use the first version in the list which it supports. If none of the versions specified in this list are supported by API server, conversion will fail for the custom resource. If a persisted Webhook configuration specifies allowed versions and does not include any versions known to the API Server, calls to the webhook will fail.
     */
    public $conversionReviewVersions;

    public function __construct($data)
    {
        if (isset($data['clientConfig'])) {
            $this->clientConfig = new WebhookClientConfig($data['clientConfig']);
        }
        $this->conversionReviewVersions = $data['conversionReviewVersions'] ?? [];
    }
}
