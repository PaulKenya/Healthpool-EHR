<?php

use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory('App\department', 5)->create();

        DB::table('departments')->insert([
            'department_name' => 'Registration',
        
        ]);
         DB::table('departments')->insert([
            'department_name' => 'Radiology',
        ]);
         DB::table('departments')->insert([
            'department_name' => 'Lab',
        
        ]);
         DB::table('departments')->insert([
            'department_name' => 'Triage',

        ]);
         DB::table('departments')->insert([
            'department_name' => 'Pharmacy',

        ]);
         DB::table('departments')->insert([
            'department_name' => 'Finance',

        ]);
         DB::table('departments')->insert([
            'department_name' => 'Public Health',

        ]);
//         DB::table('departments')->insert([
//            'department_name' => 'Diagnostics',
//
//        ]);
         DB::table('departments')->insert([
            'department_name' => 'Farewell Pallor',

        ]);
        
    }
}
