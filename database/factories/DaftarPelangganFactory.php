<?php

namespace Database\Factories;

use App\Models\DaftarPelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class DaftarPelangganFactory extends Factory
{
    protected $model = DaftarPelanggan::class;

    public function definition()
    {
        return [
            'no_meter' => $this->faker->unique()->numerify('#######'),
            'nama_pelanggan' => $this->faker->name,
            'alamat' => $this->faker->address,
            'tgl_bayar' => $this->faker->date('Y-m-d'),
            'id_tarif' => $this->faker->randomElement(['rumah', 'kantor', 'industri']),
        ];
    }
}