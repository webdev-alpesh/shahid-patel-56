<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timeStamps=Carbon::now()->toDateTimeString();
        DB::table('roles')->insertOrIgnore([
            ['name' => 'super_admin','guard_name'=>'admin','created_at'=>$timeStamps,'updated_at'=>$timeStamps],
            ['name' => 'manager','guard_name'=>'manager','created_at'=>$timeStamps,'updated_at'=>$timeStamps],
            ['name' => 'developer','guard_name'=>'developer','created_at'=>$timeStamps,'updated_at'=>$timeStamps],
        ]);
    }
}
