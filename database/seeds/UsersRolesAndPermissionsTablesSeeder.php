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
        
        $admin = User::create([
            'full_name' => 'Admin',
            'email' => 'admin2019@gmail.com',
            'password' => bcrypt('@dm1n2019'),
        ]);
        $admin->assignRole('admin');
    }
}
