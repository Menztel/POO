<?php

namespace App\Traits;

use App\Classes\Abstracts\PhysicalWeapon;

trait HasPhysicalWeapon
{
    use HasWeapon;

    protected ?PhysicalWeapon $weapon = null;

    public function takesWeapon(?PhysicalWeapon $weapon)
    {
        // echo "{$this} prend ".lcfirst($weapon).PHP_EOL;
        $this->weapon = $weapon;
    }
}
