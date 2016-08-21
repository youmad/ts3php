<?php

namespace Youmad\TeamSpeak3\Model;

class VirtualServerInfo extends AbstractModel
{
    /**
     * @var string
     */
    private $unique_identifier;

    /**
     * @var string
     */
    private $welcomemessage;

    /**
     * @var string
     */
    private $platform;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $channelsonline;

    /**
     * @var string
     */
    private $created;

    /**
     * @var string
     */
    private $codec_encryption_mode;

    /**
     * @var string
     */
    private $hostmessage;

    /**
     * @var string
     */
    private $hostmessage_mode;

    /**
     * @var string
     */
    private $filebase;

    /**
     * @var string
     */
    private $default_server_group;

    /**
     * @var string
     */
    private $default_channel_group;

    /**
     * @var string
     */
    private $flag_password;

    /**
     * @var string
     */
    private $default_channel_admin_group;

    /**
     * @var string
     */
    private $max_download_total_bandwidth;

    /**
     * @var string
     */
    private $max_upload_total_bandwidth;

    /**
     * @var string
     */
    private $hostbanner_url;

    /**
     * @var string
     */
    private $hostbanner_gfx_url;

    /**
     * @var string
     */
    private $hostbanner_gfx_interval;

    /**
     * @var string
     */
    private $complain_autoban_count;

    /**
     * @var string
     */
    private $complain_autoban_time;

    /**
     * @var string
     */
    private $complain_remove_time;

    /**
     * @var string
     */
    private $min_clients_in_channel_before_forced_silence;

    /**
     * @var string
     */
    private $priority_speaker_dimm_modificator;

    /**
     * @var string
     */
    private $antiflood_points_tick_reduce;

    /**
     * @var string
     */
    private $antiflood_points_needed_command_block;

    /**
     * @var string
     */
    private $antiflood_points_needed_ip_block;

    /**
     * @var string
     */
    private $client_connections;

    /**
     * @var string
     */
    private $query_client_connections;

    /**
     * @var string
     */
    private $hostbutton_tooltip;

    /**
     * @var string
     */
    private $hostbutton_url;

    /**
     * @var string
     */
    private $hostbutton_gfx_url;

    /**
     * @var string
     */
    private $download_quota;

    /**
     * @var string
     */
    private $upload_quota;

    /**
     * @var string
     */
    private $month_bytes_downloaded;

    /**
     * @var string
     */
    private $month_bytes_uploaded;

    /**
     * @var string
     */
    private $total_bytes_downloaded;

    /**
     * @var string
     */
    private $total_bytes_uploaded;

    /**
     * @var string
     */
    private $needed_identity_security_level;

    /**
     * @var string
     */
    private $log_client;

    /**
     * @var string
     */
    private $log_query;

    /**
     * @var string
     */
    private $log_channel;

    /**
     * @var string
     */
    private $log_permissions;

    /**
     * @var string
     */
    private $log_server;

    /**
     * @var string
     */
    private $log_filetransfer;

    /**
     * @var string
     */
    private $min_client_version;

    /**
     * @var string
     */
    private $name_phonetic;

    /**
     * @var string
     */
    private $icon_id;

    /**
     * @var string
     */
    private $reserved_slots;

    /**
     * @var string
     */
    private $total_packetloss_speech;

    /**
     * @var string
     */
    private $total_packetloss_keepalive;

    /**
     * @var string
     */
    private $total_packetloss_control;

    /**
     * @var string
     */
    private $total_packetloss_total;

    /**
     * @var string
     */
    private $total_ping;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $weblist_enabled;

    /**
     * @var string
     */
    private $ask_for_privilegekey;

    /**
     * @var string
     */
    private $hostbanner_mode;

    /**
     * @var string
     */
    private $channel_temp_delete_delay_default;

    /**
     * @var string
     */
    private $min_android_version;

    /**
     * @var string
     */
    private $min_ios_version;

    /**
     * @var VirtualServer
     */
    private $virtualServer;

    /**
     * {@inheritdoc}
     */
    public function __toString() : string
    {
        return (string) $this->virtualServer;
    }

    /**
     * {@inheritdoc}
     */
    public function getPrefix() : string
    {
        return 'virtualserver_';
    }

    /**
     * {@inheritdoc}
     */
    public function getId() : ?string
    {
        return $this->virtualServer->getId();
    }

    /**
     * @return string
     */
    public function getUniqueIdentifier() : ?string
    {
        return $this->unique_identifier;
    }

    /**
     * @return string
     */
    public function getWelcomeMessage() : ?string
    {
        return $this->welcomemessage;
    }

    /**
     * @return string
     */
    public function getPlatform() : ?string
    {
        return $this->platform;
    }

    /**
     * @return string
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getChannelsOnline() : ?string
    {
        return $this->channelsonline;
    }

    /**
     * @return string
     */
    public function getCreated() : ?string
    {
        return $this->created;
    }

    /**
     * @return string
     */
    public function getCodecEncryptionMode() : ?string
    {
        return $this->codec_encryption_mode;
    }

    /**
     * @return string
     */
    public function getHostMessage() : ?string
    {
        return $this->hostmessage;
    }

    /**
     * @return string
     */
    public function getHostMessageMode() : ?string
    {
        return $this->hostmessage_mode;
    }

    /**
     * @return string
     */
    public function getFilebase() : ?string
    {
        return $this->filebase;
    }

    /**
     * @return string
     */
    public function getDefaultServerGroup() : ?string
    {
        return $this->default_server_group;
    }

    /**
     * @return string
     */
    public function getDefaultChannelGroup() : ?string
    {
        return $this->default_channel_group;
    }

    /**
     * @return string
     */
    public function getFlagPassword() : ?string
    {
        return $this->flag_password;
    }

    /**
     * @return string
     */
    public function getDefaultChannelAdminGroup() : ?string
    {
        return $this->default_channel_admin_group;
    }

    /**
     * @return string
     */
    public function getMaxDownloadTotalBandwidth() : ?string
    {
        return $this->max_download_total_bandwidth;
    }

    /**
     * @return string
     */
    public function getMaxUploadTotalBandwidth() : ?string
    {
        return $this->max_upload_total_bandwidth;
    }

    /**
     * @return string
     */
    public function getHostBannerUrl() : ?string
    {
        return $this->hostbanner_url;
    }

    /**
     * @return string
     */
    public function getHostBannerGfxUrl() : ?string
    {
        return $this->hostbanner_gfx_url;
    }

    /**
     * @return string
     */
    public function getHostBannerGfxInterval() : ?string
    {
        return $this->hostbanner_gfx_interval;
    }

    /**
     * @return string
     */
    public function getComplainAutobanCount() : ?string
    {
        return $this->complain_autoban_count;
    }

    /**
     * @return string
     */
    public function getComplainAutobanTime() : ?string
    {
        return $this->complain_autoban_time;
    }

    /**
     * @return string
     */
    public function getComplainRemoveTime() : ?string
    {
        return $this->complain_remove_time;
    }

    /**
     * @return string
     */
    public function getMinClientsInChannelBeforeForcedSilence() : ?string
    {
        return $this->min_clients_in_channel_before_forced_silence;
    }

    /**
     * @return string
     */
    public function getPrioritySpeakerDimmModificator() : ?string
    {
        return $this->priority_speaker_dimm_modificator;
    }

    /**
     * @return string
     */
    public function getAntifloodPointsTickReduce() : ?string
    {
        return $this->antiflood_points_tick_reduce;
    }

    /**
     * @return string
     */
    public function getAntifloodPointsNeededCommandBlock() : ?string
    {
        return $this->antiflood_points_needed_command_block;
    }

    /**
     * @return string
     */
    public function getAntifloodPointsNeededIpBlock() : ?string
    {
        return $this->antiflood_points_needed_ip_block;
    }

    /**
     * @return string
     */
    public function getClientConnections() : ?string
    {
        return $this->client_connections;
    }

    /**
     * @return string
     */
    public function getQueryClientConnections() : ?string
    {
        return $this->query_client_connections;
    }

    /**
     * @return string
     */
    public function getHostButtonTooltip() : ?string
    {
        return $this->hostbutton_tooltip;
    }

    /**
     * @return string
     */
    public function getHostButtonUrl() : ?string
    {
        return $this->hostbutton_url;
    }

    /**
     * @return string
     */
    public function getHostButtonGfxUrl() : ?string
    {
        return $this->hostbutton_gfx_url;
    }

    /**
     * @return string
     */
    public function getDownloadQuota() : ?string
    {
        return $this->download_quota;
    }

    /**
     * @return string
     */
    public function getUploadQuota() : ?string
    {
        return $this->upload_quota;
    }

    /**
     * @return string
     */
    public function getMonthBytesDownloaded() : ?string
    {
        return $this->month_bytes_downloaded;
    }

    /**
     * @return string
     */
    public function getMonthBytesUploaded() : ?string
    {
        return $this->month_bytes_uploaded;
    }

    /**
     * @return string
     */
    public function getTotalBytesDownloaded() : ?string
    {
        return $this->total_bytes_downloaded;
    }

    /**
     * @return string
     */
    public function getTotalBytesUploaded() : ?string
    {
        return $this->total_bytes_uploaded;
    }

    /**
     * @return string
     */
    public function getNeededIdentitySecurityLevel() : ?string
    {
        return $this->needed_identity_security_level;
    }

    /**
     * @return string
     */
    public function getLogClient() : ?string
    {
        return $this->log_client;
    }

    /**
     * @return string
     */
    public function getLogQuery() : ?string
    {
        return $this->log_query;
    }

    /**
     * @return string
     */
    public function getLogChannel() : ?string
    {
        return $this->log_channel;
    }

    /**
     * @return string
     */
    public function getLogPermissions() : ?string
    {
        return $this->log_permissions;
    }

    /**
     * @return string
     */
    public function getLogServer() : ?string
    {
        return $this->log_server;
    }

    /**
     * @return string
     */
    public function getLogFiletransfer() : ?string
    {
        return $this->log_filetransfer;
    }

    /**
     * @return string
     */
    public function getMinClientVersion() : ?string
    {
        return $this->min_client_version;
    }

    /**
     * @return string
     */
    public function getNamePhonetic() : ?string
    {
        return $this->name_phonetic;
    }

    /**
     * @return string
     */
    public function getIconId() : ?string
    {
        return $this->icon_id;
    }

    /**
     * @return string
     */
    public function getReservedSlots() : ?string
    {
        return $this->reserved_slots;
    }

    /**
     * @return string
     */
    public function getTotalPacketLossSpeech() : ?string
    {
        return $this->total_packetloss_speech;
    }

    /**
     * @return string
     */
    public function getTotalPacketLossKeepalive() : ?string
    {
        return $this->total_packetloss_keepalive;
    }

    /**
     * @return string
     */
    public function getTotalPacketLossControl() : ?string
    {
        return $this->total_packetloss_control;
    }

    /**
     * @return string
     */
    public function getTotalPacketLossTotal() : ?string
    {
        return $this->total_packetloss_total;
    }

    /**
     * @return string
     */
    public function getTotalPing() : ?string
    {
        return $this->total_ping;
    }

    /**
     * @return string
     */
    public function getIp() : ?string
    {
        return $this->ip;
    }

    /**
     * @return string
     */
    public function getWeblistEnabled() : ?string
    {
        return $this->weblist_enabled;
    }

    /**
     * @return string
     */
    public function getAskForPrivilegekey() : ?string
    {
        return $this->ask_for_privilegekey;
    }

    /**
     * @return string
     */
    public function getHostBannerMode() : ?string
    {
        return $this->hostbanner_mode;
    }

    /**
     * @return string
     */
    public function getChannelTempDeleteDelayDefault() : ?string
    {
        return $this->channel_temp_delete_delay_default;
    }

    /**
     * @return string
     */
    public function getMinAndroidVersion() : ?string
    {
        return $this->min_android_version;
    }

    /**
     * @return string
     */
    public function getMinIosVersion() : ?string
    {
        return $this->min_ios_version;
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
     * @return VirtualServerInfo
     */
    public function setVirtualServer(VirtualServer $virtualServer) : VirtualServerInfo
    {
        $this->virtualServer = $virtualServer;

        if ($virtualServer->getVirtualServerInfo() !== $this) {
            $virtualServer->setVirtualServerInfo($this);
        }

        return $this;
    }
}
