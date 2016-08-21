<?php

namespace Youmad\TeamSpeak3\Command;

use Youmad\TeamSpeak3\Model\VirtualServerInfo;

class ServerInfoCommand extends AbstractCommand
{
    /**
     * ServerInfoCommand constructor.
     */
    public function __construct()
    {
        parent::__construct('serverinfo', VirtualServerInfo::class);
    }
}
