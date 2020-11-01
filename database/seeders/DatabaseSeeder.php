<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        // $this->call(UsersTableSeeder::class);
        \Illuminate\Database\Eloquent\Model::unguard();
        $this->call(AdminUserSeeder::class);
        $this->call(ContactosTableSeeder::class);
        $this->call(InformeMantenimientoPreventivoSeeder::class);

        \Illuminate\Database\Eloquent\Model::reguard();
    }
}
