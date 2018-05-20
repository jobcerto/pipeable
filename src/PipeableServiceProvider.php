<?php

namespace Jobcerto\Pipeable;

use Illuminate\Support\ServiceProvider;

class PipeableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Jobcerto\Pipeable\Commands\MakePipeCommand::class,
            ]);
        }
    }
}
