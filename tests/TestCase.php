<?php

namespace Onepix\EAvtovokzalApiClient\Test;

use Onepix\EAvtovokzalApiClient\Test\Util\HelperTrait;

class TestCase extends \PHPUnit\Framework\TestCase
{
    use HelperTrait;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpConfig();
    }
}
