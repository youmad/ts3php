<?php

namespace Youmad\TeamSpeak3\Command\Parameter;

class KeyValueParameter extends AbstractParameter
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $value;

    /**
     * KeyValueParameter constructor.
     *
     * @param string $key
     * @param string $value
     */
    public function __construct(string $key, string $value = '')
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return KeyValueParameter
     */
    public function setKey(string $key) : KeyValueParameter
    {
        $this->key = $key;

        return $this;
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
     * @return KeyValueParameter
     */
    public function setValue(string $value) : KeyValueParameter
    {
        $this->value = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString() : string
    {
        return $this->key . '=' . $this->value;
    }
}
