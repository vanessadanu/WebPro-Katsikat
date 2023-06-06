<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'image_file_url',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
