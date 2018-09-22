<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class karyawan
 * @package App\Models
 * @version July 30, 2018, 1:28 pm UTC
 *
 * @method static karyawan find($id=null, $columns = array())
 * @method static karyawan|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string nama
 * @property string jk
 * @property string alamat
 */
class karyawan extends Model
{

    public $table = 'karyawan';
    
   protected $primaryKey = 'id_karyawan';

    public $fillable = [
        'nama',
        'jk',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'jk' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'jk' => 'required',
        'alamat' => 'required'
    ];

    
}
