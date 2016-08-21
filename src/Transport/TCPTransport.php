<?php

namespace Youmad\TeamSpeak3\Transport;

class TCPTransport extends AbstractTransport
{
    /**
     * {@inheritdoc}
     */
    public function connect() : void
    {
        if (!is_resource($this->stream)) {
            $address = sprintf('tcp://%s:%d', $this->config->getHost(), $this->config->getPort());

            $this->stream = stream_socket_client($address, $errno, $errstr, $this->config->getTimeout());

            if ($this->stream === false) {
                /**
                 * @todo Custom exception
                 */
                throw new \Exception($errstr, $errno);
            }

            stream_set_timeout($this->stream, $this->config->getTimeout());
            stream_set_blocking($this->stream, $this->config->getBlocking());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function disconnect() : void
    {
        $this->stream = null;
    }

    /**
     * {@inheritdoc}
     */
    public function write(string $data) : int
    {
        $this->connect();

        return stream_socket_sendto($this->stream, $data);
    }

    /**
     * @param string $data
     * @param string $separator
     *
     * @return int
     */
    public function writeLine(string $data, string $separator = "\n") : int 
    {
        $sent = 0;
        $size = strlen($data);
        $pack = 4096;

        for ($seek = 0; $seek < $size; ) {
            $rest = $size - $seek;
            $pack = $rest < $pack ? $rest : $pack;
            $buff = substr($data, $seek, $pack);
            $seek += $pack;

            if ($seek >= $size) {
                $buff .= $separator;
            }

            $sent += $this->write($buff);
        }

        return $sent;
    }

    /**
     * {@inheritdoc}
     */
    public function read(int $length = 4096) : string
    {
        $this->connect();
        $this->wait();

        $data = stream_get_contents($this->stream, $length);

        if (false === $data) {
            /**
             * @todo Custom exception
             */
            throw new \Exception(sprintf('Connection to server %s:%d lost', $this->config->getHost(), $this->config->getPort()));
        }

        return $data;
    }

    /**
     * @param string $token
     *
     * @return string
     * @throws \Exception
     */
    public function readLine(string $token = "\n") : string
    {
        $this->connect();

        $line = '';

        while (substr($line, -1) !== "\n") {
            $this->wait();
            $data = fgets($this->stream, 4096);

            if (false === $data) {
                if (strlen($line) > 0) {
                    $line .= $token;
                } else {
                    /**
                     * @todo Custom exception
                     */
                    throw new \Exception(sprintf('Connection to server %s:%d lost', $this->config->getHost(), $this->config->getPort()));
                }
            } else {
                $line .= $data;
            }
        }

        return trim($line);
    }
}
