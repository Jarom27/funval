<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Recrutador;
use App\Models\Curso;
use App\Models\Student;
use App\Models\Servicio;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory(40)->create();
        Curso::factory(3)->create();
        Recrutador::factory(10)->create();
        Servicio::factory(5)->create();
        Student::factory()->count(40)->for(Curso::find(1))->for(Recrutador::find(2))->hasAttached(Servicio::find(1),[
                    "nivel" => rand(1,5),
                    "cantidad" => rand(1,15),
        ])->create();
    }
}
