<?php

namespace Youmad\TeamSpeak3\Model;

class ClientInfo extends AbstractModel
{
    /**
     * @var string
     */
    private $idle_time;

    /**
     * @var string
     */
    private $unique_identifier;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $platform;

    /**
     * @var string
     */
    private $input_muted;

    /**
     * @var string
     */
    private $output_muted;

    /**
     * @var string
     */
    private $outputonly_muted;

    /**
     * @var string
     */
    private $input_hardware;

    /**
     * @var string
     */
    private $output_hardware;

    /**
     * @var string
     */
    private $default_channel;

    /**
     * @var string
     */
    private $meta_data;

    /**
     * @var string
     */
    private $is_recording;

    /**
     * @var string
     */
    private $version_sign;

    /**
     * @var string
     */
    private $security_hash;

    /**
     * @var string
     */
    private $login_name;

    /**
     * @var string
     */
    private $channel_group_id;

    /**
     * @var string
     */
    private $servergroups;

    /**
     * @var string
     */
    private $created;

    /**
     * @var string
     */
    private $lastconnected;

    /**
     * @var string
     */
    private $totalconnections;

    /**
     * @var string
     */
    private $away;

    /**
     * @var string
     */
    private $away_message;

    /**
     * @var string
     */
    private $flag_avatar;

    /**
     * @var string
     */
    private $talk_power;

    /**
     * @var string
     */
    private $talk_request;

    /**
     * @var string
     */
    private $talk_request_msg;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $is_talker;

    /**
     * @var string
     */
    private $month_bytes_uploaded;

    /**
     * @var string
     */
    private $month_bytes_downloaded;

    /**
     * @var string
     */
    private $total_bytes_uploaded;

    /**
     * @var string
     */
    private $total_bytes_downloaded;

    /**
     * @var string
     */
    private $is_priority_speaker;

    /**
     * @var string
     */
    private $nickname_phonetic;

    /**
     * @var string
     */
    private $needed_serverquery_view_power;

    /**
     * @var string
     */
    private $default_token;

    /**
     * @var string
     */
    private $icon_id;

    /**
     * @var string
     */
    private $is_channel_commander;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $channel_group_inherited_channel_id;

    /**
     * @var string
     */
    private $badges;

    /**
     * @var string
     */
    private $base64HashClientUID;

    /**
     * @var string
     */
    private $connection_filetransfer_bandwidth_sent;

    /**
     * @var string
     */
    private $connection_filetransfer_bandwidth_received;

    /**
     * @var string
     */
    private $connection_packets_sent_total;

    /**
     * @var string
     */
    private $connection_bytes_sent_total;

    /**
     * @var string
     */
    private $connection_packets_received_total;

    /**
     * @var string
     */
    private $connection_bytes_received_total;

    /**
     * @var string
     */
    private $connection_bandwidth_sent_last_second_total;

    /**
     * @var string
     */
    private $connection_bandwidth_sent_last_minute_total;

    /**
     * @var string
     */
    private $connection_bandwidth_received_last_second_total;

    /**
     * @var string
     */
    private $connection_bandwidth_received_last_minute_total;

    /**
     * @var string
     */
    private $connection_connected_time;

    /**
     * @var string
     */
    private $connection_client_ip;

    /**
     * @var Client
     */
    private $client;

    /**
     * {@inheritdoc}
     */
    public function __toString() : string
    {
        return (string) $this->client;
    }

    /**
     * {@inheritdoc}
     */
    public function getPrefix() : string
    {
        return 'client_';
    }

    /**
     * {@inheritdoc}
     */
    public function getId() : ?string
    {
        return $this->client->getId();
    }

    /**
     * @return string
     */
    public function getIdleTime() : ?string
    {
        return $this->idle_time;
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
    public function getVersion() : ?string
    {
        return $this->version;
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
    public function getInputMuted() : ?string
    {
        return $this->input_muted;
    }

    /**
     * @return string
     */
    public function getOutputMuted() : ?string
    {
        return $this->output_muted;
    }

    /**
     * @return string
     */
    public function getOutputOnlyMuted() : ?string
    {
        return $this->outputonly_muted;
    }

    /**
     * @return string
     */
    public function getInputHardware() : ?string
    {
        return $this->input_hardware;
    }

    /**
     * @return string
     */
    public function getOutputHardware() : ?string
    {
        return $this->output_hardware;
    }

    /**
     * @return string
     */
    public function getDefaultChannel() : ?string
    {
        return $this->default_channel;
    }

    /**
     * @return string
     */
    public function getMetaData() : ?string
    {
        return $this->meta_data;
    }

    /**
     * @return string
     */
    public function getIsRecording() : ?string
    {
        return $this->is_recording;
    }

    /**
     * @return string
     */
    public function getVersionSign() : ?string
    {
        return $this->version_sign;
    }

    /**
     * @return string
     */
    public function getSecurityHash() : ?string
    {
        return $this->security_hash;
    }

    /**
     * @return string
     */
    public function getLoginName() : ?string
    {
        return $this->login_name;
    }

    /**
     * @return string
     */
    public function getChannelGroupId() : ?string
    {
        return $this->channel_group_id;
    }

    /**
     * @return string
     */
    public function getServerGroups() : ?string
    {
        return $this->servergroups;
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
    public function getLastConnected() : ?string
    {
        return $this->lastconnected;
    }

    /**
     * @return string
     */
    public function getTotalConnections() : ?string
    {
        return $this->totalconnections;
    }

    /**
     * @return string
     */
    public function getAway() : ?string
    {
        return $this->away;
    }

    /**
     * @return string
     */
    public function getAwayMessage() : ?string
    {
        return $this->away_message;
    }

    /**
     * @return string
     */
    public function getFlagAvatar() : ?string
    {
        return $this->flag_avatar;
    }

    /**
     * @return string
     */
    public function getTalkPower() : ?string
    {
        return $this->talk_power;
    }

    /**
     * @return string
     */
    public function getTalkRequest() : ?string
    {
        return $this->talk_request;
    }

    /**
     * @return string
     */
    public function getTalkRequestMsg() : ?string
    {
        return $this->talk_request_msg;
    }

    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getIsTalker() : ?string
    {
        return $this->is_talker;
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
    public function getMonthBytesDownloaded() : ?string
    {
        return $this->month_bytes_downloaded;
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
    public function getTotalBytesDownloaded() : ?string
    {
        return $this->total_bytes_downloaded;
    }

    /**
     * @return string
     */
    public function getIsPrioritySpeaker() : ?string
    {
        return $this->is_priority_speaker;
    }

    /**
     * @return string
     */
    public function getNicknamePhonetic() : ?string
    {
        return $this->nickname_phonetic;
    }

    /**
     * @return string
     */
    public function getNeededServerQueryViewPower() : ?string
    {
        return $this->needed_serverquery_view_power;
    }

    /**
     * @return string
     */
    public function getDefaultToken() : ?string
    {
        return $this->default_token;
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
    public function getIsChannelCommander() : ?string
    {
        return $this->is_channel_commander;
    }

    /**
     * @return string
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getChannelGroupInheritedChannelId() : ?string
    {
        return $this->channel_group_inherited_channel_id;
    }

    /**
     * @return string
     */
    public function getBadges() : ?string
    {
        return $this->badges;
    }

    /**
     * @return string
     */
    public function getBase64HashClientUID() : ?string
    {
        return $this->base64HashClientUID;
    }

    /**
     * @return string
     */
    public function getConnectionFiletransferBandwidthSent() : ?string
    {
        return $this->connection_filetransfer_bandwidth_sent;
    }

    /**
     * @return string
     */
    public function getConnectionFiletransferBandwidthReceived() : ?string
    {
        return $this->connection_filetransfer_bandwidth_received;
    }

    /**
     * @return string
     */
    public function getConnectionPacketsSentTotal() : ?string
    {
        return $this->connection_packets_sent_total;
    }

    /**
     * @return string
     */
    public function getConnectionBytesSentTotal() : ?string
    {
        return $this->connection_bytes_sent_total;
    }

    /**
     * @return string
     */
    public function getConnectionPacketsReceivedTotal() : ?string
    {
        return $this->connection_packets_received_total;
    }

    /**
     * @return string
     */
    public function getConnectionBytesReceivedTotal() : ?string
    {
        return $this->connection_bytes_received_total;
    }

    /**
     * @return string
     */
    public function getConnectionBandwidthSentLastSecondTotal() : ?string
    {
        return $this->connection_bandwidth_sent_last_second_total;
    }

    /**
     * @return string
     */
    public function getConnectionBandwidthSentLastMinuteTotal() : ?string
    {
        return $this->connection_bandwidth_sent_last_minute_total;
    }

    /**
     * @return string
     */
    public function getConnectionBandwidthReceivedLastSecondTotal() : ?string
    {
        return $this->connection_bandwidth_received_last_second_total;
    }

    /**
     * @return string
     */
    public function getConnectionBandwidthReceivedLastMinuteTotal() : ?string
    {
        return $this->connection_bandwidth_received_last_minute_total;
    }

    /**
     * @return string
     */
    public function getConnectionConnectedTime() : ?string
    {
        return $this->connection_connected_time;
    }

    /**
     * @return string
     */
    public function getConnectionClientIp() : ?string
    {
        return $this->connection_client_ip;
    }

    /**
     * @return Client
     */
    public function getClient() : ?Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     *
     * @return ClientInfo
     */
    public function setClient(Client $client): ClientInfo
    {
        $this->client = $client;

        if ($client->getClientInfo() !== $this) {
            $client->setClientInfo($this);
        }

        return $this;
    }
}
