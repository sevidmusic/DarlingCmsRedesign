<?php

namespace UnitTests\interfaces\component\UserInterface\TestTraits;

use DarlingDataManagementSystem\interfaces\component\UserInterface\ResponseUI as ResponseUIInterface;
use DarlingDataManagementSystem\interfaces\component\Web\Routing\Router as RouterInterface;
use DarlingDataManagementSystem\classes\component\Web\Routing\Router as CoreRouter;
use DarlingDataManagementSystem\interfaces\component\Web\Routing\Request as RequestInterface;
use DarlingDataManagementSystem\classes\component\Web\Routing\Request as CoreRequest;
use DarlingDataManagementSystem\interfaces\component\Web\Routing\Response as ResponseInterface;
use DarlingDataManagementSystem\interfaces\component\Crud\ComponentCrud as ComponentCrudInterface;
use DarlingDataManagementSystem\classes\component\Crud\ComponentCrud as CoreComponentCrud;
use DarlingDataManagementSystem\interfaces\component\Driver\Storage\StorageDriver as StorageDriverInterface;
use DarlingDataManagementSystem\classes\component\Driver\Storage\StorageDriver as CoreStorageDriver;
use DarlingDataManagementSystem\classes\primary\Storable as CoreStorable;
use DarlingDataManagementSystem\classes\primary\Switchable as CoreSwitchable;
use DarlingDataManagementSystem\interfaces\primary\Positionable as PositionableInterface;
use DarlingDataManagementSystem\classes\primary\Positionable as CorePositionable;
use DarlingDataManagementSystem\classes\component\Web\App as CoreApp;

trait ResponseUITestTrait
{

    private $responseUI;

    protected function setResponseUIParentTestInstances(): void
    {
        $this->setOutputComponent($this->getResponseUI());
        $this->setOutputComponentParentTestInstances();
    }

    public function getResponseUI(): ResponseUIInterface
    {
        return $this->responseUI;
    }

    public function setResponseUI(ResponseUIInterface $responseUI): void
    {
        $this->responseUI = $responseUI;
    }

    public function getResponseUITestArgs(): array
    {
        return [
            new CoreStorable(
                'MockResponseUIName',
                self::getTestComponentLocation(),
                self::getTestComponentContainer()
            ),
            new CoreSwitchable(),
            new CorePositionable(),
            $this->getRouter()
        ];
    }

    public function testGetRouterTestMethodReturnsARouterImplemnetationInstance(): void
    {
        $this->assertTrue(
            $this->isProperImplementation(
                RouterInterface::class,
                $this->getRouter()
            )
        );
    }

    public function getRouter(): RouterInterface
    {
        if (isset($this->router)) {
            return $this->router;
        }
        $this->router = new CoreRouter(
            new CoreStorable(
                'StandardUITestRouter' . strval(rand(0, 999)),
                self::getTestComponentLocation(),
                self::getTestComponentContainer()
            ),
            new CoreSwitchable(),
            $this->getCurrentRequest(),
            $this->getComponentCrudForRouter()
        );
        return $this->router;
    }

    protected static function getTestComponentLocation(): string
    {
        return 'ResponseUITestComponents';
    }

    protected static function getTestComponentContainer(): string
    {
        return 'TestComponents';
    }

    public function getCurrentRequest(): RequestInterface
    {
        if (isset($this->currentRequest) === true) {
            return $this->currentRequest;
        }
        $this->currentRequest = new CoreRequest(
            new CoreStorable(
                'StandardUICurrentRequest' . strval(rand(0, 999)),
                self::getTestComponentLocation(),
                self::getTestComponentContainer()
            ),
            new CoreSwitchable()
        );
        $this->getRouter()->getCrud()->create($this->currentRequest);
        return $this->currentRequest;
    }

    private function getComponentCrudForRouter(): ComponentCrudInterface
    {
        if (isset($this->router) === true) {
            return $this->getRouter()->getCrud();
        }
        return new CoreComponentCrud(
            new CoreStorable(
                'StandardUITestComponentCrudForStandardUITestRouter' . strval(rand(0, 999)),
                self::getTestComponentLocation(),
                self::getTestComponentContainer()
            ),
            new CoreSwitchable(),
            $this->getStandardStorageDriverForCrud()
        );
    }

    private function getStandardStorageDriverForCrud(): StorageDriverInterface
    {
        return new CoreStorageDriver(
            new CoreStorable(
                'StandardUITestStorageDriver' . strval(rand(0, 999)),
                self::getTestComponentLocation(),
                self::getTestComponentContainer()
            ),
            new CoreSwitchable()
        );
    }

    public function testRouterPropertyIsAssignedARouterImplementationInstancePostInstantiation(): void
    {
        $this->assertTrue(
            $this->isProperImplementation(
                RouterInterface::class,
                $this->getResponseUI()->export()['router']
            )
        );
    }

    private function expectedResponses(): array
    {
        return $this->getResponseUI()->export()['router']->getResponses(
            self::getTestComponentLocation(),
            ResponseInterface::RESPONSE_CONTAINER
        );
    }

    private function sortPositionables(PositionableInterface ...$postionables): array
    {
        $sorted = [];
        foreach($postionables as $postionable) {
            while(isset($sorted[strval($postionable->getPosition())]))
            {
                $postionable->increasePosition();
            }
            $sorted[strval($postionable->getPosition())] = $postionable;
        }
        return $sorted;
    }

    private function getRoutersCompoenentCrud(): ComponentCrudInterface
    {
         return $this->getResponseUI()->export()['router']->export()['crud'];
    }

    private function expectedOutput(): string
    {
        $expectedOutput = '';
        $expectedResponses = $this->expectedResponses();
        $sortedResponses = $this->sortPositionables(...$expectedResponses);;
        foreach($sortedResponses as $response)
        {
            $outputComponents = [];
            foreach($response->getOutputComponentStorageInfo() as $storable)
            {
                $component = $this->getRoutersCompoenentCrud()->read($storable);
                if($this->isProperImplementation(OutputComponentInterface::class, $component))
                {
                    array_push($outputComponents, $component);
                }
            }
            $sortedOutputComponents = $this->sortPositionables(...$outputComponents);
            foreach($sortedOutputComponents as $outputComponent)
            {
                $expectedOutput .= $outputComponent->getOutput();
            }
        }
        return '';
    }

    public function testGetOutputReturnsCollectiveOutputFromAllResponsesReturnedByRouterSortedByResponsePositionThenOutputComponentPosition(): void
    {
        $this->assertEquals(
            $this->expectedOutput(),
            $this->getResponseUI()->getOutput()
        );
    }
}
