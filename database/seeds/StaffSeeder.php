<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff =
            [
                'first_name' => 'App',
                'last_name' => 'Admin',
                'emp_code' => 1,
                'designation_id' => 1,
                'gender' => 'male',
                'allow_appointment' => true,
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456'),
                'status' => 'active'
            ];


        $user = User::create($staff);
        // $role = Role::create(['name' => 'App Admin']);
        // $user->assignRole($role);
        // app admin permission setting


    }
}
