<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use App\Console\Commands\tkun;
use Illuminate\Support\Facades\Schedule;
>>>>>>> 5288082 (Save)

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
<<<<<<< HEAD
=======

Schedule::command('demo:tkun')->dailyAt('18:27');



 
>>>>>>> 5288082 (Save)
