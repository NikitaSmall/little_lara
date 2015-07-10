<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use todoparrot\TodoList;

class TodoListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();

      TodoList::truncate();

      foreach (range(1, 50) as $index) {
        TodoList::create([
          'name' => $faker->sentence(2),
          'description' => $faker->sentence(5),
          'complete' => false
          ]);
      }
    }
}
