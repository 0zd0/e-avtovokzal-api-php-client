<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Onepix\EAvtovokzalApiClient\Enum\ClientMethodEnum;
use Onepix\EAvtovokzalApiClient\Model\Document\DocumentTypeModel;
use Onepix\EAvtovokzalApiClient\Model\Document\GetDocTypesParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Document\GetDocTypesResponseModel;
use SoapFault;

class DocumentService extends AbstractService
{
    /**
     * @param GetDocTypesParametersModel $data
     *
     * @return DocumentTypeModel[]|null
     * @throws SoapFault
     */
    public function getByRace(
        GetDocTypesParametersModel $data
    ): ?array {
        $response = $this->getClient()->call(
            ClientMethodEnum::GET_DOC_TYPES,
            $data->toArray()
        );
        $return   = GetDocTypesResponseModel::fromArray($response);

        return $return->getMultipleReturns();
    }
}
