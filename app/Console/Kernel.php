<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Components\Calendar\FetchCalendarEvents::class,
        \App\Console\Components\GitHub\FetchTotals::class,
        \App\Console\Components\GitHub\FetchTotalDetails::class,
        \App\Console\Components\Music\FetchCurrentTrack::class,
        \App\Console\Components\Packagist\FetchTotals::class,
        \App\Console\Components\Tasks\FetchTasks::class,
        \App\Console\Components\Twitter\ListenForMentions::class,
        \App\Console\Components\Twitter\ListenForQuotes::class,
        \App\Console\Components\Twitter\SendFakeTweet::class,
        UpdateDashboard::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('dashboard:fetch-github-total-details')->everyFiveMinutes();
    }
}
