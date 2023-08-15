<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Value extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];

    protected $fillable = ['name', 'attribute_id'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
