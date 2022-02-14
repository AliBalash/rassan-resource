<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'مدیر کل']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);

        $farshad = User::query()->create([
            'name' => 'فرشاد',
            'lastname' => 'صحبت لو',
            'mobile' => '09127424087',
            'email' => 'farshadkk2@gmail.com',
            'is_admin' => true,
            'password' => bcrypt(123123),
        ]);

        $farshad->assignRole($role->name);


        $omid = User::query()->create([
            'name' => 'امید',
            'lastname' => 'مردان',
            'mobile' => '09387026655',
            'email' => null,
            'is_admin' => true,
            'password' => bcrypt('09387026655'),
        ]);

        $omid->assignRole($role->name);

    }
}
