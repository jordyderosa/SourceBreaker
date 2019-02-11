<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Task;
use App\Observers\TaskEloquentObserver;

class TaskServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
            //observer for an Eloquent Task
            Task::observe(TaskEloquentObserver::class);
    }
}
