<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $fillable = [
        'id',
        'name',
        'image',
    ];

  public function portofolio()
    {
        return $this->hasMany(Portofolio::class, 'id', 'id_client');
    }
}
