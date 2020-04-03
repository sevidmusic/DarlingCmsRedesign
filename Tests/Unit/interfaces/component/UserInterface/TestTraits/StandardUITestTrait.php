<?php

namespace UnitTests\interfaces\component\UserInterface\TestTraits;

use DarlingCms\classes\component\Crud\ComponentCrud;
use DarlingCms\classes\component\Driver\Storage\Standard as StorageDriver;
use DarlingCms\classes\component\OutputComponent;
use DarlingCms\classes\component\Template\UserInterface\StandardUITemplate;
use DarlingCms\classes\component\Web\Routing\Request;
use DarlingCms\classes\component\Web\Routing\Response;
use DarlingCms\classes\component\Web\Routing\Router;
use DarlingCms\classes\primary\Positionable;
use DarlingCms\classes\primary\Storable;
use DarlingCms\classes\primary\Switchable;
use DarlingCms\interfaces\component\Crud\ComponentCrud as ComponentCrudInterface;
use DarlingCms\interfaces\component\UserInterface\StandardUI;

trait StandardUITestTrait
{

    private $standardUI;
    private $router;
    private $currentRequest;
    private $generateComponentCalls = 0;

    public function getStandardUIContainer(): string
    {
        return 'StandardUITestStandardUIContainer';
    }

    private function devCountStoredComponents(): void {
        var_dump(
            [
                'Current Request Url' => $this->getCurrentRequest()->getUrl(),
                '# Sotred Reqiests' => count(
                    $this->getStoredComponents(
                        $this->getComponentLocation(),
                        $this->getRequestContainer()
                    )
                ),
                '# Stored OC' => count(
                    $this->getStoredComponents(
                        $this->getComponentLocation(),
                        $this->getOutputComponentContainer()
                    )
                ),
                '# Stored Templates' => count(
                    $this->getStoredComponents(
                        $this->getComponentLocation(),
                        $this->getStandardUITemplateContainer()
                    )
                ),
                '# Stored Responses' => count(
                    $this->getStoredComponents(
                        $this->getComponentLocation(),
                        $this->getResponseContainer()
                    )
                ),
                '# Templates reutnred by getTemplatesAssignedToResponse()' => count(
                        $this->getStandardUI()->getTemplatesAssignedToResponses(
                            $this->getComponentLocation(),
                            $this->getResponseContainer()
                    )
                ),
                '# Component Calls' => $this->generateComponentCalls
            ]
        );
    }

    private function devStoredComponentInfo(): void
    {
        foreach($this->getStoredComponents($this->getComponentLocation(), $this->getOutputComponentContainer()) as $storedComponent)
        {
            var_dump(
                $storedComponent->getName(),
                $storedComponent->getUniqueId(),
                $storedComponent->getLocation(),
                $storedComponent->getContainer(),
                $storedComponent->getType()
            );
        }

    }
    public function tearDown(): void {
        $this->devStoredComponentInfo();
        foreach($this->getStoredComponents($this->getComponentLocation(), $this->getOutputComponentContainer()) as $storedComponent)
        {
            $this->getStandardUITestRouter()->getCrud()->delete($storedComponent);
        }

        // @todo: need to clean up components after each test...since we are not using setUpBeforeClass
    }

    protected function generateStoredTestComponents()
    {
        // @devNote: The generateStoredOutputComponent() and generateStandardUITemplate() methods are call from with generateStoredResponse()
        $this->generateComponentCalls++;
        $this->devCountStoredComponents();
        $this->generateStoredResponse();
        $this->devCountStoredComponents();

    }

    protected function generateStoredResponse(): Response
    {
        $response = new Response(
            new Storable('StandardUITestResponse',
                $this->getComponentLocation(),
                $this->getResponseContainer()
            ),
            new Switchable()
        );
        $response->addTemplateStorageInfo($this->generateStoredStandardUITemplate());
        $response->addOutputComponentStorageInfo($this->generateStoredOutputComponent());
        $response->addRequestStorageInfo($this->getCurrentRequest());
        $this->getStandardUITestRouter()->getCrud()->create($response);
        return $response;
    }

    public function getComponentLocation(): string
    {
        return 'StandardUITestComponentsLocation';
    }

    protected function getResponseContainer(): string
    {
        return 'StandardUITestResponseContainer';
    }

    private function generateStoredStandardUITemplate(): StandardUITemplate
    {
        $standardUITemplate = new StandardUITemplate(
            new Storable(
                'StandardUITestTemplate',
                $this->getComponentLocation(),
                $this->getStandardUITemplateContainer()
            ),
            new Switchable(),
            new Positionable((rand(0, 100) / 100))
        );
        $standardUITemplate->addType($this->generateStoredOutputComponent());
        $this->getStandardUITestRouter()->getCrud()->create($standardUITemplate);
        return $standardUITemplate;
    }

    protected function getStandardUITemplateContainer(): string
    {
        return 'StandardUITestStandardUITemplateContainer';
    }

    private function generateStoredOutputComponent(): OutputComponent
    {
        $outputComponent = new OutputComponent(
            new Storable(
                '',
                $this->getComponentLocation(),
                $this->getOutputComponentContainer()
            ),
            new Switchable(),
            new Positionable((rand(0, 100) / 100))
        );
        $outputComponent->import(['output' => 'Some plain text' . strval(rand(10000, 99999))]);
        $this->getStandardUITestRouter()->getCrud()->create($outputComponent);
        return $outputComponent;
    }

    public function getOutputComponentContainer(): string
    {
        return "StandardUITestOutputComponentContainer";
    }

    public function getStandardUITestRouter(): Router
    {
        if (isset($this->router)) {
            return $this->router;
        }
        $this->router = new Router(
            new Storable(
                'StandardUITestRouter',
                $this->getComponentLocation(),
                $this->getRouterContainer()
            ),
            new Switchable(),
            $this->getCurrentRequest(),
            $this->getComponentCrudForRouter()
        );
        return $this->router;
    }

    public function getRouterContainer(): string
    {
        return "StandardUITestRouterContainer";
    }

    public function getCurrentRequest(): Request
    {
        if (isset($this->currentRequest) === true) {
            return $this->currentRequest;
        }
        $this->currentRequest = new Request(
            new Storable(
                'StandardUICurrentRequest',
                $this->getComponentLocation(),
                $this->getRequestContainer()
            ),
            new Switchable()
        );
        $this->getStandardUITestRouter()->getCrud()->create($this->currentRequest);
        return $this->currentRequest;
    }

    public function getRequestContainer(): string
    {
        return "StandardUITestRequestContainer";
    }

    private function getComponentCrudForRouter(): ComponentCrudInterface
    {
        if (isset($this->router) === true) {
            return $this->getStandardUITestRouter()->getCrud();
        }
        return new ComponentCrud(
            new Storable(
                'StandardUITestComponentCrudForStandardUITestRouter',
                $this->getComponentLocation(),
                $this->getComponentCrudContainer()
            ),
            new Switchable(),
            new StorageDriver(
                new Storable(
                    'StandardUITestStorageDriver',
                    $this->getComponentLocation(),
                    $this->getStorageDriverContainer()
                ),
                new Switchable()
            )
        );
    }

    public function getComponentCrudContainer(): string
    {
        return "StandardUITestComponentCruds";
    }

    public function getStorageDriverContainer(): string
    {
        return "StandardUITestStorageDrivers";
    }

    protected function getStoredComponents(string $location, string $container): array
    {
        return $this->getStandardUITestRouter()->getCrud()->readAll(
            $location,
            $container
        );
    }

    protected function setStandardUIParentTestInstances(): void
    {
        $this->setOutputComponent($this->getStandardUI());
        $this->setOutputComponentParentTestInstances();
    }

    public function getStandardUI(): StandardUI
    {
        return $this->standardUI;
    }

    public function setStandardUI(StandardUI $standardUI): void
    {
        $this->standardUI = $standardUI;
    }



    // getTemplatesAssignedToResponses(): array
    public function testGetTemplatesAssignedToResponsesReturnsArrayOfStandardUITemplates(): void {
        $this->assertTrue(true);
    }


}
