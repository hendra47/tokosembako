<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class harga
 * @package App\Models
 * @version July 29, 2018, 10:58 am UTC
 *
 * @method static harga find($id=null, $columns = array())
 * @method static harga|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string kode
 * @property string kriteria
 * @property integer nilai
 * @property string type
 * @property string keterangan
 */
class harga extends Model
{

    public $table = 'hargas';
    


    public $fillable = [
        'kode',
        'kriteria',
        'nilai',
        'type',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode' => 'string',
        'kriteria' => 'string',
        'nilai' => 'integer',
        'type' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode' => 'required',
        'kriteria' => 'required',
        'nilai' => 'required',
        'type' => 'required',
        'keterangan' => 'required'
    ];

    
}
