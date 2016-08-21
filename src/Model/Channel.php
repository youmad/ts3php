<?php

namespace Youmad\TeamSpeak3\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @method string getTopic()
 * @method string getDescription()
 * @method string getPassword()
 * @method string getCodec()
 * @method string getCodecQuality()
 * @method string getMaxClients()
 * @method string getMaxFamilyClients()
 * @method string getFlagPermanent()
 * @method string getFlagSemiPermanent()
 * @method string getFlagDefault()
 * @method string getFlagPassword()
 * @method string getCodecLatencyFactor()
 * @method string getCodecIsUnencrypted()
 * @method string getSecuritySalt()
 * @method string getDeleteDelay()
 * @method string getFlagMaxClientsUnlimited()
 * @method string getFlagMaxFamilyClientsUnlimited()
 * @method string getFlagMaxFamilyClientsInherited()
 * @method string getFilepath()
 * @method string getNeededTalkPower()
 * @method string getForcedSilence()
 * @method string getNamePhonetic()
 * @method string getIconId()
 * @method string getFlagPrivate()
 * @method string getSecondsEmpty()
 */
class Channel extends AbstractModel
{
    /**
     * @var string
     */
    private $cid;

    /**
     * @var string
     */
    private $pid;

    /**
     * @var string
     */
    private $order;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $total_clients;

    /**
     * @var string
     */
    private $needed_subscribe_power;

    /**
     * @var ChannelInfo
     */
    private $channelInfo;

    /**
     * @var VirtualServer
     */
    private $virtualServer;

    /**
     * @var Channel
     */
    private $parent;

    /**
     * @var ArrayCollection|Channel[]
     */
    private $children;

    /**
     * @var ArrayCollection|Client[]
     */
    private $clients;

    /**
     * Channel constructor.
     */
    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->clients  = new ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function __toString() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call(string $name, array $arguments = [])
    {
        return call_user_func_array([$this->channelInfo, $name], $arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function getId() : ?string
    {
        return $this->getCid();
    }

    /**
     * @return string
     */
    public function getParentId() : ?string
    {
        return $this->getPid();
    }

    /**
     * @return string
     */
    public function getCid() : ?string
    {
        return $this->cid;
    }

    /**
     * @return string
     */
    public function getPid() : ?string
    {
        return $this->pid;
    }

    /**
     * @return string
     */
    public function getOrder() : ?string
    {
        return $this->order;
    }

    /**
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTotalClients() : ?string
    {
        return $this->total_clients;
    }

    /**
     * @return string
     */
    public function getNeededSubscribePower() : string
    {
        return $this->needed_subscribe_power;
    }

    /**
     * @return ChannelInfo
     */
    public function getChannelInfo() : ?ChannelInfo
    {
        return $this->channelInfo;
    }

    /**
     * @param ChannelInfo $channelInfo
     *
     * @return Channel
     */
    public function setChannelInfo(ChannelInfo $channelInfo) : Channel
    {
        $this->channelInfo = $channelInfo;

        if ($channelInfo->getChannel() !== $this) {
            $channelInfo->setChannel($this);
        }

        return $this;
    }

    /**
     * @return VirtualServer
     */
    public function getVirtualServer() : ?VirtualServer
    {
        return $this->virtualServer;
    }

    /**
     * @param VirtualServer $virtualServer
     *
     * @return Channel
     */
    public function setVirtualServer(VirtualServer $virtualServer) : Channel
    {
        if ($this->virtualServer === $virtualServer) {
            return $this;
        }

        if ($this->virtualServer) {
            $this->virtualServer->removeChannel($this);
        }

        $this->virtualServer = $virtualServer;

        if (null === $this->virtualServer) {
            $this->pid = "0";
        } elseif (!$this->virtualServer->hasChannel($this)) {
            $this->virtualServer->addChannel($this);
        }

        return $this;
    }

    /**
     * @return Channel
     */
    public function getParent() : ?Channel
    {
        return $this->parent;
    }

    /**
     * @param Channel $parent
     *
     * @return Channel
     */
    public function setParent(Channel $parent) : Channel
    {
        if ($this->parent === $parent) {
            return $this;
        }

        if ($this->parent) {
            $this->parent->removeChild($this);
        }

        $this->parent = $parent;

        if (null === $this->parent) {
            $this->pid = "0";
        } elseif (!$this->parent->hasChild($this)) {
            $this->parent->addChild($this);
        }

        return $this;
    }

    /**
     * @return ArrayCollection|Channel[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param ArrayCollection|Channel[] $children
     *
     * @return Channel
     */
    public function setChildren(ArrayCollection $children) : Channel
    {
        $this->children = $children;

        foreach ($children as $child) {
            $child->setParent($this);
        }

        return $this;
    }

    /**
     * @param Channel $channel
     *
     * @return Channel
     */
    public function addChild(Channel $channel) : Channel
    {
        $this->children->set($channel->getId(), $channel);

        if ($channel->getParent() !== $this) {
            $channel->setParent($this);
        }

        return $this;
    }

    /**
     * @param Channel $channel
     *
     * @return Channel
     */
    public function removeChild(Channel $channel) : Channel
    {
        if ($this->children->containsKey($channel->getId())) {
            $this->children->remove($channel->getId());

            $channel->setParent(null);
        }

        return $this;
    }

    /**
     * @param Channel $channel
     *
     * @return bool
     */
    public function hasChild(Channel $channel) : bool
    {
        return $this->children->containsKey($channel->getId());
    }

    /**
     * @return ArrayCollection|Client[]
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * @param ArrayCollection|Client[] $clients
     *
     * @return Channel
     */
    public function setClients(ArrayCollection $clients) : Channel
    {
        $this->clients = $clients;

        foreach ($clients as $client) {
            $client->setChannel($this);
        }

        return $this;
    }

    /**
     * @param Client $client
     *
     * @return Channel
     */
    public function addClient(Client $client) : Channel
    {
        $this->clients->set($client->getId(), $client);

        if ($client->getChannel() !== $this) {
            $client->setChannel($this);
        }

        return $this;
    }

    /**
     * @param Client $client
     *
     * @return Channel
     */
    public function removeClient(Client $client) : Channel
    {
        if ($this->clients->containsKey($client->getId())) {
            $this->clients->remove($client->getId());

            $client->setChannel(null);
        }

        return $this;
    }

    /**
     * @param Client $client
     *
     * @return bool
     */
    public function hasClient(Client $client) : bool
    {
        return $this->clients->containsKey($client->getId());
    }
}
