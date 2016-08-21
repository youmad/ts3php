<?php

namespace Youmad\TeamSpeak3\Command\Parameter;

abstract class AbstractParameter
{
    /**
     * @return string
     */
    abstract public function __toString() : string;
}
