<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use todoparrot\TodoList;

class TodoListTest extends TestCase
{
  use DatabaseMigrations;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testShouldCreateNewRandomTodoWithCompletedTask()
    {
        $todo = factory(TodoList::class)->create();
        $this->assertTrue($todo->complete);

        $this->assertTrue(count(TodoList::all()) == 1);
    }
}
