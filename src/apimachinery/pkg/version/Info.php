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
        $this->buildDate = $data['buildDate'] ?? null;
        $this->compiler = $data['compiler'] ?? null;
        $this->gitCommit = $data['gitCommit'] ?? null;
        $this->gitTreeState = $data['gitTreeState'] ?? null;
        $this->gitVersion = $data['gitVersion'] ?? null;
        $this->goVersion = $data['goVersion'] ?? null;
        $this->major = $data['major'] ?? null;
        $this->minor = $data['minor'] ?? null;
        $this->platform = $data['platform'] ?? null;
    }
}
