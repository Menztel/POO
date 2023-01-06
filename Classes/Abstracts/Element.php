<?php

namespace App\Classes\Abstracts;

abstract class Element {
    const WATER = "water";
    const FIRE = "fire";
    const PLANT = "plant";

    public static function beats($element1, $element2) {
        //
        if ($element1 === self::WATER && $element2 === self::FIRE) {
          return true;
        }

        if ($element1 === self::FIRE && $element2 === self::PLANT) {
            return true;
        }

        if ($element1 === self::PLANT && $element2 === self::WATER) {
            return true;
        }

        return false;
    }
}

?>