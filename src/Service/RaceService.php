<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Enum\ClientMethodEnum;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceSeatsParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceSeatsResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRacesParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRacesResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Race\RaceModel;
use Onepix\EAvtovokzalApiClient\Model\SeatModel;
use SoapFault;

class RaceService extends AbstractService
{
    /**
     * @param GetRacesParametersModel $data
     *
     * @return RaceModel[]|null
     * @throws SoapFault
     * @throws Exception
     */
    public function getRaces(
        GetRacesParametersModel $data
    ): ?array {
        $response = $this->getClient()->call(
            ClientMethodEnum::GET_RACES,
            $data->toArray()
        );
        $return   = GetRacesResponseModel::fromArray($response);

        return $return->getMultipleReturns();
    }

    /**
     * @param GetRaceSeatsParametersModel $data
     *
     * @return SeatModel[]|null
     * @throws SoapFault
     * @throws Exception
     */
    public function getRaceSeats(
        GetRaceSeatsParametersModel $data
    ): ?array {
        $response = $this->getClient()->call(
            ClientMethodEnum::GET_RACE_SEATS,
            $data->toArray()
        );
        $return   = GetRaceSeatsResponseModel::fromArray($response);

        return $return->getMultipleReturns();
    }

    /**
     * @param GetRaceParametersModel $data
     *
     * @return RaceModel|null
     * @throws SoapFault
     * @throws Exception
     */
    public function getRace(
        GetRaceParametersModel $data
    ): ?RaceModel {
        $response = $this->getClient()->call(
            ClientMethodEnum::GET_RACE,
            $data->toArray()
        );
        $return   = GetRaceResponseModel::fromArray($response);

        return $return->getSingleReturn();
    }
}
