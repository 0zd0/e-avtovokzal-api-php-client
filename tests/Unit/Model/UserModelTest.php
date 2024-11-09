<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\UserModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class UserModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(UserModel::getClassName());
        $model = UserModel::fromArray($json);
        $this::assertNull($model->getId());
        $this::assertNull($model->getUsername());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(UserModel::getClassName());
        $model = UserModel::fromArray($json);
        $this::assertSame(1, $model->getId());
        $this::assertSame('username', $model->getUsername());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
