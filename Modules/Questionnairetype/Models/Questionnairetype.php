<?php

namespace Modules\Questionnairetype\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questionnairetype extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'questionnairetypes';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Questionnairetype\database\factories\QuestionnairetypeFactory::new();
    }
}
