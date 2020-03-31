<?php declare(strict_types = 1);

class Personage {
    public $hp;
    public $name;

    function __construct(string $name, int $hp) {
        $this->hp = $hp;
        $this->name = $name;
    }

    public function getName(): string { return $this->name; }
    public function getHp(): int { return $this->hp; }

    public function hurt(int $value): Personage {
        $this->hp -= $value;

        return $this;
    }

    public function attack(Personage $enemy, int $value): Personage {
        return $enemy->hurt($value);
    }

    public function infos(): string {
        if($this->hp > 0){
            return "{$this->name} ({$this->hp} hp)";
        } else{
            return "{$this->name} is dead";

        }
    }
}
