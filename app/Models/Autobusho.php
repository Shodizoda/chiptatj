<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autobusho
 *
 * @property $id
 * @property $raqam
 * @property $model
 * @property $joi_nishast
 * @property $tashkilot_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Khatsayrho[] $khatsayrho
 * @property Tashkilot $tashkilot
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autobusho extends Model
{

    protected $table = 'autobusho';

    static $rules = [
		'raqam' => 'required',
		'model' => 'required',
		'joi_nishast' => 'required',
		'tashkilot_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['raqam','model','joi_nishast','tashkilot_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function khatsayrho()
    {
        return $this->hasMany('App\Models\Khatsayrho', 'autobus_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tashkilot()
    {
        return $this->hasOne('App\Models\Tashkilot', 'id', 'tashkilot_id');
    }


}
