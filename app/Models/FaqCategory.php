<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'category_id');
    }

}