<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_lugar extends Model
{
    use HasFactory;

    protected $table = 'tipo_lugar';

    protected $fillable = [
        'nombre',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function lugar(){
        return $this->hasMany(lugar::class,
            'tipo_lugar_id', 'id');
    }

}
