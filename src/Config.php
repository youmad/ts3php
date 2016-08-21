<?php

namespace Youmad\TeamSpeak3;

class Config
{
    /**
     * @var string
     */
    private $host;

    /**
     * @var int
     */
    private $port;

    /**
     * @var int
     */
    private $timeout;

    /**
     * @var bool
     */
    private $blocking;

    /**
     * Config constructor.
     *
     * @param string $host
     * @param int    $port
     * @param int    $timeout
     * @param bool   $blocking
     */
    public function __construct(
        string $host = 'localhost',
        int $port = 10011,
        int $timeout = 1000,
        bool $blocking = true
    )
    {
        $this->host = $host;
        $this->port = $port;
        $this->timeout = $timeout;
        $this->blocking = $blocking;
    }

    /**
     * @return string
     */
    public function getHost() : string
    {
        return $this->host;
    }

    /**
     * @param string $host
     *
     * @return Config
     */
    public function setHost(string $host) : Config
    {
        $this->host = $host;

        return $this;
    }

    /**
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }

    /**
     * @param int $port
     *
     * @return Config
     */
    public function setPort(int $port) : Config
    {
        $this->port = $port;

        return $this;
    }

    /**
     * @return int
     */
    public function getTimeout() : int
    {
        return $this->timeout;
    }

    /**
     * @param int $timeout
     *
     * @return Config
     */
    public function setTimeout(int $timeout) : Config
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getBlocking() : bool
    {
        return $this->blocking;
    }

    /**
     * @param bool $blocking
     *
     * @return Config
     */
    public function setBlocking(bool $blocking) : Config
    {
        $this->blocking = $blocking;

        return $this;
    }
}
