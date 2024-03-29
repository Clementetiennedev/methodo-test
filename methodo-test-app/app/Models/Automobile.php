<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automobile extends Model
{
    use HasFactory;
    public function automobileMarque()
    {
        return $this->hasOne(Marque::class);
    }
    public function automobileModele()
    {
        return $this->hasOne(Model::class);
    }
}
