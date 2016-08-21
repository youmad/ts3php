<?php

namespace Youmad\TeamSpeak3\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @method string getUniqueIdentifier()
 * @method string getWelcomeMessage()
 * @method string getPlatform()
 * @method string getVersion()
 * @method string getPassword()
 * @method string getChannelsOnline()
 * @method string getCreated()
 * @method string getCodecEncryptionMode()
 * @method string getHostMessage()
 * @method string getHostMessageMode()
 * @method string getFilebase()
 * @method string getDefaultServerGroup()
 * @method string getDefaultChannelGroup()
 * @method string getFlagPassword()
 * @method string getDefaultChannelAdminGroup()
 * @method string getMaxDownloadTotalBandwidth()
 * @method string getMaxUploadTotalBandwidth()
 * @method string getHostBannerUrl()
 * @method string getHostBannerGfxUrl()
 * @method string getHostBannerGfxInterval()
 * @method string getComplainAutobanCount()
 * @method string getComplainAutobanTime()
 * @method string getComplainRemoveTime()
 * @method string getMinClientsInChannelBeforeForcedSilence()
 * @method string getPrioritySpeakerDimmModificator()
 * @method string getAntifloodPointsTickReduce()
 * @method string getAntifloodPointsNeededCommandBlock()
 * @method string getAntifloodPointsNeededIpBlock()
 * @method string getClientConnections()
 * @method string getQueryClientConnections()
 * @method string getHostButtonTooltip()
 * @method string getHostButtonUrl()
 * @method string getHostButtonGfxUrl()
 * @method string getDownloadQuota()
 * @method string getUploadQuota()
 * @method string getMonthBytesDownloaded()
 * @method string getMonthBytesUploaded()
 * @method string getTotalBytesDownloaded()
 * @method string getTotalBytesUploaded()
 * @method string getNeededIdentitySecurityLevel()
 * @method string getLogClient()
 * @method string getLogQuery()
 * @method string getLogChannel()
 * @method string getLogPermissions()
 * @method string getLogServer()
 * @method string getLogFiletransfer()
 * @method string getMinClientVersion()
 * @method string getNamePhonetic()
 * @method string getIconId()
 * @method string getReservedSlots()
 * @method string getTotalPacketLossSpeech()
 * @method string getTotalPacketLossKeepalive()
 * @method string getTotalPacketLossControl()
 * @method string getTotalPacketLossTotal()
 * @method string getTotalPing()
 * @method string getIp()
 * @method string getWeblistEnabled()
 * @method string getAskForPrivilegekey()
 * @method string getHostBannerMode()
 * @method string getChannelTempDeleteDelayDefault()
 * @method string getMinAndroidVersion()
 * @method string getMinIosVersion()
 */
class VirtualServer extends AbstractModel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $port;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $clientsonline;

    /**
     * @var string
     */
    private $queryclientsonline;

    /**
     * @var string
     */
    private $maxclients;

    /**
     * @var string
     */
    private $uptime;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $autostart;

    /**
     * @var string
     */
    private $machine_id;

    /**
     * @var VirtualServerInfo
     */
    private $virtualServerInfo;

    /**
     * @var ArrayCollection|Channel[]
     */
    private $channels;

    /**
     * VirtualServer constructor.
     */
    public function __construct()
    {
        $this->channels = new ArrayCollection();
    }

    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call(string $name, array $arguments = [])
    {
        return call_user_func_array([$this->virtualServerInfo, $name], $arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString() : string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getId() : ?string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPort() : ?string
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getClientsonline() : ?string
    {
        return $this->clientsonline;
    }

    /**
     * @return string
     */
    public function getQueryclientsonline() : ?string
    {
        return $this->queryclientsonline;
    }

    /**
     * @return string
     */
    public function getMaxclients() : ?string
    {
        return $this->maxclients;
    }

    /**
     * @return string
     */
    public function getUptime() : ?string
    {
        return $this->uptime;
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
    public function getAutostart() : ?string
    {
        return $this->autostart;
    }

    /**
     * @return string
     */
    public function getMachineId() : ?string
    {
        return $this->machine_id;
    }

    /**
     * @return VirtualServerInfo
     */
    public function getVirtualServerInfo() : ?VirtualServerInfo
    {
        return $this->virtualServerInfo;
    }

    /**
     * @param VirtualServerInfo $virtualServerInfo
     *
     * @return VirtualServer
     */
    public function setVirtualServerInfo(VirtualServerInfo $virtualServerInfo) : VirtualServer
    {
        $this->virtualServerInfo = $virtualServerInfo;

        if ($virtualServerInfo->getVirtualServer() !== $this) {
            $virtualServerInfo->setVirtualServer($this);
        }

        return $this;
    }

    /**
     * @return ArrayCollection|Channel[]
     */
    public function getChannels() : ArrayCollection
    {
        return $this->channels;
    }

    /**
     * @param ArrayCollection|Channel[] $channels
     *
     * @return VirtualServer
     */
    public function setChannels(ArrayCollection $channels) : VirtualServer
    {
        $this->channels = $channels;

        foreach ($channels as $channel) {
            $channel->setVirtualServer($this);
        }

        return $this;
    }


    /**
     * @param Channel $channel
     *
     * @return VirtualServer
     */
    public function addChannel(Channel $channel) : VirtualServer
    {
        $this->channels->set($channel->getId(), $channel);

        if ($channel->getVirtualServer() !== $this) {
            $channel->setVirtualServer($this);
        }

        return $this;
    }

    /**
     * @param Channel $channel
     *
     * @return VirtualServer
     */
    public function removeChannel(Channel $channel) : VirtualServer
    {
        if ($this->channels->containsKey($channel->getId())) {
            $this->channels->remove($channel->getId());

            $channel->setVirtualServer(null);
        }

        return $this;
    }

    /**
     * @param Channel $channel
     *
     * @return bool
     */
    public function hasChannel(Channel $channel) : bool
    {
        return $this->channels->containsKey($channel->getId());
    }
}
