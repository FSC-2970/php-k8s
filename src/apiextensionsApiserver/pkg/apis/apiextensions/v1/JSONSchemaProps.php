<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\JSONSchemaPropsOrBool;
use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\JSON;
use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\ExternalDocumentation;
use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\JSONSchemaPropsOrArray;

/**
 * JSONSchemaProps is a JSON-Schema following Specification Draft 4 (http:\/\/json-schema.org\/).
 */
class JSONSchemaProps extends \k8s\Resource
{
    /**
     * @var string $ref
     */
    public $ref;

    /**
     * @var string $schema
     */
    public $schema;

    /**
     * @var JSONSchemaPropsOrBool $additionalItems
     */
    public $additionalItems;

    /**
     * @var JSONSchemaPropsOrBool $additionalProperties
     */
    public $additionalProperties;

    /**
     * @var JSONSchemaProps[] $allOf
     */
    public $allOf;

    /**
     * @var JSONSchemaProps[] $anyOf
     */
    public $anyOf;

    /**
     * @var JSON $default
     * default is a default value for undefined object fields. Defaulting is a beta feature under the CustomResourceDefaulting feature gate. Defaulting requires spec.preserveUnknownFields to be false.
     */
    public $default;

    /**
     * @var object $definitions
     */
    public $definitions;

    /**
     * @var object $dependencies
     */
    public $dependencies;

    /**
     * @var string $description
     */
    public $description;

    /**
     * @var JSON[] $enum
     */
    public $enum;

    /**
     * @var JSON $example
     */
    public $example;

    /**
     * @var boolean $exclusiveMaximum
     */
    public $exclusiveMaximum;

    /**
     * @var boolean $exclusiveMinimum
     */
    public $exclusiveMinimum;

    /**
     * @var ExternalDocumentation $externalDocs
     */
    public $externalDocs;

    /**
     * @var string $format
     * format is an OpenAPI v3 format string. Unknown formats are ignored. The following formats are validated:
     * 
     * - bsonobjectid: a bson object ID, i.e. a 24 characters hex string - uri: an URI as parsed by Golang net\/url.ParseRequestURI - email: an email address as parsed by Golang net\/mail.ParseAddress - hostname: a valid representation for an Internet host name, as defined by RFC 1034, section 3.1 [RFC1034]. - ipv4: an IPv4 IP as parsed by Golang net.ParseIP - ipv6: an IPv6 IP as parsed by Golang net.ParseIP - cidr: a CIDR as parsed by Golang net.ParseCIDR - mac: a MAC address as parsed by Golang net.ParseMAC - uuid: an UUID that allows uppercase defined by the regex (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?[0-9a-f]{4}-?[0-9a-f]{4}-?[0-9a-f]{12}$ - uuid3: an UUID3 that allows uppercase defined by the regex (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?3[0-9a-f]{3}-?[0-9a-f]{4}-?[0-9a-f]{12}$ - uuid4: an UUID4 that allows uppercase defined by the regex (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?4[0-9a-f]{3}-?[89ab][0-9a-f]{3}-?[0-9a-f]{12}$ - uuid5: an UUID5 that allows uppercase defined by the regex (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?5[0-9a-f]{3}-?[89ab][0-9a-f]{3}-?[0-9a-f]{12}$ - isbn: an ISBN10 or ISBN13 number string like "0321751043" or "978-0321751041" - isbn10: an ISBN10 number string like "0321751043" - isbn13: an ISBN13 number string like "978-0321751041" - creditcard: a credit card number defined by the regex ^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$ with any non digit characters mixed in - ssn: a U.S. social security number following the regex ^\d{3}[- ]?\d{2}[- ]?\d{4}$ - hexcolor: an hexadecimal color code like "#FFFFFF: following the regex ^#?([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$ - rgbcolor: an RGB color code like rgb like "rgb(255,255,2559" - byte: base64 encoded binary data - password: any kind of string - date: a date string like "2006-01-02" as defined by full-date in RFC3339 - duration: a duration string like "22 ns" as parsed by Golang time.ParseDuration or compatible with Scala duration format - datetime: a date time string like "2014-12-15T19:30:20.000Z" as defined by date-time in RFC3339.
     */
    public $format;

    /**
     * @var string $id
     */
    public $id;

    /**
     * @var JSONSchemaPropsOrArray $items
     */
    public $items;

    /**
     * @var integer $maxItems
     */
    public $maxItems;

    /**
     * @var integer $maxLength
     */
    public $maxLength;

    /**
     * @var integer $maxProperties
     */
    public $maxProperties;

    /**
     * @var number $maximum
     */
    public $maximum;

    /**
     * @var integer $minItems
     */
    public $minItems;

    /**
     * @var integer $minLength
     */
    public $minLength;

    /**
     * @var integer $minProperties
     */
    public $minProperties;

    /**
     * @var number $minimum
     */
    public $minimum;

    /**
     * @var number $multipleOf
     */
    public $multipleOf;

    /**
     * @var JSONSchemaProps $not
     */
    public $not;

    /**
     * @var boolean $nullable
     */
    public $nullable;

    /**
     * @var JSONSchemaProps[] $oneOf
     */
    public $oneOf;

    /**
     * @var string $pattern
     */
    public $pattern;

    /**
     * @var object $patternProperties
     */
    public $patternProperties;

    /**
     * @var object $properties
     */
    public $properties;

    /**
     * @var string $required
     */
    public $required;

    /**
     * @var string $title
     */
    public $title;

    /**
     * @var string $type
     */
    public $type;

    /**
     * @var boolean $uniqueItems
     */
    public $uniqueItems;

    /**
     * @var boolean $xKubernetesEmbeddedResource
     * x-kubernetes-embedded-resource defines that the value is an embedded Kubernetes runtime.Object, with TypeMeta and ObjectMeta. The type must be object. It is allowed to further restrict the embedded object. kind, apiVersion and metadata are validated automatically. x-kubernetes-preserve-unknown-fields is allowed to be true, but does not have to be if the object is fully specified (up to kind, apiVersion, metadata).
     */
    public $xKubernetesEmbeddedResource;

    /**
     * @var boolean $xKubernetesIntOrString
     * x-kubernetes-int-or-string specifies that this value is either an integer or a string. If this is true, an empty type is allowed and type as child of anyOf is permitted if following one of the following patterns:
     * 
     * 1) anyOf:
     *    - type: integer
     *    - type: string
     * 2) allOf:
     *    - anyOf:
     *      - type: integer
     *      - type: string
     *    - ... zero or more
     */
    public $xKubernetesIntOrString;

    /**
     * @var string $xKubernetesListMapKeys
     * x-kubernetes-list-map-keys annotates an array with the x-kubernetes-list-type `map` by specifying the keys used as the index of the map.
     * 
     * This tag MUST only be used on lists that have the "x-kubernetes-list-type" extension set to "map". Also, the values specified for this attribute must be a scalar typed field of the child structure (no nesting is supported).
     * 
     * The properties specified must either be required or have a default value, to ensure those properties are present for all list items.
     */
    public $xKubernetesListMapKeys;

    /**
     * @var string $xKubernetesListType
     * x-kubernetes-list-type annotates an array to further describe its topology. This extension must only be used on lists and may have 3 possible values:
     * 
     * 1) `atomic`: the list is treated as a single entity, like a scalar.
     *      Atomic lists will be entirely replaced when updated. This extension
     *      may be used on any type of list (struct, scalar, ...).
     * 2) `set`:
     *      Sets are lists that must not have multiple items with the same value. Each
     *      value must be a scalar, an object with x-kubernetes-map-type `atomic` or an
     *      array with x-kubernetes-list-type `atomic`.
     * 3) `map`:
     *      These lists are like maps in that their elements have a non-index key
     *      used to identify them. Order is preserved upon merge. The map tag
     *      must only be used on a list with elements of type object.
     * Defaults to atomic for arrays.
     */
    public $xKubernetesListType;

    /**
     * @var string $xKubernetesMapType
     * x-kubernetes-map-type annotates an object to further describe its topology. This extension must only be used when type is object and may have 2 possible values:
     * 
     * 1) `granular`:
     *      These maps are actual maps (key-value pairs) and each fields are independent
     *      from each other (they can each be manipulated by separate actors). This is
     *      the default behaviour for all maps.
     * 2) `atomic`: the list is treated as a single entity, like a scalar.
     *      Atomic maps will be entirely replaced when updated.
     */
    public $xKubernetesMapType;

    /**
     * @var boolean $xKubernetesPreserveUnknownFields
     * x-kubernetes-preserve-unknown-fields stops the API server decoding step from pruning fields which are not specified in the validation schema. This affects fields recursively, but switches back to normal pruning behaviour if nested properties or additionalProperties are specified in the schema. This can either be true or undefined. False is forbidden.
     */
    public $xKubernetesPreserveUnknownFields;

    public function __construct($data)
    {
        $this->ref = $data['$ref'] ?? null;
        $this->schema = $data['$schema'] ?? null;
        if (isset($data['additionalItems'])) {
            $this->additionalItems = new JSONSchemaPropsOrBool($data['additionalItems']);
        }
        if (isset($data['additionalProperties'])) {
            $this->additionalProperties = new JSONSchemaPropsOrBool($data['additionalProperties']);
        }
        $this->allOf = array_map(function ($a) {
            return new JSONSchemaProps($a);
        }, $data['allOf'] ?? []);
        $this->anyOf = array_map(function ($a) {
            return new JSONSchemaProps($a);
        }, $data['anyOf'] ?? []);
        if (isset($data['default'])) {
            $this->default = new JSON($data['default']);
        }
        $this->definitions = $data['definitions'] ?? null;
        $this->dependencies = $data['dependencies'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->enum = array_map(function ($a) {
            return new JSON($a);
        }, $data['enum'] ?? []);
        if (isset($data['example'])) {
            $this->example = new JSON($data['example']);
        }
        $this->exclusiveMaximum = $data['exclusiveMaximum'] ?? null;
        $this->exclusiveMinimum = $data['exclusiveMinimum'] ?? null;
        if (isset($data['externalDocs'])) {
            $this->externalDocs = new ExternalDocumentation($data['externalDocs']);
        }
        $this->format = $data['format'] ?? null;
        $this->id = $data['id'] ?? null;
        if (isset($data['items'])) {
            $this->items = new JSONSchemaPropsOrArray($data['items']);
        }
        $this->maxItems = $data['maxItems'] ?? null;
        $this->maxLength = $data['maxLength'] ?? null;
        $this->maxProperties = $data['maxProperties'] ?? null;
        $this->maximum = $data['maximum'] ?? null;
        $this->minItems = $data['minItems'] ?? null;
        $this->minLength = $data['minLength'] ?? null;
        $this->minProperties = $data['minProperties'] ?? null;
        $this->minimum = $data['minimum'] ?? null;
        $this->multipleOf = $data['multipleOf'] ?? null;
        if (isset($data['not'])) {
            $this->not = new JSONSchemaProps($data['not']);
        }
        $this->nullable = $data['nullable'] ?? null;
        $this->oneOf = array_map(function ($a) {
            return new JSONSchemaProps($a);
        }, $data['oneOf'] ?? []);
        $this->pattern = $data['pattern'] ?? null;
        $this->patternProperties = $data['patternProperties'] ?? null;
        $this->properties = $data['properties'] ?? null;
        $this->required = $data['required'] ?? [];
        $this->title = $data['title'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->uniqueItems = $data['uniqueItems'] ?? null;
        $this->xKubernetesEmbeddedResource = $data['x-kubernetes-embedded-resource'] ?? null;
        $this->xKubernetesIntOrString = $data['x-kubernetes-int-or-string'] ?? null;
        $this->xKubernetesListMapKeys = $data['x-kubernetes-list-map-keys'] ?? [];
        $this->xKubernetesListType = $data['x-kubernetes-list-type'] ?? null;
        $this->xKubernetesMapType = $data['x-kubernetes-map-type'] ?? null;
        $this->xKubernetesPreserveUnknownFields = $data['x-kubernetes-preserve-unknown-fields'] ?? null;
    }
}
