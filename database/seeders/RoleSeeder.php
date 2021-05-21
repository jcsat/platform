<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Adminlte']);
        $role3 = Role::create(['name' => 'Creador']);
        $role4 = Role::create(['name' => 'Donador']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2, $role3, $role4]);

        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.categorias.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categorias.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categorias.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categorias.destroy'])->syncRoles([$role1, $role2]);
        
        Permission::create(['name' => 'admin.eventos.index'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.eventos.create'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.eventos.edit'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.eventos.destroy'])->syncRoles([$role1, $role2, $role3, $role4]);


        

    }
}
