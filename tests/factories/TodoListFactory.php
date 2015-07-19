<?php

$factory->define(todoparrot\TodoList::class, function (Faker\Generator $faker) {
  return [
      'name' => $faker->name,
      'desctiption' => $faker->sentence(4),
      'complete' => true
  ];
});
