<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table('musicas')]
#[Fillable(['nombre', 'duracion', 'genero', 'artista'])]

class Musica extends Model
{
    //
}
