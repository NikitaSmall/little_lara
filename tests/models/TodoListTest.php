<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TodoListTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testShouldCreateNewRandomTodoWithCompletedTask()
    {
        $todo = factory(todoparrot\TodoList::class)->create();
        $this->assertTrue($todo->complete);
    }
}
