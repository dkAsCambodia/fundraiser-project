<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class CauseDetail extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    protected $casts = [
        'suggested_amounts' => 'json',
    ];

    public function causeCate(): HasOne
    {
        return $this->hasOne(CauseCategory::class, 'id', 'cause_category_id');
    }

    public function title(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ['slug' => $this->generateSlug($value), 'title' => $value]
        );
    }

    public function generateSlug($tittle)
    {
        $slug = Str::slug($tittle);
        if (empty($this->id) && static::whereSlug($slug)->exists()) {
            $max = static::whereTittle($tittle)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }

            return "{$slug}-2";
        }

        return $slug;
    }
    public function sksuggestedAmountsill(): Attribute
    {
        return new Attribute(
            get: fn ($value) => json_decode($value),
        );
    }

}
