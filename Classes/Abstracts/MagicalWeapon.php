<?php

namespace App\Classes\Abstracts;

abstract class MagicalWeapon extends Weapon
{
    public function __construct(string $name, string $description, float $magicalDamagesRatio)
    {
        parent::__construct($name, $description, 0, $magicalDamagesRatio);
    }

    public function applyBonus(float $baseDamages): float
    {
        return $baseDamages * percentToMultiplier($this->magicalDamageRatio);
    }
}
