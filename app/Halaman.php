<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Halaman extends Model
{
    protected $table = 'halaman';
	protected $primaryKey = 'id';
      protected $fillable = [
        'judul', 'halaman', 'foto', 'path' 
    ];

}
