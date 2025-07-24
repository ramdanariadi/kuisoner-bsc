<?php

namespace Modules\School\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'schools';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\School\database\factories\SchoolFactory::new();
    }
}
