<?php

namespace Jobcerto\Pipeable\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakePipeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jobcerto:pipe { name : The name of Pipe }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an pipe for the project';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $className = $this->argument('name');

        if ($className !== null) {
            File::put(app_path('Pipes/' . $className . '.php'),
                str_replace('#CLASSNAME#', $className, $this->getLayoutStub())
            );

            $this->info('Pipe created successfully');
        }
    }

    public function getLayoutStub()
    {
        return File::get(__DIR__ . '/stubs/pipe.stub');
    }
}
