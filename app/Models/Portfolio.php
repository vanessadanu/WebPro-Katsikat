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
        'title',
        'service_id',
        'description',
        'image_file_url',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
