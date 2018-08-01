<?php

namespace App\Repositories;

use App\Models\absen;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class absenRepository
 * @package App\Repositories
 * @version July 29, 2018, 11:27 am UTC
 *
 * @method absen findWithoutFail($id, $columns = ['*'])
 * @method absen find($id, $columns = ['*'])
 * @method absen first($columns = ['*'])
*/
class absenRepository extends BaseRepository
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
        return absen::class;
    }
}
