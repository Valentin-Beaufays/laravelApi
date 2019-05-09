<?php

namespace App\Models;

use App\Http\Resources\AccountResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Account;

class Recipe extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $date = ['deleted_at'];

    /**
     * @var string
     */
    protected $table = 'recipes';

    /**
     * @var array
     */
    protected $fillable =['title'];

    public function owner ()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
