<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table = 'tag';
	protected $primaryKey = 'id_tag';


     protected $fillable = [
        'title' 
    ];
}
