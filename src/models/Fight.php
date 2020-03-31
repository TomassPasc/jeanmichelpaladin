<?php declare(strict_types = 1);

class Fight {
    private $hero;
    private $vilain;

    function __construct(Personage $hero, Personage $vilain) {
        $this->hero = $hero;
        $this->vilain = $vilain;
    }

    public function isOver(): bool {
        return ($this->hero->hp <= 0 || $this->vilain->hp <= 0 )
      
    }
}