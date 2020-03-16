<?php
require('./src/models/Fight.php');

// Comment with AAA infos :
// https://wiki.c2.com/?ArrangeActAssert
describe("#isOver", function() {
    it("return true if hero and vilain are alives", function() {
        $hero = new Personage('Jean-Michel', 100);
        $vilain = new Personage('Vilain', 100);
        $fight = new Fight($hero, $vilain);
        expect($fight->isOver())->toBe(false);
    });

    it("return false if hero is dead", function() {
        $hero = new Personage('Jean-Michel', 100);
        $vilain = new Personage('Vilain', 100);
        $fight = new Fight($hero, $vilain);
        $vilain->attack($hero, 100);
        expect($fight->isOver())->toBe(true);
    });

    it("return false if vilain is dead", function() {
      $hero = new Personage('Jean-Michel', 100);
      $vilain = new Personage('Vilain', 100);
      $fight = new Fight($hero, $vilain);
      $hero->attack($vilain, 100);
      expect($fight->isOver())->toBe(true);
    });
});