<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function causeDetail()
    {
        return $this->belongsTo(CauseDetail::class, 'cause_detail_id');
    }
}
