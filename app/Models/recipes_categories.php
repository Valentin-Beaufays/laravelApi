<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class recipes_categories extends Model
{
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['recipe_id', 'account_id'];
}
