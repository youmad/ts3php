<?php

namespace Youmad\TeamSpeak3\Command;

class QuitCommand extends AbstractCommand
{
    /**
     * QuitCommand constructor.
     */
    public function __construct()
    {
        parent::__construct('quit');
    }
}
