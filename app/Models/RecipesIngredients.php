<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recipesIngredients extends Model
{
    protected $fillable = ['recipe_id', 'ingredient_id', 'quantity', 'unit'];

    public $timestamps = false;
}
