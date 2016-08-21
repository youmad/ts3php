<?php

namespace Youmad\TeamSpeak3\Command;

class UseCommand extends AbstractCommand
{
    /**
     * UseCommand constructor.
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        parent::__construct('use');

        $this->parameters->add(new Parameter\ValueParameter($id));
    }
}
