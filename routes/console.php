<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


//testing
Artisan::command('create-view {name} {directory}', function ($name = null, $directory = '') {
    
    if (is_null($name))
        return;
    echo $name.'.blade.php'.'::directory is'.$directory;
})->purpose('create view');
