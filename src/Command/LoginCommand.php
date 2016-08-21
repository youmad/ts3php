<?php

namespace Youmad\TeamSpeak3\Command;

class LoginCommand extends AbstractCommand
{
    /**
     * LoginCommand constructor.
     *
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password)
    {
        parent::__construct('login');

        $this->parameters->add(new Parameter\ValueParameter($username));
        $this->parameters->add(new Parameter\ValueParameter($password));
    }
}
