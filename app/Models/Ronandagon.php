<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ronandagon
 *
 * @property $id
 * @property $nomu_nasab
 * @property $soli_tavallud
 * @property $hujati_ronandagi
 * @property $raghami_telefon
 * @property $created_at
 * @property $updated_at
 *
 * @property Khatsayrho[] $khatsayrho
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ronandagon extends Model
{
        protected $table = 'ronandagon';

    static $rules = [
		'nomu_nasab' => 'required',
		'soli_tavallud' => 'required',
		'hujati_ronandagi' => 'required',
		'raghami_telefon' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomu_nasab','soli_tavallud','hujati_ronandagi','raghami_telefon'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function khatsayrho()
    {
        return $this->hasMany('App\Models\Khatsayrho', 'ronanda_id', 'id');
    }


}
