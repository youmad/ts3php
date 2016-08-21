<?php

namespace Youmad\TeamSpeak3\Model;

/**
 * @method string getIdleTime()
 * @method string getUniqueIdentifier()
 * @method string getVersion()
 * @method string getPlatform()
 * @method string getInputMuted()
 * @method string getOutputMuted()
 * @method string getOutputOnlyMuted()
 * @method string getInputHardware()
 * @method string getOutputHardware()
 * @method string getDefaultChannel()
 * @method string getMetaData()
 * @method string getIsRecording()
 * @method string getVersionSign()
 * @method string getSecurityHash()
 * @method string getLoginName()
 * @method string getChannelGroupId()
 * @method string getServerGroups()
 * @method string getCreated()
 * @method string getLastConnected()
 * @method string getTotalConnections()
 * @method string getAway()
 * @method string getAwayMessage()
 * @method string getFlagAvatar()
 * @method string getTalkPower()
 * @method string getTalkRequest()
 * @method string getTalkRequestMsg()
 * @method string getDescription()
 * @method string getIsTalker()
 * @method string getMonthBytesUploaded()
 * @method string getMonthBytesDownloaded()
 * @method string getTotalBytesUploaded()
 * @method string getTotalBytesDownloaded()
 * @method string getIsPrioritySpeaker()
 * @method string getNicknamePhonetic()
 * @method string getNeededServerQueryViewPower()
 * @method string getDefaultToken()
 * @method string getIconId()
 * @method string getIsChannelCommander()
 * @method string getCountry()
 * @method string getChannelGroupInheritedChannelId()
 * @method string getBadges()
 * @method string getBase64HashClientUID()
 * @method string getConnectionFiletransferBandwidthSent()
 * @method string getConnectionFiletransferBandwidthReceived()
 * @method string getConnectionPacketsSentTotal()
 * @method string getConnectionBytesSentTotal()
 * @method string getConnectionPacketsReceivedTotal()
 * @method string getConnectionBytesReceivedTotal()
 * @method string getConnectionBandwidthSentLastSecondTotal()
 * @method string getConnectionBandwidthSentLastMinuteTotal()
 * @method string getConnectionBandwidthReceivedLastSecondTotal()
 * @method string getConnectionBandwidthReceivedLastMinuteTotal()
 * @method string getConnectionConnectedTime()
 * @method string getConnectionClientIp()
 */
class Client extends AbstractModel
{
    /**
     * @var string
     */
    private $clid;

    /**
     * @var string
     */
    private $cid;

    /**
     * @var string
     */
    private $database_id;

    /**
     * @var string
     */
    private $nickname;

    /**
     * @var string
     */
    private $type;

    /**
     * @var ClientInfo
     */
    private $clientInfo;

    /**
     * @var Channel
     */
    private $channel;

    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call(string $name, array $arguments = [])
    {
        return call_user_func_array([$this->clientInfo, $name], $arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString() : string
    {
        return $this->nickname;
    }

    /**
     * {@inheritdoc}
     */
    public function getId() : ?string
    {
        return $this->getClid();
    }

    /**
     * @return string
     */
    public function getChannelId() : ?string
    {
        return $this->getCid();
    }

    /**
     * @return string
     */
    public function getClid() : ?string
    {
        return $this->clid;
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
    public function getDatabaseId() : ?string
    {
        return $this->database_id;
    }

    /**
     * @return string
     */
    public function getNickname() : ?string
    {
        return $this->nickname;
    }

    /**
     * @return string
     */
    public function getType() : ?string
    {
        return $this->type;
    }

    /**
     * @return ClientInfo
     */
    public function getClientInfo() : ?ClientInfo
    {
        return $this->clientInfo;
    }

    /**
     * @param ClientInfo $clientInfo
     *
     * @return Client
     */
    public function setClientInfo(ClientInfo $clientInfo): Client
    {
        $this->clientInfo = $clientInfo;

        if ($clientInfo->getClient() !== $this) {
            $clientInfo->setClient($this);
        }

        return $this;
    }

    /**
     * @return Channel
     */
    public function getChannel() : ?Channel
    {
        return $this->channel;
    }

    /**
     * @param Channel $channel
     *
     * @return Client
     */
    public function setChannel(Channel $channel): Client
    {
        if ($this->channel === $channel) {
            return $this;
        }

        if ($this->channel) {
            $this->channel->removeClient($this);
        }

        $this->channel = $channel;

        if (null === $this->channel) {
            $this->cid = "0";
        } elseif (!$this->channel->hasClient($this)) {
            $this->channel->addClient($this);
        }

        return $this;
    }
}
