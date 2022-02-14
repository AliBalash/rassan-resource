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
//         \App\Models\Role::factory(50)->create();
//         \App\Models\User::factory(50)->create();

        $this->call(PermissionSeeder::class);
        $this->call(NormalUserRoleSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(RequisitionUserSeeder::class);

    }
}
