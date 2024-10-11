<?php

namespace Onepix\EAvtovokzalApiClient\Test\Integration\Service;

use DateTime;
use Exception;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceSeatsParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRacesParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\JsonDriverUnicode;
use SoapFault;
use Spatie\Snapshots\MatchesSnapshots;

class RaceServiceTest extends TestCase
{
    use MatchesSnapshots;

    /**
     * @return void
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetRaces()
    {
        $request = (new GetRacesParametersModel())
            ->setDate(new DateTime($this->devConfig['filter']['race_date']))
            ->setDispatchPointId($this->devConfig['codes']['moscow_dispatch_id'])
            ->setArrivalPointId($this->devConfig['codes']['kirzhach_arrival_id']);

        $response = $this->api->race()->getRaces($request);

        $this->assertMatchesSnapshot(array_map(fn($item) => $item->toArray(), $response), new JsonDriverUnicode());
    }

    /**
     * @return void
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetRacesEmpty()
    {
        $request = (new GetRacesParametersModel())
            ->setDate(new DateTime('2001-01-01'))
            ->setDispatchPointId($this->devConfig['codes']['moscow_dispatch_id'])
            ->setArrivalPointId($this->devConfig['codes']['kirzhach_arrival_id']);

        $response = $this->api->race()->getRaces($request);

        $this->assertMatchesSnapshot(
            array_map(fn($item) => $item->toArray(), $response ?? []),
            new JsonDriverUnicode()
        );
    }

    /**
     * @return void
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetRace()
    {
        $request = (new GetRaceParametersModel())
            ->setUid($this->devConfig['filter']['race_uid']);

        $response = $this->api->race()->getRace($request);

        $this->assertMatchesSnapshot($response->toArray(), new JsonDriverUnicode());
    }

    /**
     * @return void
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetRaceSeats()
    {
        $request = (new GetRaceSeatsParametersModel())
            ->setUid($this->devConfig['filter']['race_uid']);

        $response = $this->api->race()->getRaceSeats($request);

        $this->assertMatchesSnapshot(
            array_map(fn($item) => $item->toArray(), $response ?? []),
            new JsonDriverUnicode()
        );
    }
}
