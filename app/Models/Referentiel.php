<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Referentiel extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'valideted', 'horaire', 'type_id'];

    public function formations() {
        return $this->belongsToMany(Formation::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
