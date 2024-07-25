<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PortImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_potofolio',
        'image',
    ];

    public function portofolio(): BelongsTo
    {
        return $this->belongsTo(Portofolio::class, 'id_portofolio');
    }
}