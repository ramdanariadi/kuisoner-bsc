<?php

namespace Modules\School\Console\Commands;

use Illuminate\Console\Command;

class SchoolCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SchoolCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'School Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
