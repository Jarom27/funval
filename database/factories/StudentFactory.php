<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Recrutador;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student::class;
    
    public function definition(): array
    {
        return [
            "matricula" => $this->faker->numerify("ep#####"),
            "pais" => $this->faker->randomElement(["Mexico","Guatemala","Salvador","Honduras","Peru","Colombia"]),
            "user_id" => $this->faker->unique()->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40])
        ];
    }
}
