<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $visible = ['nama'];
    protected $fillable = ['nama'];
    public $timestamps = true;

    public function guru()
    {
        $this->hasMany('App\Models\Guru', 'mapel_id');
    }
}
