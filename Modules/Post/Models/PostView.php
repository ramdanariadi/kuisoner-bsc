<?php

namespace Modules\Post\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PostView extends Model
{
    use SoftDeletes;
    protected $table = 'post_views';
    protected $fillable = ['post_id', 'ip_address'];
}
