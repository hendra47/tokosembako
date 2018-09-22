<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class gaji
 * @package App\Models
 * @version August 1, 2018, 2:03 pm UTC
 *
 * @method static gaji find($id=null, $columns = array())
 * @method static gaji|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property integer id_karyawan
 * @property integer id_jabatan
 * @property integer gaji
 * @property string keterangan
 */
class gaji extends Model
{

    public $table = 'gaji';
    
   protected $primaryKey = 'id_gaji';


    public $fillable = [
        'id_karyawan',
        'id_jabatan',
        'gaji',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_karyawan' => 'integer',
        'id_jabatan' => 'integer',
        'gaji' => 'integer',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_karyawan' => 'required',
        'id_jabatan' => 'required',
        'gaji' => 'required',
        'keterangan' => 'required'
    ];

    
}
