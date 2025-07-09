<?php

namespace Modules\RespondentType\Console\Commands;

use Illuminate\Console\Command;

class RespondentTypeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:RespondentTypeCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'RespondentType Command description';

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
