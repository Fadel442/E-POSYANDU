<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as ModelsRole;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_warga = ModelsRole::updateOrCreate(
            [
                'name' => 'warga',
            ],
            ['name' => 'warga']
        );
        $role_admin = ModelsRole::updateOrCreate(
            [
                'name' => 'admin',
            ],
            ['name' => 'admin']
        );
        $role_guest = ModelsRole::updateOrCreate(
            [
                'name' => 'guest',
            ],
            ['name' => 'guest']
        );

        $permission = Permission::updateOrCreate(
            [
                'name' => 'view_home',
            ],
            ['name' => 'view_home']
        );
        $permissionii = Permission::updateOrCreate(
            [
                'name' => 'view_warga_dashboard',
            ],
            ['name' => 'view_warga_dashboard']
        );
        $permissioniii = Permission::updateOrCreate(
            [
                'name' => 'view_admin_dashboard',
            ],
            ['name' => 'view_admin_dashboard']
        );
        $role_warga->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission);
        $role_guest->givePermissionTo($permission);

        $role_warga->givePermissionTo($permissionii);
        $role_admin->givePermissionTo($permissionii);

        $role_admin->givePermissionTo($permissioniii);

        //cari row berdasarkan id
        $user = User::find(1);
        $userii = User::find(2);

        $user->assignRole(['warga']);
        $userii->assignRole(['admin']);
        
    }
}
