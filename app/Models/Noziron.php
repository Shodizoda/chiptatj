<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Noziron
 *
 * @property $id
 * @property $nomu_nasab
 * @property $soli_tavallud
 * @property $raghami_telefon
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Khatsayrho[] $khatsayrho
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Noziron extends Model
{

    protected $table = 'noziron';

    static $rules = [
		'nomu_nasab' => 'required',
		'soli_tavallud' => 'required',
		'raghami_telefon' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomu_nasab','soli_tavallud','raghami_telefon','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function khatsayrho()
    {
        return $this->hasMany('App\Models\Khatsayrho', 'nozir_id', 'id');
    }


}
