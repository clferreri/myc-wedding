<?php

namespace Database\Factories;

use App\Models\BackofficeUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BackofficeUser>
 */
class BackofficeUserFactory extends Factory
{
   
    protected $model = BackofficeUser::class;

    
    public function definition(): array
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),  // Genera un email único y válido
            'name' => $this->faker->name(),                  // Genera un nombre
            'pass' => Hash::make('Test123!'),                    // Hashea una contraseña
            'rol_id' => $this->faker->numberBetween(1, 5),   // Genera un rol_id aleatorio entre 1 y 5
            'avatar' => $this->faker->imageUrl(100, 100, 'people'), // Genera una URL de imagen aleatoria
            'activaton_token' => Str::random(50),            // Genera un token aleatorio de 50 caracteres
            'created_at' => now(),                           // Establece la fecha de creación actual
            'updated_at' => now(),                           // Establece la fecha de actualización actual
        ];
    }
}
