<?php

namespace App\Classes\Abstracts;

abstract class PhysicalWeapon extends Weapon
{
    public function __construct(string $name, string $description, float $physicalDamagesRatio)
    {
        parent::__construct($name, $description, $physicalDamagesRatio, 0);
    }

    public function applyBonus(float $baseDamages): float
    {
        return $baseDamages * percentToMultiplier($this->physicalDamageRatio);
    }
}
