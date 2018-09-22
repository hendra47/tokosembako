<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class absen
 * @package App\Models
 * @version July 29, 2018, 11:27 am UTC
 *
 * @method static absen find($id=null, $columns = array())
 * @method static absen|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property integer id_karyawan
 * @property date tanggal
 * @property integer shift
 */
class absen extends Model
{

    public $table = 'absen';
    

   protected $primaryKey = 'id_absen';

    public $fillable = [
        'id_karyawan',
        'tanggal',
        'shift',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_karyawan' => 'integer',
        'tanggal' => 'date',
        'shift' => 'integer',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_karyawan' => 'required',
        'tanggal' => 'required',
        'shift' => 'required',
        'status' => 'required'
    ];

    
}
