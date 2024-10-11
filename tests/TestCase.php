<?php

namespace Onepix\EAvtovokzalApiClient\Test;

use Onepix\EAvtovokzalApiClient\Test\Util\HelperTrait;
use PHPUnit\Framework\MockObject\Exception;
use SoapFault;

class TestCase extends \PHPUnit\Framework\TestCase
{
    use HelperTrait;

    /**
     * @throws Exception|SoapFault
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpConfig();
    }
}
