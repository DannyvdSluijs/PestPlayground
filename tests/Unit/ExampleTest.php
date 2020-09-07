<?php

namespace Tests\Unit;

//beforeEach(function() {
//    /* This will run before each test in this file */
//});

//it('example', function() {
//        $this->assertTrue(true);
//    }
//);

it('example')
    ->assertTrue(true);

//test('example')
//    ->expect($this->value)->toBe(true);

it('Null value throws exception', function() {
    throw new \Exception('Error');
})->throws(\Throwable::class);


it('will do something', function(string $email) {
    $this->assertStringContainsString('@', $email);
})->with([
    'danny@infi.nl',
    'danny.van.der.sluijs@infi.nl'
]);
