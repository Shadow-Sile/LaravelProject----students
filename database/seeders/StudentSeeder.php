<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use SebastianBergmann\FileIterator\Factory;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //medainte la plantilla del factory student, creamos 10 entradas, que son 10 estudiantes

    Student::factory(10)->create();
    


    }
}
