<?php

namespace App\Repositories;

use App\Models\setup;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class setupRepository
 * @package App\Repositories
 * @version July 29, 2018, 11:00 am UTC
 *
 * @method setup findWithoutFail($id, $columns = ['*'])
 * @method setup find($id, $columns = ['*'])
 * @method setup first($columns = ['*'])
*/
class setupRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return setup::class;
    }
}
