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
        // \App\Models\User::factory(10)->create();
        $this->call(CompanySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(WaistSeeder::class);
        $this->call(MarkSeeder::class);
        $this->call(DenominationSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        $this->call(CuestomerSeeder::class);
        $this->call(BoxSeeder::class);


    }
}
