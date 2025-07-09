<?php

namespace Modules\Questionnairetype\Console\Commands;

use Illuminate\Console\Command;

class QuestionnairetypeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:QuestionnairetypeCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Questionnairetype Command description';

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
