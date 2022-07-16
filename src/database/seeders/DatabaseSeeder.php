<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Rochi88\Admin\Database\Seeders\BusinessSeeder;
use Rochi88\Admin\Database\Seeders\PostSeeder;
use Rochi88\Admin\Database\Seeders\RolesAndPermissionsSeeder;
use Rochi88\Admin\Database\Seeders\SettingSeeder;
use Rochi88\Admin\Database\Seeders\CountriesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@abc.com',
            'password' => Hash::make('password')
        ]);
        $this->call([
            CountriesTableSeeder::class,
            RolesAndPermissionsSeeder::class,
            PostSeeder::class,
            SettingSeeder::class,
            BusinessSeeder::class
        ]);
    }
}
