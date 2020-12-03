<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class KhatsayrStatus
 *
 * @property $id
 * @property $nom
 * @property $rang
 * @property $class
 * @property $order
 *
 * @property Khatsayrho[] $khatsayrho
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class KhatsayrStatus extends Model
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
    public function khatsayrho()
    {
        return $this->hasMany('App\Models\Khatsayrho', 'khatsayr_status_id', 'id');
    }


}
