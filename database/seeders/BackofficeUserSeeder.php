<?php

namespace Database\Seeders;

use App\Models\BackofficeUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BackofficeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $usersBackoffice = [
            [
                'email' => "melii294@gmail.com",  // Genera un email único y válido
                'name' => "Melissa Hermida",                  // Genera un nombre
                'pass' => Hash::make('Elite3173!'),                    // Hashea una contraseña
                'rol_id' => 1,   // Genera un rol_id aleatorio entre 1 y 5
                'avatar' => "https://img.freepik.com/fotos-premium/novia-dibujos-animados-ramo-flores-mano-ai-generativa_1028873-12777.jpg", // Genera una URL de imagen aleatoria
                'activation_token' => Str::random(50),            // Genera un token aleatorio de 50 caracteres
                'created_at' => now(),                           // Establece la fecha de creación actual
                'updated_at' => now(),                           // Establece la fecha de actualización actual
            ],
            [
                'email' => "clferreri94@gmail.com",  // Genera un email único y válido
                'name' => "Cristian Ferreri",                  // Genera un nombre
                'pass' => Hash::make('Elite3173!'),                    // Hashea una contraseña
                'rol_id' => 1,   // Genera un rol_id aleatorio entre 1 y 5
                'avatar' => "https://media.licdn.com/dms/image/v2/C4E03AQHAFeLkleRM3Q/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1583126262357?e=2147483647&v=beta&t=uU8zmqTNIIuVo6XDGRhKRS_94xPxWjhXH_7GSc4DqjY", // Genera una URL de imagen aleatoria
                'activation_token' => Str::random(50),            // Genera un token aleatorio de 50 caracteres
                'created_at' => now(),                           // Establece la fecha de creación actual
                'updated_at' => now(),                           // Establece la fecha de actualización actual
            ],
            [
                'email' => "stella@gmail.com",  // Genera un email único y válido
                'name' => "Stella Fernandez",                  // Genera un nombre
                'pass' => Hash::make('St3ll4.123!'),                    // Hashea una contraseña
                'rol_id' => 1,   // Genera un rol_id aleatorio entre 1 y 5
                'avatar' => "https://img.freepik.com/vector-premium/dama-honor-o-hermana-novia-dibujado-mano-ilustracion_78188-125.jpg", // Genera una URL de imagen aleatoria
                'activation_token' => Str::random(50),            // Genera un token aleatorio de 50 caracteres
                'created_at' => now(),                           // Establece la fecha de creación actual
                'updated_at' => now(),                           // Establece la fecha de actualización actual
            ],

        ];

        foreach ($usersBackoffice as $key => $value) {
            BackofficeUser::create(
                $value
            );
        }


    }
}
