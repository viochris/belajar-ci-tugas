<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 15; $i++) {
            $data = [
                'nama_kategori' => $faker->randomElement(['Laptop', 'PC', 'Monitor', 'Mouse', 'Keyboard', 
                                                        'Tablet', 'Aksesoris']),
                'deskripsi'     => $faker->sentence(10),
                'created_at' => date("Y-m-d H:i:s"),
            ];
            //print_r($data);
            $this->db->table('product_category')->insert($data);
        }
    }
}
