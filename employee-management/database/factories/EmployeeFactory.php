<?php

namespace Database\Factories;

use App\Models\Employee;
use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->name(),
            'surname' => $this->faker->lastName()
        ];
    }
}
