<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceSeatsParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceSeatsResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRacesParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRacesResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Race\RaceModel;
use Onepix\EAvtovokzalApiClient\Model\SeatModel;
use SoapFault;

class RaceServiceTest extends AbstractServiceTest
{
    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetRaces()
    {
        $this->setMockJsonModel(GetRacesResponseModel::getClassName(), true);

        $races = $this->race->getRaces(
            (new GetRacesParametersModel())
                ->setDispatchPointId(1)
                ->setArrivalPointId(1)
        );

        $this::assertContainsOnlyInstancesOf(RaceModel::class, $races);
    }

    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetRaceSeats()
    {
        $this->setMockJsonModel(GetRaceSeatsResponseModel::getClassName(), true);

        $seats = $this->race->getRaceSeats(
            (new GetRaceSeatsParametersModel())
                ->setUid('uid')
        );

        $this::assertContainsOnlyInstancesOf(SeatModel::class, $seats);
    }

    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetRace()
    {
        $this->setMockJsonModel(GetRaceResponseModel::getClassName(), true);

        $uid = 'uid';

        $race = $this->race->getRace(
            (new GetRaceParametersModel())
                ->setUid($uid)
        );

        $this::assertInstanceOf(RaceModel::class, $race);
        $this::assertSame($uid, $race->getUid());
    }
}
