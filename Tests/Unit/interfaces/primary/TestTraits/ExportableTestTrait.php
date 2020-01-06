<?php

namespace UnitTests\interfaces\primary\TestTraits;

use DarlingCms\interfaces\primary\Exportable;
use UnitTests\TestTraits\ArrayTester;
use UnitTests\TestTraits\ReflectionUtilityInstance;

trait ExportableTestTrait
{

    use ArrayTester;
    use ReflectionUtilityInstance;

    private $exportable;

    protected function setExportable(Exportable $exportable)
    {
        $this->exportable = $exportable;
    }

    protected function getExportable(): Exportable
    {
        return $this->exportable;
    }

    public function testExportReturnsArrayWhoseValuesAreInstancesPropertyValues()
    {
        $this->getArrayTestUtility()->arraysAreEqual(
            $this->getReflectionUtility()->getClassPropertyValues($this->getExportable()),
            $this->getExportable()->export()
        );
    }

    public function testPropertiesMatchImportedPropertiesPostImport()
    {
        $preImport = $this->getReflectionUtility()->getClassPropertyValues(
            $this->getExportable()
        );
        $this->getExportable()->import($this->getExportable()->export());
        $postImport = $this->getReflectionUtility()->getClassPropertyValues(
            $this->getExportable()
        );
        $this->getArrayTestUtility()->arraysAreEqual(
            $preImport,
            $postImport
        );
    }

}
