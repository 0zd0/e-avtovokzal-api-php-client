<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Echo\EchoSendParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Echo\EchoSendResponseModel;
use SoapFault;

class EchoServiceTest extends AbstractServiceHelper
{
    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testSend()
    {
        $this->setMockJsonModel(EchoSendResponseModel::getClassName(), true);

        $message = 'test';

        $sendEcho = $this->echo->send(
            (new EchoSendParametersModel())
                ->setMessage($message)
        );

        $this::assertInstanceOf(EchoSendResponseModel::class, $sendEcho);
        $this::assertSame($message, $sendEcho->getReturn());
    }
}
