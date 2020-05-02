<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\CLI\CLI;

class Usuario extends Seeder {
    public function run(){

        $faker = \Faker\Factory::create();

        $linha = 1;
        $total = 500;
        while ($linha <= $total) {
            $data = [
                'nome' => $faker->name,
                'email' => $faker->email,
                'endereco' => $faker->address,
                'senha' => $faker->password()
            ];
            $this->db->table('usuarios')->insert($data);
            CLI::showProgress($linha++, $total);
        }

    }
}