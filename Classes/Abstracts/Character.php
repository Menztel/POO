<?php

namespace App\Classes\Abstracts;

abstract class Character
{
    public function __construct(
        private float $health = 29,
        private float $defense = 60,
        protected float $physicalDamages = 9,
        protected float $magicalDamages = 9,
    ) {
    }

    public function getHealth(): float
    {
        return $this->health;
    }
    
    public function getPhysicalDamages(): float
    {
        return $this->physicalDamages;
    }
    
    public function getMagicalDamages(): float
    {
        return $this->magicalDamages;
    }

    public function getDefense(): float
    {
        if ($this->defense > 100) return 1;

        return $this->defense / 100;
    }

    public function attack(Character $character): void
    {
        echo "{$this} attaque ".lcfirst($character).($this->weapon ? " avec ".lcfirst($this->weapon->getName()) : " à mains nues").PHP_EOL;
        $character->takesDamages($this->getPhysicalDamages(), $this->getMagicalDamages());
    }

    public function takesDamages(float $physicalDamages, float $magicalDamages): void
    {
        $damages = $physicalDamages + $magicalDamages;
        $damagesTaken = $damages - $damages * $this->getDefense();

        if ($damagesTaken > $this->health) {
            $this->health = 0;
        } else {
            $this->health -= $damagesTaken;
        }
    }

    public function isAlive(): bool
    {
        return $this->health > 0;
    }

    abstract public function __toString();
}
