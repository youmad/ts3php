<?php

namespace Youmad\TeamSpeak3\Command;

use Youmad\TeamSpeak3\Model\Channel;

class ChannelListCommand extends AbstractCommand
{
    /**
     * ChannelListCommand constructor.
     */
    public function __construct()
    {
        parent::__construct('channellist', Channel::class);
    }
}
