<?php

namespace App\Classes\Characters;

use App\Classes\Abstracts\PhysicalCharacter;

class Soldier extends PhysicalCharacter
{
    public function __construct()
    {
        parent::__construct(health: 32, defense: 60, physicalDamages: 8, magicalDamages: 0);
    }

    public function getPhysicalDamages(): float
    {
        $baseDamages = parent::getPhysicalDamages();

        if (chance(10)) {
            echo "{$this} inflige un coup critique !".PHP_EOL;
            return $baseDamages * 2;
        }
        return $baseDamages;
    }

    public function takesDamages(float $physicalDamages, float $magicalDamages): void
    {
        parent::takesDamages($physicalDamages, $magicalDamages * 0.8);
    }

    public function __toString()
    {
        return "Le Soldat";
    }
}
