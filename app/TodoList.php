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

    public function customUpdate($name, $description, $complete)
    {
        $this->name = $name;
        $this->description = $description;
        $this->complete = $complete;

        $this->save();
    }
}
