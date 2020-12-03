<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ChiptaStatus
 *
 * @property $id
 * @property $nom
 * @property $rang
 * @property $class
 * @property $order
 *
 * @property Chiptaho[] $chiptaho
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ChiptaStatus extends Model
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
    protected $fillable = ['nom','rang','class','order'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chiptaho()
    {
        return $this->hasMany('App\Models\Chiptaho', 'chipta_status_id', 'id');
    }


}
