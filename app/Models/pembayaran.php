<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
	protected $table='pembayaran';
	protected $fillable=['periode','total_pembayaran'];    
}
