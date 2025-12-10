<?php

use function Pest\Laravel\seed;

it('can create a post through Filament', function () {
    seed(\Database\Seeders\TestUserSeeder::class);

    // Login
    visit('/admin/login')
        ->type('email', 'admin@example.com')
        ->type('password', 'password')
        ->press('Log in')
        ->assertPathIs('/admin');

    // Go to PostResource create page
    visit('/admin/posts/create')
        ->type('title', 'My First Post')
        ->type('content', 'This is a test post created via browser test.')
        ->press('Create')
        ->assertSee('created successfully');
});
