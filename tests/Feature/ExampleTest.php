<?php

namespace Tests\Feature;

it('runs basic test')
    ->get('/')
    ->assertStatus(200);
