<?php

namespace Tests\Feature;

beforeEach()->withoutMiddleware();

it('has home')
    ->get('/')
    ->assertSee('Laravel');
