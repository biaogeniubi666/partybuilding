<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB; 
use App\Models\Temporary;
use App\Models\Air;

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
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function(){
            $co2 = Temporary::pluck('co2')->avg();
            $voc = Temporary::pluck('voc')->avg();
            $tem = Temporary::pluck('tem')->avg();
            $hum = Temporary::pluck('hum')->avg();
            $pm25 = Temporary::pluck('pm25')->avg();
            $ch2o = Temporary::pluck('ch2o')->avg();

            $airs = [
            'co2' => $co2, 
            'voc' => $voc, 
            'tem' => $tem, 
            'hum' => $hum, 
            'pm25' => $pm25,
            'ch2o' => $ch2o
            ];

            $temporaries = [
                'voc' => randomFloat(220, 260),
                'tem' => randomFloat(20, 33),
                'hum' => randomFloat(45, 70),
                'pm25' => randomFloat(15, 60),
                'ch2o' => randomFloat(20, 60),
            ];

            // Air::cerate($airs);
            DB::table('airs')->insert($airs);
            // Air::insert($airs->toArray());
            
            DB::table('temporaries')->insert($temporaries);

        });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
