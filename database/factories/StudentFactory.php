<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

/**
 *Esto es para hacer la creación y subir en masa de datos aleatorios usando la plantilla pro defecto que haremos ahora
 */
class StudentFactory extends Factory
{

    protected $model = Student::class;
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), // Genera un nom
            'email' => $this->faker->email(), // Genera un email aleatori
            'address' => $this->faker->sentence(10), // Genera una adreça aleatoria de limit 10 caracters
            'created_at' => now(), // Data i hora actuals
            'updated_at' => now(),
        ];
    }
}

