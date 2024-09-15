<?php

namespace Onepix\EAvtovokzalApiClient\Model;

abstract class AbstractModel
{
    /**
     * Convert to class from json
     *
     * @param array $response response from API.
     *
     * @return static
     */
    abstract public static function fromArray(array $response): static;

    /**
     * Convert class to array
     *
     * @return array
     */
    abstract public function toArray(): array;
}
