<?php

namespace Onepix\EAvtovokzalApiClient\Model\Document;

use Onepix\EAvtovokzalApiClient\Model\AbstractReturnModel;

class GetDocTypesResponseModel extends AbstractReturnModel
{
    public const RETURN_MODEL = DocumentTypeModel::class;

    /**
     * @return DocumentTypeModel[]|null
     */
    public function getMultipleReturns(): ?array
    {
        return parent::getMultipleReturns();
    }
}
