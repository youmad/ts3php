<?php

namespace Youmad\TeamSpeak3\Command;

use Youmad\TeamSpeak3\Command\Parameter\KeyValueParameter;
use Youmad\TeamSpeak3\Model\ClientInfo;

class ClientInfoCommand extends AbstractCommand
{
    /**
     * ClientInfoCommand constructor.
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        parent::__construct('clientinfo', ClientInfo::class);

        $this->parameters->add(new KeyValueParameter('clid', $id));
    }
}
