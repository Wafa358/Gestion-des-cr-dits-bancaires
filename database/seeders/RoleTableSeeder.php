<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'Admin2']);
        //Permission::create(['name' => 'manage_role']);
        $admin->givePermissionTo('role-list');
        $admin->givePermissionTo('role-create');
        $admin->givePermissionTo('role-edit');
        $admin->givePermissionTo('role-delete');
        $admin->givePermissionTo('manage_role');
        $admin->givePermissionTo('manage_role');
        $admin->givePermissionTo('manage_role');
    }
}
