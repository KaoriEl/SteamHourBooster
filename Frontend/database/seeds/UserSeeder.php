<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = json_decode('{
    "name": "admin",
    "email": "super_admin@dev.ru",
    "email_verified_at": "2023-12-03 02:04:27",
    "password": "$2a$12$pqHUAnBAs6cT0tccryIftOZdx2P4VrdSk0Q5OGkqLwqJV0oQrTNqq\n",
    "role": 1,
    "remember_token": null,
    "created_at": "2023-12-03 02:01:42",
    "updated_at": "2023-12-02 19:40:25"
  }', true);

        User::create($user);
    }
}
