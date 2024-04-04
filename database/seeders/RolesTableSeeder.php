<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'rol_id' => 1,
                'rol_name' => 'Admin',
                'rol_display_name' => 'System management',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'rol_id' => 2,
                'rol_name' => 'Warehouse staff',
                'rol_display_name' => 'Product and product type management',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'rol_id' => 3,
                'rol_name' => 'Salesman',
                'rol_display_name' => 'Manage company orders, advertisements and contact information',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'rol_id' => 4,
                'rol_name' => 'Customer',
                'rol_display_name' => 'Customer Information Management',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}