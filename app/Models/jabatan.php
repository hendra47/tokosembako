<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $table='jabatan';

   protected $primaryKey = 'id_jabatan';
    protected $fillable=['jabatan','keterangan'];
}
