<?php

namespace Onepix\EAvtovokzalApiClient\Model\Country;

use Onepix\EAvtovokzalApiClient\Model\AbstractReturnModel;

class GetCountriesResponseModel extends AbstractReturnModel
{
    public const RETURN_MODEL = CountryModel::class;

    /**
     * @return CountryModel[]|null
     */
    public function getMultipleReturns(): ?array
    {
        return parent::getMultipleReturns();
    }
}
