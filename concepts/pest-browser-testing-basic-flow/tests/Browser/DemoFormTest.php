<?php

it('submits a simple form', function () {
    visit('/demo-form')
        ->type('name', 'David')
        ->press('Submit')
        ->assertSee('Form submitted');
});
