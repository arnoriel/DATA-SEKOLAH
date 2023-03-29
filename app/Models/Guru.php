<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $visible = ['nama', 'mapel_id', 'telepon'];
    protected $fillable = ['nama', 'mapel_id', 'telepon'];
    public $timestamps = true;

    public function Mapel()
    {
        return $this->belongsTo('App\Models\Mapel', 'mapel_id');
    }
}
