<?php

namespace Youmad\TeamSpeak3\Command;

use Youmad\TeamSpeak3\Model\Client;

class ClientListCommand extends AbstractCommand
{
    /**
     * ClientListCommand constructor.
     */
    public function __construct()
    {
        parent::__construct('clientlist', Client::class);
    }
}
