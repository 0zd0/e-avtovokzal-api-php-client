<?php

namespace Onepix\EAvtovokzalApiClient\Model;

abstract class AbstractReturnCollectionModel extends AbstractReturnModel
{
    /**
     * @var AbstractModel[]|null $return
     */
    protected array|null $return = null;
}
