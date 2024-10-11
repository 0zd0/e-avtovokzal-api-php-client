<?php

namespace Onepix\EAvtovokzalApiClient\Test\Integration\Service;

use DateTime;
use Onepix\EAvtovokzalApiClient\Enum\GenderEnum;
use Onepix\EAvtovokzalApiClient\Model\Order\BookOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Order\CancelOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Order\ConfirmOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Order\GetOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\SaleModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\JsonDriverUnicode;
use SoapFault;
use Spatie\Snapshots\MatchesSnapshots;

class OrderServiceTest extends TestCase
{
    use MatchesSnapshots;

    /**
     * @throws SoapFault
     */
    public function testBookOrder()
    {
        $request = (new BookOrderParametersModel())
            ->setUid($this->devConfig['filter']['race_uid'])
            ->setSales([
                (new SaleModel())
                    ->setFirstName('firstName')
                    ->setLastName('lastName')
                    ->setGender(GenderEnum::MALE)
                    ->setDocSeries('1111')
                    ->setDocNum('222222')
                    ->setDocTypeCode('1')
                    ->setTicketTypeCode('1#1#1')
                    ->setBirthday(new DateTime('01.01.2000'))
                    ->setCitizenship('РОССИЯ')
                    ->setPhone('+7900009009919')
            ]);

        $response = $this->api->order()->bookOrder($request);

        $this->assertMatchesSnapshot($response->toArray(), new JsonDriverUnicode());
    }

    /**
     * @throws SoapFault
     */
    public function testGetOrder()
    {
        $request = (new GetOrderParametersModel())
            ->setOrderId((int)$this->devConfig['codes']['order_id']);

        $response = $this->api->order()->getOrder($request);

        $this->assertMatchesSnapshot($response->toArray(), new JsonDriverUnicode());
    }

    /**
     * @throws SoapFault
     */
    public function testConfirmOrder()
    {
        $request = (new ConfirmOrderParametersModel())
            ->setOrderId((int)$this->devConfig['codes']['order_id'])
            ->setPaymentMethod('Хз');

        $response = $this->api->order()->confirmOrder($request);

        $this->assertMatchesSnapshot($response->toArray(), new JsonDriverUnicode());
    }

    /**
     * @throws SoapFault
     */
    public function testCancelOrder()
    {
        $request = (new CancelOrderParametersModel())
            ->setOrderId((int)$this->devConfig['codes']['order_id']);

        $response = $this->api->order()->cancelOrder($request);

        $this->assertMatchesSnapshot($response->toArray(), new JsonDriverUnicode());
    }
}
