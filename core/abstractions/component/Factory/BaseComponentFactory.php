<?php

namespace DarlingCms\abstractions\component\Factory;

use DarlingCms\interfaces\primary\Storable;
use DarlingCms\abstractions\component\Factory\PrimaryFactory;
use DarlingCms\interfaces\component\Factory\BaseComponentFactory as BaseComponentFactoryInterface;
use DarlingCms\interfaces\component\Web\App;
use DarlingCms\interfaces\component\Component;
use DarlingCms\classes\component\Component as CoreComponent;
use DarlingCms\interfaces\component\SwitchableComponent;
use DarlingCms\classes\component\SwitchableComponent as CoreSwitchableComponent;
use DarlingCms\interfaces\component\OutputComponent;
use DarlingCms\classes\component\OutputComponent as CoreOutputComponent;

abstract class BaseComponentFactory extends PrimaryFactory implements BaseComponentFactoryInterface
{

    public function __construct(App $app)
    {
        parent::__construct($app);
    }


    public function buildComponent(string $name, string $container): Component
    {
        return new CoreComponent(
            $this->buildStorable($name, $container)
        );
    }

    public function buildSwitchableComponent(string $name, string $container): SwitchableComponent
    {
        return new CoreSwitchableComponent(
            $this->buildStorable($name, $container),
            $this->buildSwitchable()
        );
    }

    public function buildOutputComponent(string $name, string $container, string $output, float $initialPosition): OutputComponent
    {
        $outputComponent = new CoreOutputComponent(
            $this->buildStorable($name, $container),
            $this->buildSwitchable(),
            $this->buildPositionable($initialPosition)
        );
        $outputComponent->import(['output' => $output]);
        return $outputComponent;
    }

}
