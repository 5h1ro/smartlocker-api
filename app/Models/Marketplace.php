<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Marketplace extends Model
{

    protected $table = 'marketplace';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama'
    ];
}
