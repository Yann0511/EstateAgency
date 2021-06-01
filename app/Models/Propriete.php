<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Propriete extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image', 'propriete_id');
    }

    public function offre()
    {
        return DB::table('offres')->where('$this->id', 'propriete_id')->and('etat', 1)->count('*');
    }

}
