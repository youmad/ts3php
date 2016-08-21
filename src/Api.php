<?php

namespace Youmad\TeamSpeak3;

use Doctrine\Common\Collections\ArrayCollection;
use Youmad\TeamSpeak3\Command as Command;
use Youmad\TeamSpeak3\Model as Model;

class Api
{
    /**
     * @var Query
     */
    private $query;

    /**
     * @var string
     */
    private $currentServerId;

    /**
     * Api constructor.
     *
     * @param Query $query
     */
    public function __construct(Query $query)
    {
        $this->query = $query;
    }

    /**
     * @param string $username
     * @param string $password
     *
     * @return ArrayCollection|object
     */
    public function login(string $username, string $password)
    {
        $command = new Command\LoginCommand($username, $password);
        $response = $this->query->doCommand($command);

        return $response->getData();
    }

    /**
     * @return ArrayCollection|object
     */
    public function quit()
    {
        $command = new Command\QuitCommand();
        $response = $this->query->doCommand($command);

        return $response->getData();
    }

    /**
     * @return ArrayCollection
     */
    public function getServers() : ArrayCollection
    {
        $command = new Command\ServerListCommand();
        $response = $this->query->doCommand($command);
        $data = $response->getData();

        if (!$data instanceof ArrayCollection) {
            return new ArrayCollection([$data]);
        }

        return $data;
    }

    /**
     * @param string $id
     *
     * @return ArrayCollection|object
     */
    public function use(string $id)
    {
        $command = new Command\UseCommand($id);
        $response = $this->query->doCommand($command);

        if ($response->getError()->isSuccessful()) {
            $this->currentServerId = $id;
        }

        return $response->getData();
    }

    /**
     * @return Model\VirtualServerInfo
     * @throws \Exception
     */
    public function getServerInfo() : Model\VirtualServerInfo
    {
        if (!$this->currentServerId) {
            /**
             * @todo Custom exception.
             */
            throw new \Exception();
        }

        $command = new Command\ServerInfoCommand();
        $response = $this->query->doCommand($command);

        return $response->getData();
    }

    /**
     * @return ArrayCollection
     */
    public function getChannels() : ArrayCollection
    {
        if (!$this->currentServerId) {
            /**
             * @todo Custom exception.
             */
            throw new \Exception();
        }

        $command = new Command\ChannelListCommand();
        $response = $this->query->doCommand($command);
        $data = $response->getData();

        if (!$data instanceof ArrayCollection) {
            return new ArrayCollection([$data]);
        }

        return $data;
    }

    /**
     * @param string $id
     *
     * @return Model\ChannelInfo
     * @throws \Exception
     */
    public function getChannelInfo(string $id) : Model\ChannelInfo
    {
        if (!$this->currentServerId) {
            /**
             * @todo Custom exception.
             */
            throw new \Exception();
        }

        $command = new Command\ChannelInfoCommand($id);
        $response = $this->query->doCommand($command);

        return $response->getData();
    }

    /**
     * @return ArrayCollection
     */
    public function getClients() : ArrayCollection
    {
        if (!$this->currentServerId) {
            /**
             * @todo Custom exception.
             */
            throw new \Exception();
        }

        $command = new Command\ClientListCommand();
        $response = $this->query->doCommand($command);
        $data = $response->getData();

        if (!$data instanceof ArrayCollection) {
            return new ArrayCollection([$data]);
        }

        return $data;
    }

    /**
     * @param string $id
     *
     * @return Model\ClientInfo
     */
    public function getClientInfo(string $id) : Model\ClientInfo
    {
        if (!$this->currentServerId) {
            /**
             * @todo Custom exception.
             */
            throw new \Exception();
        }

        $command = new Command\ClientInfoCommand($id);
        $response = $this->query->doCommand($command);

        return $response->getData();
    }
}
