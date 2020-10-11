<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Endereco;

class EnderecoTableSeeder extends Seeder
{
    public function run()
    {
    Endereco::truncate();

    $faker = \Faker\Factory::create();

    for ($i = 0; $i < 50; $i ++) {
        Endereco::create([
            'cep' => $faker->sentence,
            'logradouro' => $faker->sentence,
            'complemento' => $faker->sentence,
            'bairro' => $faker->sentence,
            'localidade' => $faker->sentence,
            'uf' => $faker->sentence,
            'ibge' => $faker->sentence,
            'gia' => $faker->sentence,
            'ddd' => $faker->sentence,
            'siafi' => $faker->sentence
        ]);
    }
    }
}
