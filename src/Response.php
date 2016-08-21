<?php

namespace Youmad\TeamSpeak3;

use Doctrine\Common\Collections\ArrayCollection;
use Youmad\TeamSpeak3\Model\{
    AbstractModel,
    QueryError
};

class Response
{
    /**
     * @var array
     */
    private $raw;

    /**
     * @var QueryError
     */
    private $error;

    /**
     * @var ArrayCollection|AbstractModel
     */
    private $data;

    /**
     * Response constructor.
     *
     * @param array  $raw
     * @param string $model
     */
    public function __construct(array $raw, string $model = null)
    {
        $this->raw = $raw;

        $this->parse($model);
    }

    /**
     * @return array
     */
    public function getRaw() : array
    {
        return $this->raw;
    }

    /**
     * @param array $raw
     *
     * @return Response
     */
    public function setRaw(array $raw) : Response
    {
        $this->raw = $raw;

        return $this;
    }

    /**
     * @return ArrayCollection|AbstractModel
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return QueryError
     */
    public function getError() : QueryError
    {
        return $this->error;
    }

    /**
     * @param QueryError $error
     *
     * @return Response
     */
    public function setError(QueryError $error) : Response
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @param string $model
     *
     * @return Response
     */
    private function parse(string $model = null) : Response
    {
        $lines = array_slice($this->raw, -2, 2);

        $line = trim(array_pop($lines));

        $errorArray = explode(' ', $line, 2);
        $error = end($errorArray);

        $this->error = $this->instantiateFromLine(QueryError::class, $error);

        if (!empty($model) && count($lines)) {
            $line = trim(array_pop($lines));

            if (strpos($line, '|')) {
                $this->data = new ArrayCollection();
                foreach (explode('|', $line) as $value) {
                    $object = $this->instantiateFromLine($model, $value);

                    $this->data->set($object->getId(), $object);
                }
            } else {
                $this->data = $this->instantiateFromLine($model, $line);
            }
        }

        return $this;
    }

    /**
     * @param string $model
     * @param string $line
     *
     * @return AbstractModel
     */
    private function instantiateFromLine(string $model, string $line) : AbstractModel
    {
        $data = [];
        foreach (explode(' ', $line) as $parameter) {
            $parameterArray = explode('=', $parameter);
            $data[$parameterArray[0]] = $parameterArray[1] ?? null;
        }

        /** @var $object AbstractModel */
        $object = new $model;
        $prefix = $object->getPrefix();

        $reflector = new \ReflectionClass($model);
        foreach ($reflector->getProperties() as $prop) {

            $name = $prop->getName();
            $key = $prefix . $name;

            if (isset($data[$name]) || isset($data[$key])) {
                $value = $data[$name] ?? $data[$key] ?? null;

                $property = new \ReflectionProperty($model, $name);
                $property->setAccessible(true);
                $property->setValue($object, $value);
            }
        }

        return $object;
    }
}
