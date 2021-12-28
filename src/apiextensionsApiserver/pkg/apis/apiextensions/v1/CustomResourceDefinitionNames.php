<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

/**
 * CustomResourceDefinitionNames indicates the names to serve this CustomResourceDefinition
 */
class CustomResourceDefinitionNames extends \k8s\Resource
{
    /**
     * @var string $categories
     * categories is a list of grouped resources this custom resource belongs to (e.g. 'all'). This is published in API discovery documents, and used by clients to support invocations like `kubectl get all`.
     */
    public $categories;

    /**
     * @var string $kind required
     * kind is the serialized kind of the resource. It is normally CamelCase and singular. Custom resource instances will use this value as the `kind` attribute in API calls.
     */
    public $kind;

    /**
     * @var string $listKind
     * listKind is the serialized kind of the list for this resource. Defaults to "`kind`List".
     */
    public $listKind;

    /**
     * @var string $plural required
     * plural is the plural name of the resource to serve. The custom resources are served under `\/apis\/<group>\/<version>\/...\/<plural>`. Must match the name of the CustomResourceDefinition (in the form `<names.plural>.<group>`). Must be all lowercase.
     */
    public $plural;

    /**
     * @var string $shortNames
     * shortNames are short names for the resource, exposed in API discovery documents, and used by clients to support invocations like `kubectl get <shortname>`. It must be all lowercase.
     */
    public $shortNames;

    /**
     * @var string $singular
     * singular is the singular name of the resource. It must be all lowercase. Defaults to lowercased `kind`.
     */
    public $singular;

    public function __construct($data)
    {
        $this->categories = $data['categories'] ?? [];
        $this->kind = $data['kind'] ?? null;
        $this->listKind = $data['listKind'] ?? null;
        $this->plural = $data['plural'] ?? null;
        $this->shortNames = $data['shortNames'] ?? [];
        $this->singular = $data['singular'] ?? null;
    }
}
