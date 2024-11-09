<?php

namespace Onepix\EAvtovokzalApiClient\Test;

use Onepix\EAvtovokzalApiClient\Test\Util\ArraysAreEqualConstraint;
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

    public static function assertArraysAreEqual(array $expected, array $actual, string $message = ''): void
    {
        $constraint = new ArraysAreEqualConstraint($expected);
        static::assertThat($actual, $constraint, $message);
    }
}
