<?php

namespace App\Classes\Abstracts;

use App\Traits\HasPhysicalWeapon;

abstract class PhysicalCharacter extends Character
{
    use HasPhysicalWeapon;

    public function getPhysicalDamages(): float
    {
        if ($this->hasWeapon()) {
            return $this->weapon->applyBonus($this->physicalDamages);
        }
        return parent::getPhysicalDamages();
    }
}
