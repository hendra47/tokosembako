<?php

namespace App\Repositories;

use App\Models\gaji;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class gajiRepository
 * @package App\Repositories
 * @version August 1, 2018, 2:03 pm UTC
 *
 * @method gaji findWithoutFail($id, $columns = ['*'])
 * @method gaji find($id, $columns = ['*'])
 * @method gaji first($columns = ['*'])
*/
class gajiRepository extends BaseRepository
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
        return gaji::class;
    }
}
