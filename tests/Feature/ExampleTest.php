<?php

declare(strict_types=1);

it('run basic test', function() {
    $response = $this->get('/');

    expect($response->getStatusCode())->toBe(200);
});
