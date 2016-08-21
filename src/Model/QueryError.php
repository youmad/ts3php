<?php

namespace Youmad\TeamSpeak3\Model;

class QueryError extends AbstractModel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $msg;

    /**
     * {@inheritdoc}
     */
    public function __toString() : string
    {
        return $this->msg;
    }

    /**
     * {@inheritdoc}
     */
    public function getPrefix() : string
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function getId() : ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return QueryError
     */
    public function setId(string $id) : QueryError
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getMsg() : ?string
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     *
     * @return QueryError
     */
    public function setMsg(string $msg) : QueryError
    {
        $this->msg = $msg;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSuccessful() : bool
    {
        return (int) $this->id === 0;
    }
}
