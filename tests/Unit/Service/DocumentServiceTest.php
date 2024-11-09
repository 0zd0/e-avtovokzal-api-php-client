<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Document\DocumentTypeModel;
use Onepix\EAvtovokzalApiClient\Model\Document\GetDocTypesParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Document\GetDocTypesResponseModel;
use SoapFault;

class DocumentServiceTest extends AbstractServiceHelper
{
    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetDocuments()
    {
        $this->setMockJsonModel(GetDocTypesResponseModel::getClassName(), true);

        $documents = $this->document->getByRace(
            (new GetDocTypesParametersModel())
                ->setUid('')
        );

        $this::assertContainsOnlyInstancesOf(DocumentTypeModel::class, $documents);
    }
}
