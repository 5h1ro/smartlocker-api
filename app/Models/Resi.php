<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resi extends Model
{

    use SoftDeletes;

    public function getStatusAttribute($value)
    {
        if ($value = 1) {
            $value = 'Done';
        } else {
            $value = 'Ongoing';
        }
        return $value;
    }

    public function getTanggalInputAttribute($value)
    {
        $time = Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('H:i');
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $value)->isoFormat('DD MMMM Y');
        return $time . ', ' . $date;
    }

    public function getTanggalScanAttribute($value)
    {
        $time = Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('H:i');
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $value)->isoFormat('DD MMMM Y');
        return $time . ', ' . $date;
    }

    protected $table = 'resi';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'no';

    protected $fillable = [
        'noresi',
        'kurir',
        'marketplace',
        'isi',
        'tanggal_input',
        'tanggal_scan',
        'status',
        'aktif'
    ];

    protected $hidden = [
        'no',
    ];
}
