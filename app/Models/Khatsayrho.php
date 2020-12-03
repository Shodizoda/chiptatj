<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Khatsayrho
 *
 * @property $id
 * @property $nom
 * @property $az_kujo
 * @property $ba_kujo
 * @property $masofa
 * @property $vaqti_raftan
 * @property $vaqti_rasidan
 * @property $vaqti_bargashtan
 * @property $autobus_id
 * @property $ronanda_id
 * @property $nozir_id
 * @property $khatsayr_status_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Autobusho $autobusho
 * @property Chiptaho[] $chiptaho
 * @property KhatsayrStatus $khatsayrStatus
 * @property Noziron $noziron
 * @property Ronandagon $ronandagon
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Khatsayrho extends Model
{

    protected $table='khatsayrho';

    static $rules = [
		'nom' => 'required',
		'az_kujo' => 'required',
		'ba_kujo' => 'required',
		'masofa' => 'required',
		'vaqti_raftan' => 'required',
		'vaqti_rasidan' => 'required',
		'vaqti_bargashtan' => 'required',
		'autobus_id' => 'required',
		'ronanda_id' => 'required',
		'nozir_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom','az_kujo','ba_kujo','masofa','vaqti_raftan','vaqti_rasidan','vaqti_bargashtan','autobus_id','ronanda_id','nozir_id','khatsayr_status_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function autobusho()
    {
        return $this->hasOne('App\Models\Autobusho', 'id', 'autobus_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chiptaho()
    {
        return $this->hasMany('App\Models\Chiptaho', 'khatsayr_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function khatsayrStatus()
    {
        return $this->hasOne('App\Models\KhatsayrStatus', 'id', 'khatsayr_status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function noziron()
    {
        return $this->hasOne('App\Models\Noziron', 'id', 'nozir_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ronandagon()
    {
        return $this->hasOne('App\Models\Ronandagon', 'id', 'ronanda_id');
    }


}
