<?php

namespace Youmad\TeamSpeak3\Command;

use Youmad\TeamSpeak3\Model\VirtualServer;

class ServerListCommand extends AbstractCommand
{
    /**
     * ServerListCommand constructor.
     */
    public function __construct()
    {
        parent::__construct('serverlist', VirtualServer::class);
    }
}
