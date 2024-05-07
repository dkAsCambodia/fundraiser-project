<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function userDetail(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function accountDetail(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'account_id');
    }
    public function causeDetail(): HasOne
    {
        return $this->hasOne(CauseDetail::class, 'id', 'cause_detail_id');
    }
}
