<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artikel;
use Faker\Generator as Faker;

$factory->define(Artikel::class, function (Faker $faker) {
    return [
        'nama_penulis' => $faker->name,
        'judul_artikel' => $faker->sentence,
        'isi_artikel' => $faker->paragraph,
        'file' => 'image_assets/'. $faker->image($dir=storage_path('app/public/image_assets'), $width=400, $height=400, 'cats', false)
    ];
});
