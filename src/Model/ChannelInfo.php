<?php

namespace Youmad\TeamSpeak3\Model;

class ChannelInfo extends AbstractModel
{
    /**
     * @var string
     */
    private $topic;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $codec;

    /**
     * @var string
     */
    private $codec_quality;

    /**
     * @var string
     */
    private $maxclients;

    /**
     * @var string
     */
    private $maxfamilyclients;

    /**
     * @var string
     */
    private $flag_permanent;

    /**
     * @var string
     */
    private $flag_semi_permanent;

    /**
     * @var string
     */
    private $flag_default;

    /**
     * @var string
     */
    private $flag_password;

    /**
     * @var string
     */
    private $codec_latency_factor;

    /**
     * @var string
     */
    private $codec_is_unencrypted;

    /**
     * @var string
     */
    private $security_salt;

    /**
     * @var string
     */
    private $delete_delay;

    /**
     * @var string
     */
    private $flag_maxclients_unlimited;

    /**
     * @var string
     */
    private $flag_maxfamilyclients_unlimited;

    /**
     * @var string
     */
    private $flag_maxfamilyclients_inherited;

    /**
     * @var string
     */
    private $filepath;

    /**
     * @var string
     */
    private $needed_talk_power;

    /**
     * @var string
     */
    private $forced_silence;

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
    private $flag_private;

    /**
     * @var string
     */
    private $seconds_empty;

    /**
     * @var Channel
     */
    private $channel;

    /**
     * {@inheritdoc}
     */
    public function __toString() : string
    {
        return (string) $this->channel;
    }

    /**
     * {@inheritdoc}
     */
    public function getPrefix() : string
    {
        return 'channel_';
    }

    /**
     * {@inheritdoc}
     */
    public function getId() : ?string
    {
        return $this->channel->getId();
    }

    /**
     * @return string
     */
    public function getTopic() : ?string
    {
        return $this->topic;
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
    public function getPassword() : ?string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getCodec() : ?string
    {
        return $this->codec;
    }

    /**
     * @return string
     */
    public function getCodecQuality() : ?string
    {
        return $this->codec_quality;
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
    public function getMaxfamilyclients() : ?string
    {
        return $this->maxfamilyclients;
    }

    /**
     * @return string
     */
    public function getFlagPermanent() : ?string
    {
        return $this->flag_permanent;
    }

    /**
     * @return string
     */
    public function getFlagSemiPermanent() : ?string
    {
        return $this->flag_semi_permanent;
    }

    /**
     * @return string
     */
    public function getFlagDefault() : ?string
    {
        return $this->flag_default;
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
    public function getCodecLatencyFactor() : ?string
    {
        return $this->codec_latency_factor;
    }

    /**
     * @return string
     */
    public function getCodecIsUnencrypted() : ?string
    {
        return $this->codec_is_unencrypted;
    }

    /**
     * @return string
     */
    public function getSecuritySalt() : ?string
    {
        return $this->security_salt;
    }

    /**
     * @return string
     */
    public function getDeleteDelay() : ?string
    {
        return $this->delete_delay;
    }

    /**
     * @return string
     */
    public function getFlagMaxclientsUnlimited() : ?string
    {
        return $this->flag_maxclients_unlimited;
    }

    /**
     * @return string
     */
    public function getFlagMaxfamilyclientsUnlimited() : ?string
    {
        return $this->flag_maxfamilyclients_unlimited;
    }

    /**
     * @return string
     */
    public function getFlagMaxfamilyclientsInherited() : ?string
    {
        return $this->flag_maxfamilyclients_inherited;
    }

    /**
     * @return string
     */
    public function getFilepath() : ?string
    {
        return $this->filepath;
    }

    /**
     * @return string
     */
    public function getNeededTalkPower() : ?string
    {
        return $this->needed_talk_power;
    }

    /**
     * @return string
     */
    public function getForcedSilence() : ?string
    {
        return $this->forced_silence;
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
    public function getFlagPrivate() : ?string
    {
        return $this->flag_private;
    }

    /**
     * @return string
     */
    public function getSecondsEmpty() : ?string
    {
        return $this->seconds_empty;
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
     * @return ChannelInfo
     */
    public function setChannel(Channel $channel) : ChannelInfo
    {
        $this->channel = $channel;

        if ($channel->getChannelInfo() !== $this) {
            $channel->setChannelInfo($this);
        }

        return $this;
    }
}
