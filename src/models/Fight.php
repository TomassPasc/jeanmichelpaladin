<?php declare(strict_types = 1);

class Fight {
    private $hero;
    private $vilain;

    function __construct(Personage $hero, Personage $vilain) {
        $this->hero = $hero;
        $this->vilain = $vilain;
    }

    public function isOver(): bool {
        // TODO
    }
}