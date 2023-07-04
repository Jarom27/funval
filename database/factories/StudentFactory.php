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
            
        ];
    }
}
