<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class BlogModel extends Model
{
    protected $table = 'blogPost';
    protected $fillable =[
    	'blogPosting', 'status',
    ];
}
