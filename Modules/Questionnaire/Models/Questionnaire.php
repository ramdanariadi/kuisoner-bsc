<?php

namespace Modules\Questionnaire\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questionnaire extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'questionnaires';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Questionnaire\database\factories\QuestionnaireFactory::new();
    }
}
