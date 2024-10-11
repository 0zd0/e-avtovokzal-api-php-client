<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Ticket\GetTicketTypesParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\GetTicketTypesResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\ReturnTicketParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\ReturnTicketResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketTypeModel;
use SoapFault;

class TicketServiceTest extends AbstractServiceTest
{
    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetTicketTypes()
    {
        $this->setMockJsonModel(GetTicketTypesResponseModel::getClassName(), true);

        $ticketTypes = $this->ticket->getTicketTypes(
            (new GetTicketTypesParametersModel())
                ->setUid('uid')
        );

        $this::assertContainsOnlyInstancesOf(TicketTypeModel::class, $ticketTypes);
    }

    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetRaces()
    {
        $this->setMockJsonModel(ReturnTicketResponseModel::getClassName(), true);

        $id = 1;

        $ticket = $this->ticket->returnTicket(
            (new ReturnTicketParametersModel())
                ->setTicketId($id)
        );

        $this::assertInstanceOf(TicketModel::class, $ticket);
        $this::assertSame($id, $ticket->getId());
    }
}
