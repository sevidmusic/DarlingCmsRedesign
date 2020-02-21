<?php

namespace DarlingCms\abstractions\component\Template\UserInterface;

use DarlingCms\abstractions\component\SwitchableComponent;
use DarlingCms\interfaces\component\OutputComponent;
use DarlingCms\interfaces\component\Template\UserInterface\GenericUITemplate as GenericUITemplateInterface;
use DarlingCms\interfaces\primary\Positionable;
use DarlingCms\interfaces\primary\Storable;
use DarlingCms\interfaces\primary\Switchable;

abstract class GenericUITemplate extends SwitchableComponent implements GenericUITemplateInterface
{

    private $types = [];
    private $positionable;

    public function __construct(Storable $storable, Switchable $switchable, Positionable $positionable)
    {
        parent::__construct($storable, $switchable);
        $this->positionable = $positionable;
    }


    public function addType(OutputComponent $outputComponent): void
    {
        while (isset($this->types[strval($outputComponent->getPosition())]) === true) {
            $outputComponent->increasePosition();
        }
        $this->types[strval($outputComponent->getPosition())] = $outputComponent->getType();
    }

    public function removeType(string $type): void
    {
        foreach ($this->types as $position => $assignedType) {
            if ($assignedType === $type) {
                unset($this->types[$position]);
            }
        }
    }

    public function getTypes(): array
    {
        return ($this->getState() === false ? [] : $this->types);
    }

    public function increasePosition(): bool
    {
        return $this->positionable->increasePosition();
    }

    public function decreasePosition(): bool
    {
        return $this->positionable->decreasePosition();
    }

    public function getPosition(): float
    {
        return $this->positionable->getPosition();
    }

}
