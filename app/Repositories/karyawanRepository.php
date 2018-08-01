<?php

namespace App\Repositories;

use App\Models\karyawan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class karyawanRepository
 * @package App\Repositories
 * @version July 30, 2018, 1:28 pm UTC
 *
 * @method karyawan findWithoutFail($id, $columns = ['*'])
 * @method karyawan find($id, $columns = ['*'])
 * @method karyawan first($columns = ['*'])
*/
class karyawanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return karyawan::class;
    }
}
