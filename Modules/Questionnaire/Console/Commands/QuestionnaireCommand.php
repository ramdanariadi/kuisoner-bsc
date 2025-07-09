<?php

namespace Modules\Questionnaire\Console\Commands;

use Illuminate\Console\Command;

class QuestionnaireCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:QuestionnaireCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Questionnaire Command description';

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
