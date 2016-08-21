<?php

namespace Youmad\TeamSpeak3\Command;

use Doctrine\Common\Collections\ArrayCollection;

class AbstractCommand
{
    /**
     * @var string
     */
    protected $command;

    /**
     * @var ArrayCollection
     */
    protected $parameters;

    /**
     * @var string
     */
    protected $model;

    /**
     * AbstractCommand constructor.
     *
     * @param string      $command
     * @param string|null $model
     */
    public function __construct(string $command, string $model = null)
    {
        $this->command = $command;
        $this->model = $model;
        $this->parameters = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getCommand() : string
    {
        return $this->command;
    }

    /**
     * @param string $command
     *
     * @return AbstractCommand
     */
    public function setCommand(string $command) : AbstractCommand
    {
        $this->command = $command;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getParameters() : ArrayCollection
    {
        return $this->parameters;
    }

    /**
     * @param ArrayCollection $parameters
     *
     * @return AbstractCommand
     */
    public function setParameters(ArrayCollection $parameters) : AbstractCommand
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getModel() : ?string
    {
        return $this->model;
    }

    /**
     * @param string $model
     *
     * @return AbstractCommand
     */
    public function setModel(string $model) : AbstractCommand
    {
        $this->model = $model;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        $string = $this->command;

        foreach ($this->parameters as $parameter) {
            $string .= ' ' . (string) $parameter;
        }

        return $string;
    }
}
