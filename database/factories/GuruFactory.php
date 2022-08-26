<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $mapel = ['Pendidikan Agama'=>1,'PPKn'=>2,'Bahasa Indonesia'=>3,'Matematika'=>4,'IPA'=>5,'IPS'=>6,'Bahasa Inggris'=>7,'Seni dan Prakarya'=>8,'Pendidikan Jasmani'=>9,'Informatika'=>10,'Program Pengembangan Karakter'=>11];
        return [
            'nama' => $this->faker->userName(),
            'mapel' => $this->faker->randomKey($mapel)
        ];
    }
}
