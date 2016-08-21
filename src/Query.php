<?php

namespace Youmad\TeamSpeak3;

use Youmad\TeamSpeak3\Command\AbstractCommand;
use Youmad\TeamSpeak3\Command\QuitCommand;
use Youmad\TeamSpeak3\Transport\TCPTransport;

class Query
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var TCPTransport
     */
    private $transport;

    /**
     * @var Api
     */
    private $api = null;

    /**
     * Query constructor.
     *
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @return Query
     */
    public function connect() : Query
    {
        /**
         * @todo Wrap by try {} catch
         */
        if (!$this->transport instanceof TCPTransport) {
            $this->transport = new TCPTransport($this->config);
        }

        if (!$this->transport->isConnected()) {
            $this->transport->connect();
        }

        return $this;
    }

    /**
     * @return void
     */
    public function disconnect() : void
    {
        $this->doCommand(new QuitCommand());

        $this->transport->disconnect();
    }

    /**
     * @return Api
     */
    public function getApi() : Api
    {
        if (null === $this->api) {
            $this->api = new Api($this);
        }

        return $this->api;
    }

    /**
     * @param AbstractCommand $command
     *
     * @return Response
     */
    public function doCommand(AbstractCommand $command) : Response
    {
        $data = [];
        $this->transport->writeLine((string) $command);
        do {
            $line = $this->transport->readLine();

            $data[] = $line;
        } while (strlen($line) > 0 && strtok($line, ' ') !== 'error');

        return new Response($data, $command->getModel());
    }
}
