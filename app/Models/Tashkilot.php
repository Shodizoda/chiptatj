<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tashkilot
 *
 * @property $id
 * @property $nom
 * @property $created_at
 * @property $updated_at
 *
 * @property Autobusho[] $autobusho
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tashkilot extends Model
{

    static $rules = [
		'nom' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function autobusho()
    {
        return $this->hasMany('App\Models\Autobusho', 'tashkilot_id', 'id');
    }


}
