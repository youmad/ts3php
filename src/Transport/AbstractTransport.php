<?php

namespace Youmad\TeamSpeak3\Transport;

use Youmad\TeamSpeak3\Config;

abstract class AbstractTransport
{
    /**
     * @var Config
     */
    protected $config;

    /**
     * @var resource
     */
    protected $stream = null;

    /**
     * AbstractTransport constructor.
     *
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @return void
     */
    abstract public function connect() : void;

    /**
     * @return void
     */
    abstract public function disconnect() : void;

    /**
     * @param string $data
     *
     * @return int
     */
    abstract public function write(string $data) : int;

    /**
     * @param int $length
     *
     * @return string
     * @throws \Exception
     */
    abstract public function read(int $length = 4096) : string;

    /**
     * @return Config
     */
    public function getConfig() : Config
    {
        return $this->config;
    }

    /**
     * @return resource|null
     */
    public function getStream() : ?resource
    {
        return $this->stream;
    }

    /**
     * @return bool
     */
    public function isConnected() : bool
    {
        return is_resource($this->stream);
    }

    /**
     * @todo Inspect this!!!
     *
     * @return void
     */
    protected function wait() : void
    {
        if ($this->isConnected() && !$this->config->getBlocking()) {
            do {
                $read = [$this->stream];
                $null = null;
            } while (stream_select($read, $null, $null, $this->config->getTimeout()) === 0);
        }
    }
}
