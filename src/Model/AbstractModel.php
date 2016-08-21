<?php

namespace Youmad\TeamSpeak3\Model;

abstract class AbstractModel
{
    /**
     * AbstractModel constructor.
     */
    public function __construct() {}

    /**
     * @return string
     */
    abstract public function __toString() : string ;

    /**
     * @return string
     */
    abstract public function getId() : ?string;

    /**
     * @return string
     */
    public function getPrefix() : string
    {
        return strtolower((new \ReflectionClass(static::class))->getShortName()) . '_';
    }
}
