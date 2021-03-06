<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PokemonAbility extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'pokemonAbilities';

    protected $fillable = ['ability', 'pokemon_id'];

    public function pokemon()
    {
        return $this->belongsTo('App\Pokemon');
    }
}
