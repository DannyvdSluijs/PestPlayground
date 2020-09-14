<?php

declare(strict_types=1);

// Doesnt fully work yet `only()` modifier is only limited to file scope. See https://github.com/pestphp/pest/issues/183
test('Runs another basic test')
    ->assertTrue(true)
    ->only();


// Doesnt work yet, see https://github.com/pestphp/pest/issues/184
//test('Runs another basic test')
//    ->assertTrue(true)
//    ->skip();
