<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class setup
 * @package App\Models
 * @version July 29, 2018, 11:00 am UTC
 *
 * @method static setup find($id=null, $columns = array())
 * @method static setup|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string kode
 * @property string kriteria
 * @property integer nilai
 * @property string type
 * @property string keterangan
 */
class setup extends Model
{

    public $table = 'setups';
    


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
