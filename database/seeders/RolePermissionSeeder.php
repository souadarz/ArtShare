<?php

namespace Database\Seeders;

use App\Models\permission;
use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin','artist','user','guest'];
        $permissions = ['view_dashboard', 'view_œuvres', 'create_œuvres','edit_œuvres',
        'delete_œuvres', 'view_categories', 'create_categories','edit_categories',
        'delete_categories', 'view_users', 'create_users', 'edit_users', 'delete_users'];

        foreach ($permissions as $permission) {
            permission::firstOrCreate(['name' => $permission]);
        }

        foreach ($roles as $role) {
            $roleInstance = role::firstOrCreate(['name' => $role]);

            if ($role === 'admin') {
                $permissions = Permission::all()->pluck('id');
                $roleInstance->permissions()->sync($permissions);

            } elseif ($role === 'artiste') {
                $permissions = Permission::whereIn('name', ['view_œuvres','create_œuvres','edit_œuvres','delete_œuvres'])->pluck('id');
                $roleInstance->permissions()->sync($permissions);

            } elseif ($role === 'user'){
                $permissions = Permission::whereIn('name', ['view_œuvres','view_tutoriels'])->pluck('id');
                $roleInstance->permissions()->sync($permissions);

            } elseif ($role === 'guest'){
                $permissions = Permission::whereIn('name', ['view_œuvres'])->pluck('id');
                $roleInstance->permissions()->sync($permissions);
            }
        }
    }
}
