<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $data = [
            [
                'first_name' => 'Leo Miguel',
                'middle_name' => 'Rebugio',
                'last_name' => 'Seda',
                'email' => 'leomiguelseda6@gmail.com',
                'password_hash' => $password,
                'type' => 'client',
                'account_status' => 1,
                'email_activated' => 1,
                'newsletter' => 1,
                'gender' => 'male',
                'profile_image' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'first_name' => 'Admin',
                'middle_name' => null,
                'last_name' => 'User',
                'email' => 'admin@gmail.com',
                'password_hash' => $password,
                'type' => 'manager',
                'account_status' => 1,
                'email_activated' => 1,
                'newsletter' => 0,
                'gender' => 'female',
                'profile_image' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
