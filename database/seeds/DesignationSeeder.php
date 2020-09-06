<?php

use App\DesignationModel;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designation = [
            'name' => 'Super Admin',
            'status' => 'active',
        ];
        $designationIins = DesignationModel::create($designation);
    }
}
