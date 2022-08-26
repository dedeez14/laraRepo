<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $jurusan = [
            'RPL' => 'Rekayasa Perangkat Lunak',
            'TSM' => 'Teknik Sepeda Motor',
            'TKJ' => 'Teknologi Komputer Jaringan',
            'MM' => 'Multimedia'
        ];
        return [
            'nama' => $this->faker->userName(),
            'kelas' => $this->faker->randomElement(['A','B','C']),
            'jurusan' => $this->faker->randomKey($jurusan),
        ];
    }
}
