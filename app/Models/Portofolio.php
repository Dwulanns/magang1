<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'portofolios';

    protected $fillable = [
        'id_client', // Foreign key referencing the clients table
        'category',
        'title',
        'description',
        'image',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id', 'id_client');
    }
}
