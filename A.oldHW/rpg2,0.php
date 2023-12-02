<?php

abstract class Character {
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

abstract class Boss extends Character {
    public static function getBossHealth() {
        return 10;
    }

    public function getHealth() {
        return parent::getHealth() * self::getBossHealth();
    }
}


// Напиши код для рпг игры на ООП php используя наследие и полиморфизм. 
// Cоздай два абстрактных класса character и solderBoy с свойствами health, mana и power. 
// Еще создай класс boss с методом getHealth которое возвращает базовое здоровье умноженное на 10. 
// И сделать общую функцию которая проходится по всем объектам и выводит информацию о них