<?php

// app/Models/Faq.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(FaqCategory::class, 'category_id');
    }
}