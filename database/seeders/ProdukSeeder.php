<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $produk = new Produk();

            $produk->kategori = $faker->randomElement(['kayu', 'bangunan']);
            $produk->nama = $faker->name;
            $produk->stok = $faker->randomNumber(2, false);
            $produk->harga = $faker->randomNumber(4, false);

            $produk->save();
        }
    }
}
