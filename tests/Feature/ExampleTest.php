<?php

declare(strict_types=1);

test('runs basic test', function() {
    $response = $this->get('/');

    $response->assertStatus(200);
});

