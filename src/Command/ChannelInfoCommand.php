<?php

namespace Youmad\TeamSpeak3\Command;

use Youmad\TeamSpeak3\Model\ChannelInfo;

class ChannelInfoCommand extends AbstractCommand
{
    /**
     * ChannelInfoCommand constructor.
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        parent::__construct('channelinfo', ChannelInfo::class);

        $this->parameters->add(new Parameter\KeyValueParameter('cid', $id));
    }
}
