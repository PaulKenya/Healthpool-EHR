<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  factory('App\roles', 10)->create();

        DB::table('roles')->insert([
            'role_name' => 'Occupational therapist',
            'role_description' => 'Occupational therapist',
            'department_id' => '1',

        ]);

        DB::table('roles')->insert([
            'role_name' => 'Radiographer',
            'role_description' => 'Occupational therapist',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Laboratory technician',
            'role_description' => 'Laboratory technician',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Medical Officer',
            'role_description' => 'Medical Officer',
            'department_id' => '1',
        ]);



        DB::table('roles')->insert([
            'role_name' => 'Attending Physician',
            'role_description' => 'Attending Physician',
            'department_id' => '1',
        ]);



        DB::table('roles')->insert([
            'role_name' => 'Medical Officer',
            'role_description' => 'Consultant',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Surgeon',
            'role_description' => 'Surgeon',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Nursing officer',
            'role_description' => 'Nursing officer',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Pharmacist',
            'role_description' => 'Pharmacist',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Accountant',
            'role_description' => 'Accountant',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Nutritionist',
            'role_description' => 'Nutritionist',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Health Information Officer',
            'role_description' => 'Health Information Officer',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Anaesthetist',
            'role_description' => 'Anaesthetist',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Physiotherapist',
            'role_description' => 'Physiotherapist',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Dentist',
            'role_description' => 'Dentist',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Pharmacist',
            'role_description' => 'Pharmacist',
            'department_id' => '1',
        ]);



        DB::table('roles')->insert([
            'role_name' => 'Pediatrician',
            'role_description' => 'Pediatrician',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Midwife',
            'role_description' => 'Midwife',
            'department_id' => '1',
        ]);



        DB::table('roles')->insert([
            'role_name' => 'Ophthalmologist',
            'role_description' => 'Ophthalmologist',
            'department_id' => '1',
        ]);


        DB::table('roles')->insert([
            'role_name' => 'Pathologist',
            'role_description' => 'Pathologist',
            'department_id' => '1',
        ]);



        DB::table('roles')->insert([
            'role_name' => 'Oncologist',
            'role_description' => 'Oncologist',
            'department_id' => '1',
        ]);


    }
}
