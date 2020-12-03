<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chiptaho
 *
 * @property $id
 * @property $narkh
 * @property $joi_nishast
 * @property $nomu_nasab
 * @property $vagti_kharid
 * @property $raqami_shinosnoma
 * @property $khatsayr_id
 * @property $chipta_status_id
 * @property $created_at
 * @property $updated_at
 *
 * @property ChiptaStatus $chiptaStatus
 * @property Khatsayrho $khatsayrho
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Chiptaho extends Model
{
    protected $table = 'chiptaho';

    static $rules = [
		'narkh' => 'required',
		'joi_nishast' => 'required',
		'nomu_nasab' => 'required',
		'vagti_kharid' => 'required',
		'raqami_shinosnoma' => 'required',
		'khatsayr_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['narkh','joi_nishast','nomu_nasab','vagti_kharid','raqami_shinosnoma','khatsayr_id','chipta_status_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function chiptaStatus()
    {
        return $this->hasOne('App\Models\ChiptaStatus', 'id', 'chipta_status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function khatsayrho()
    {
        return $this->hasOne('App\Models\Khatsayrho', 'id', 'khatsayr_id');
    }


}
