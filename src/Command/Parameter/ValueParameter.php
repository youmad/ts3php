<?php

namespace Youmad\TeamSpeak3\Command\Parameter;

class ValueParameter
{
    /**
     * @var string
     */
    private $value;

    /**
     * ValueParameter constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return ValueParameter
     */
    public function setValue(string $value) : ValueParameter
    {
        $this->value = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString() : string
    {
        return $this->value;
    }
}
