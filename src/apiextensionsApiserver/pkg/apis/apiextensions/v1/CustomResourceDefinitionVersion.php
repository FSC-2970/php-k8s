<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\CustomResourceColumnDefinition;
use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\CustomResourceValidation;
use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\CustomResourceSubresources;

/**
 * CustomResourceDefinitionVersion describes a version for CRD.
 */
class CustomResourceDefinitionVersion extends \k8s\Resource
{
    /**
     * @var CustomResourceColumnDefinition[] $additionalPrinterColumns
     * additionalPrinterColumns specifies additional columns returned in Table output. See https:\/\/kubernetes.io\/docs\/reference\/using-api\/api-concepts\/#receiving-resources-as-tables for details. If no columns are specified, a single column displaying the age of the custom resource is used.
     */
    public $additionalPrinterColumns;

    /**
     * @var boolean $deprecated
     * deprecated indicates this version of the custom resource API is deprecated. When set to true, API requests to this version receive a warning header in the server response. Defaults to false.
     */
    public $deprecated;

    /**
     * @var string $deprecationWarning
     * deprecationWarning overrides the default warning returned to API clients. May only be set when `deprecated` is true. The default warning indicates this version is deprecated and recommends use of the newest served version of equal or greater stability, if one exists.
     */
    public $deprecationWarning;

    /**
     * @var string $name required
     * name is the version name, e.g. “v1”, “v2beta1”, etc. The custom resources are served under this version at `\/apis\/<group>\/<version>\/...` if `served` is true.
     */
    public $name;

    /**
     * @var CustomResourceValidation $schema
     * schema describes the schema used for validation, pruning, and defaulting of this version of the custom resource.
     */
    public $schema;

    /**
     * @var boolean $served required
     * served is a flag enabling\/disabling this version from being served via REST APIs
     */
    public $served;

    /**
     * @var boolean $storage required
     * storage indicates this version should be used when persisting custom resources to storage. There must be exactly one version with storage=true.
     */
    public $storage;

    /**
     * @var CustomResourceSubresources $subresources
     * subresources specify what subresources this version of the defined custom resource have.
     */
    public $subresources;

    public function __construct($data)
    {
        $this->additionalPrinterColumns = array_map(function ($a) {
            return new CustomResourceColumnDefinition($a);
        }, isset($data['additionalPrinterColumns']) ? $data['additionalPrinterColumns'] : []);
        $this->deprecated = isset($data['deprecated']) ? $data['deprecated'] : null;
        $this->deprecationWarning = isset($data['deprecationWarning']) ? $data['deprecationWarning'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        if (isset($data['schema'])) {
            $this->schema = new CustomResourceValidation($data['schema']);
        }
        $this->served = isset($data['served']) ? $data['served'] : null;
        $this->storage = isset($data['storage']) ? $data['storage'] : null;
        if (isset($data['subresources'])) {
            $this->subresources = new CustomResourceSubresources($data['subresources']);
        }
    }
}
