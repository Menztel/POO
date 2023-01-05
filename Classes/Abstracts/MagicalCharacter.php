<?php

namespace App\Classes\Abstracts;

use App\Traits\HasMagicalWeapon;

abstract class MagicalCharacter extends Character
{
    use HasMagicalWeapon;

    public function getMagicalDamages(): float
    {
        if ($this->hasWeapon()) {
            return $this->weapon->applyBonus($this->magicalDamages);
        }
        return parent::getMagicalDamages();
    }
}
