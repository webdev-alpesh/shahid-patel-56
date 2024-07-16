<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);

        $user=User::where('email','=','admin@example.com')->first();
        if(!isset($user)){
            User::create([
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('Admin@123'),
            ]);
            $user->assignRole($superAdminRole);
        }


    }
}
