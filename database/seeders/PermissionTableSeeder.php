<?php

namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'add-user',
           'role-create',
           'role-edit',
           'role-delete',
           'user-delete',
           'view-procurements',
           'add-procurements',
           'edit-procurements',
           'delete-procurements',
           'manage-employees',
           'view-user'
           
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}