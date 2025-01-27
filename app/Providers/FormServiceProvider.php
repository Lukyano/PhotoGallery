<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        /*
        Form::component('text', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('textarea', 'components.form.textarea', ['name', 'value' => null, 'attributes' => []]);
        Form::component('submit', 'components.form.submit', ['name', 'value' => 'submit', 'attributes' => []]);
        Form::component('hidden', 'components.form.hidden', ['name', 'value' => null, 'attributes' => []]);
        Form::component('file', 'components.form.file', ['name', 'attributes' => []]);
        */
    }
}
