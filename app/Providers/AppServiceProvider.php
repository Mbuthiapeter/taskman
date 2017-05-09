<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use View;
use Auth;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     Blade::directive('age', function($expression){
        $data = json_decode($expression);
        dd($data);

        $year= $data[0];
        $month= $data[1];
        $day= $data[2];

        $age = Carbon::createFromDate($year, $month, $day)->$age;

        return "<?php echo $age; ?>";
     });  
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       //View::share('myName', 'Mbuthia');
       $age = Carbon::createFromDate(1989, 4, 4)->age;
       View::share('age',$age);
        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });

    }
}
