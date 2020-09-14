<?php

declare(strict_types=1);


beforeEach(function() {
    echo 'beforeEach' . PHP_EOL;
});

beforeAll(function() {
    echo 'beforeAll' . PHP_EOL;
});

afterEach(function() {
    echo 'afterEach' . PHP_EOL;
});

afterAll(function() {
    echo 'afterAll' . PHP_EOL;
});

test('Runs basic test', function() {
    echo 'test' . PHP_EOL;
    expect(true)->toBeTrue();
});

