<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Schema;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Schema::disableForeignKeyConstraints();
       $existUser = User::where('email', 's.khanduja@disruptiveit.solutions')->first();       
       $role = Role::create(['name' => 'Super Admin']);
       $permissions = Permission::pluck('id','id')->all();   
       $role->syncPermissions($permissions);

       if (empty($existUser)) {
           $user = User::create([
                   'name' => 'Sonam',
                   'email' => 's.khanduja@disruptiveit.solutions',                  
                   'email_verified_at' => null,
                   'password' => bcrypt('123456'),
                   'created_at' => now(),
                   'updated_at' => now(),
             
           ]);             
           $user->assignRole(config('const.ROLES.SUPER_ADMIN'));     
           $user->assignRole([$role->name]);             
       }else {
          $existUser->assignRole(config('const.ROLES.SUPER_ADMIN'));
       }
    }
}
