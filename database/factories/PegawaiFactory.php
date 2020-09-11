<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\pegawai;
use Faker\Generator as Faker;

$factory->define(pegawai::class, function (Faker $faker) {
    return [
        'nama_pegawai'  => $faker->name,
        'jenis_kelamin' => $faker->randomElement(['Laki-Laki', 'Perempuan']),
        'email'         => $faker->unique()->safeEmail,  
        'alamat'        => $faker->secondaryAddress,
    ];
});
