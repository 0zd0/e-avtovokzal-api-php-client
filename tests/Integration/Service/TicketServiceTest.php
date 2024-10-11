<?php

namespace Onepix\EAvtovokzalApiClient\Test\Integration\Service;

use Onepix\EAvtovokzalApiClient\Model\Ticket\GetTicketTypesParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\ReturnTicketParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\JsonDriverUnicode;
use SoapFault;
use Spatie\Snapshots\MatchesSnapshots;

class TicketServiceTest extends TestCase
{
    use MatchesSnapshots;

    /**
     * @throws SoapFault
     */
    public function testGetTicketTypes()
    {
        $response = $this->api->ticket()->getTicketTypes(
            (new GetTicketTypesParametersModel())
                ->setUid($this->devConfig['filter']['race_uid'])
        );

        $this->assertMatchesSnapshot(
            array_map(fn($item) => $item->toArray(), $response ?? []),
            new JsonDriverUnicode()
        );
    }

    /**
     * @throws SoapFault
     */
    public function testReturnTicketTypes()
    {
        $response = $this->api->ticket()->returnTicket(
            (new ReturnTicketParametersModel())
                ->setTicketId((int) $this->devConfig['codes']['ticket_id'])
        );

        $this->assertMatchesSnapshot(
            $response->toArray(),
            new JsonDriverUnicode()
        );
    }
}
