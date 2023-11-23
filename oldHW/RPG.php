<?php

class Character {
    protected int $health;
    protected int $power;
    protected int $mana;
    

    public function __construct(int $health, int $power, int $mana,) {
        $this->health = $health;
        $this->power = $power;
        $this->mana = $mana;
    }

    public function getHealth() {
        return $this->health;
    }

    public function getPower() {
        return $this->power;
    }

    public function getMana() {
        return $this->mana;
    }

}

class Boss extends Character {
    public static function getBossHealth() {
        return 10;
    }

    public function getHealth() {
        return parent::getHealth() * self::getBossHealth();
    }
}

$Hero = new Character(100, 50, 25);
$Boss = new Boss(250, 100, 100);