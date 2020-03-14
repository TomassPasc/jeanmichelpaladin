<?php
require('./src/Test.php');

describe("#sayHello", function() {

    it("return 'hello'", function() {
        $test = new Test();
        expect($test->sayHello())->toBe("Hello");
    });
});