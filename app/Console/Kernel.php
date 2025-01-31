<?php

namespace App\Console;

use App\Jobs\CheckInstitutionConfigurationsJob;
use App\Jobs\TenantsJob;
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
        //
    ];

    /**
     * Define the application's command schedule.
     *
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->job(new TenantsJob(CheckInstitutionConfigurationsJob::class))->cron('0 8 1 1 *');

        $schedule->command('horizon:snapshot')->everyFiveMinutes();

        $schedule->command('notifications:delete')->saturdays()->dailyAt('04:00');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
