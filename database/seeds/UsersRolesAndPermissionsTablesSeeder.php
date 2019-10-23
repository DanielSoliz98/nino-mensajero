<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class UsersRolesAndPermissionsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        $personal = Role::create(['name' => 'personal']);
        $admin = Role::create(['name' => 'admin']);

        Permission::create(['name' => 'read_letters']);
        Permission::create(['name' => 'view_profiles']);
        Permission::create(['name' => 'add_personal']);
        Permission::create(['name' => 'update_profile']);

        $personal->givePermissionTo(['read_letters', 'update_profile']);
        $admin->givePermissionTo(['read_letters', 'view_profiles', 'add_personal']);

        $user = User::create([
            'full_name' => 'Personal',
            'email' => 'personal@gmail.com',
            'password' => bcrypt('personal123'),
        ]);
        $user->assignRole('personal');
        
        $admin = User::create([
            'full_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
        $admin->assignRole('admin');
    }
}
