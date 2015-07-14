<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{  
    protected $table = 'todolists';

    protected $fillable = ['name', 'description', 'complete'];

    private $rules = [
      'name' => 'required',
      'description' => 'required'
    ];
}
