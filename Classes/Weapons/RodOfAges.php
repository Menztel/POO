<?php

namespace App\Classes\Weapons;

use App\Classes\Abstracts\MagicalWeapon;

class RodOfAges extends MagicalWeapon
{
    public function __construct()
    {
        parent::__construct("Le baton des vieux", "Pas la branche la plus verte de l'arbre.", 27);
    }
}
