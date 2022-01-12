<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

/**
 * Duration is a wrapper around time.Duration which supports correct marshaling to YAML and JSON. In particular, it marshals into strings, which can be used as map keys in json.
 */
class Duration extends \k8s\Resource
{
}
