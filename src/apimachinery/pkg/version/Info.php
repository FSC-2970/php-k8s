<?php

namespace k8s\apimachinery\pkg\version;

/**
 * Info contains versioning information. how we'll want to distribute that information.
 */
class Info extends \k8s\Resource
{
    /**
     * @var string $buildDate required
     */
    public $buildDate;

    /**
     * @var string $compiler required
     */
    public $compiler;

    /**
     * @var string $gitCommit required
     */
    public $gitCommit;

    /**
     * @var string $gitTreeState required
     */
    public $gitTreeState;

    /**
     * @var string $gitVersion required
     */
    public $gitVersion;

    /**
     * @var string $goVersion required
     */
    public $goVersion;

    /**
     * @var string $major required
     */
    public $major;

    /**
     * @var string $minor required
     */
    public $minor;

    /**
     * @var string $platform required
     */
    public $platform;

    public function __construct($data)
    {
        $this->buildDate = isset($data['buildDate']) ? $data['buildDate'] : null;
        $this->compiler = isset($data['compiler']) ? $data['compiler'] : null;
        $this->gitCommit = isset($data['gitCommit']) ? $data['gitCommit'] : null;
        $this->gitTreeState = isset($data['gitTreeState']) ? $data['gitTreeState'] : null;
        $this->gitVersion = isset($data['gitVersion']) ? $data['gitVersion'] : null;
        $this->goVersion = isset($data['goVersion']) ? $data['goVersion'] : null;
        $this->major = isset($data['major']) ? $data['major'] : null;
        $this->minor = isset($data['minor']) ? $data['minor'] : null;
        $this->platform = isset($data['platform']) ? $data['platform'] : null;
    }
}
