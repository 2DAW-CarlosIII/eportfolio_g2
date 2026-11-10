<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('eportfolio:centro', function () {
    $this->info(config('eportfolio.centro'));
})->purpose('Muestra el nombre del centro');
