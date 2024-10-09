<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Echo;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Echo\EchoSendResponseModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class EchoSendResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(EchoSendResponseModel::getClassName());
        $model = EchoSendResponseModel::fromArray($json);
        $this::assertNull($model->getReturn());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(EchoSendResponseModel::getClassName());
        $model = EchoSendResponseModel::fromArray($json);
        $this::assertSame('test', $model->getReturn());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
