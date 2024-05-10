<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use Faker\Factory;
use App\Models\OrangModel;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
	public function run()
	{
        $faker = Factory::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ];

            $this->db->table('orang')->insert($data);
        }
	}
}
