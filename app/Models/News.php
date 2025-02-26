<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;
    protected $table ='news';
    protected $fillable = [
        'id', 'title', 'author', 'category_id', 'status', 'image', 'description',
    ];
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
