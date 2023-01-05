<?php

namespace App\Classes\Abstracts;

abstract class Weapon
{
    public function __construct(
        protected string $name,
        protected string $description,
        protected float $physicalDamageRatio,
        protected float $magicalDamageRatio,
    ) {
    }

    abstract public function applyBonus(float $baseDamages);

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function __toString() 
    {
        return "{$this->getName()}, ".lcfirst($this->getDescription()).PHP_EOL;
    }
}
