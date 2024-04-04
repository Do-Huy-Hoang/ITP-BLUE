<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'per_id' => 60,
                'per_name' => 'category',
                'per_display_name' => 'category',
                'per_parent_id' => 0,
                'created_at' => '2024-03-26 07:14:01',
                'updated_at' => '2024-03-26 07:14:01',
            ),
            1 => 
            array (
                'per_id' => 61,
                'per_name' => 'List',
                'per_display_name' => 'List',
                'per_parent_id' => 60,
                'created_at' => '2024-03-26 07:14:01',
                'updated_at' => '2024-03-26 07:14:01',
            ),
            2 => 
            array (
                'per_id' => 62,
                'per_name' => 'Add',
                'per_display_name' => 'Add',
                'per_parent_id' => 60,
                'created_at' => '2024-03-26 07:14:01',
                'updated_at' => '2024-03-26 07:14:01',
            ),
            3 => 
            array (
                'per_id' => 63,
                'per_name' => 'Edit',
                'per_display_name' => 'Edit',
                'per_parent_id' => 60,
                'created_at' => '2024-03-26 07:14:01',
                'updated_at' => '2024-03-26 07:14:01',
            ),
            4 => 
            array (
                'per_id' => 64,
                'per_name' => 'Delete',
                'per_display_name' => 'Delete',
                'per_parent_id' => 60,
                'created_at' => '2024-03-26 07:14:01',
                'updated_at' => '2024-03-26 07:14:01',
            ),
            5 => 
            array (
                'per_id' => 65,
                'per_name' => 'products',
                'per_display_name' => 'products',
                'per_parent_id' => 0,
                'created_at' => '2024-03-26 07:22:30',
                'updated_at' => '2024-03-26 07:22:30',
            ),
            6 => 
            array (
                'per_id' => 66,
                'per_name' => 'List',
                'per_display_name' => 'List',
                'per_parent_id' => 65,
                'created_at' => '2024-03-26 07:22:30',
                'updated_at' => '2024-03-26 07:22:30',
            ),
            7 => 
            array (
                'per_id' => 67,
                'per_name' => 'Add',
                'per_display_name' => 'Add',
                'per_parent_id' => 65,
                'created_at' => '2024-03-26 07:22:30',
                'updated_at' => '2024-03-26 07:22:30',
            ),
            8 => 
            array (
                'per_id' => 68,
                'per_name' => 'Edit',
                'per_display_name' => 'Edit',
                'per_parent_id' => 65,
                'created_at' => '2024-03-26 07:22:30',
                'updated_at' => '2024-03-26 07:22:30',
            ),
            9 => 
            array (
                'per_id' => 69,
                'per_name' => 'Delete',
                'per_display_name' => 'Delete',
                'per_parent_id' => 65,
                'created_at' => '2024-03-26 07:22:30',
                'updated_at' => '2024-03-26 07:22:30',
            ),
            10 => 
            array (
                'per_id' => 70,
                'per_name' => 'user',
                'per_display_name' => 'user',
                'per_parent_id' => 0,
                'created_at' => '2024-03-26 07:26:02',
                'updated_at' => '2024-03-26 07:26:02',
            ),
            11 => 
            array (
                'per_id' => 71,
                'per_name' => 'List',
                'per_display_name' => 'List',
                'per_parent_id' => 70,
                'created_at' => '2024-03-26 07:26:02',
                'updated_at' => '2024-03-26 07:26:02',
            ),
            12 => 
            array (
                'per_id' => 72,
                'per_name' => 'Add',
                'per_display_name' => 'Add',
                'per_parent_id' => 70,
                'created_at' => '2024-03-26 07:26:02',
                'updated_at' => '2024-03-26 07:26:02',
            ),
            13 => 
            array (
                'per_id' => 73,
                'per_name' => 'Edit',
                'per_display_name' => 'Edit',
                'per_parent_id' => 70,
                'created_at' => '2024-03-26 07:26:02',
                'updated_at' => '2024-03-26 07:26:02',
            ),
            14 => 
            array (
                'per_id' => 74,
                'per_name' => 'Delete',
                'per_display_name' => 'Delete',
                'per_parent_id' => 70,
                'created_at' => '2024-03-26 07:26:02',
                'updated_at' => '2024-03-26 07:26:02',
            ),
            15 => 
            array (
                'per_id' => 75,
                'per_name' => 'permission',
                'per_display_name' => 'permission',
                'per_parent_id' => 0,
                'created_at' => '2024-03-26 07:47:37',
                'updated_at' => '2024-03-26 07:47:37',
            ),
            16 => 
            array (
                'per_id' => 76,
                'per_name' => 'List',
                'per_display_name' => 'List',
                'per_parent_id' => 75,
                'created_at' => '2024-03-26 07:47:37',
                'updated_at' => '2024-03-26 07:47:37',
            ),
            17 => 
            array (
                'per_id' => 77,
                'per_name' => 'Add',
                'per_display_name' => 'Add',
                'per_parent_id' => 75,
                'created_at' => '2024-03-26 07:47:37',
                'updated_at' => '2024-03-26 07:47:37',
            ),
            18 => 
            array (
                'per_id' => 78,
                'per_name' => 'Edit',
                'per_display_name' => 'Edit',
                'per_parent_id' => 75,
                'created_at' => '2024-03-26 07:47:37',
                'updated_at' => '2024-03-26 07:47:37',
            ),
            19 => 
            array (
                'per_id' => 79,
                'per_name' => 'Delete',
                'per_display_name' => 'Delete',
                'per_parent_id' => 75,
                'created_at' => '2024-03-26 07:47:37',
                'updated_at' => '2024-03-26 07:47:37',
            ),
            20 => 
            array (
                'per_id' => 80,
                'per_name' => 'permission',
                'per_display_name' => 'permission',
                'per_parent_id' => 0,
                'created_at' => '2024-03-26 07:47:52',
                'updated_at' => '2024-03-26 07:47:52',
            ),
            21 => 
            array (
                'per_id' => 81,
                'per_name' => 'List',
                'per_display_name' => 'List',
                'per_parent_id' => 80,
                'created_at' => '2024-03-26 07:47:52',
                'updated_at' => '2024-03-26 07:47:52',
            ),
            22 => 
            array (
                'per_id' => 82,
                'per_name' => 'Add',
                'per_display_name' => 'Add',
                'per_parent_id' => 80,
                'created_at' => '2024-03-26 07:47:52',
                'updated_at' => '2024-03-26 07:47:52',
            ),
            23 => 
            array (
                'per_id' => 83,
                'per_name' => 'Edit',
                'per_display_name' => 'Edit',
                'per_parent_id' => 80,
                'created_at' => '2024-03-26 07:47:52',
                'updated_at' => '2024-03-26 07:47:52',
            ),
            24 => 
            array (
                'per_id' => 84,
                'per_name' => 'Delete',
                'per_display_name' => 'Delete',
                'per_parent_id' => 80,
                'created_at' => '2024-03-26 07:47:52',
                'updated_at' => '2024-03-26 07:47:52',
            ),
            25 => 
            array (
                'per_id' => 85,
                'per_name' => 'products',
                'per_display_name' => 'products',
                'per_parent_id' => 0,
                'created_at' => '2024-03-26 07:48:24',
                'updated_at' => '2024-03-26 07:48:24',
            ),
            26 => 
            array (
                'per_id' => 86,
                'per_name' => 'List',
                'per_display_name' => 'List',
                'per_parent_id' => 85,
                'created_at' => '2024-03-26 07:48:24',
                'updated_at' => '2024-03-26 07:48:24',
            ),
            27 => 
            array (
                'per_id' => 87,
                'per_name' => 'Add',
                'per_display_name' => 'Add',
                'per_parent_id' => 85,
                'created_at' => '2024-03-26 07:48:24',
                'updated_at' => '2024-03-26 07:48:24',
            ),
            28 => 
            array (
                'per_id' => 88,
                'per_name' => 'Edit',
                'per_display_name' => 'Edit',
                'per_parent_id' => 85,
                'created_at' => '2024-03-26 07:48:24',
                'updated_at' => '2024-03-26 07:48:24',
            ),
            29 => 
            array (
                'per_id' => 89,
                'per_name' => 'Delete',
                'per_display_name' => 'Delete',
                'per_parent_id' => 85,
                'created_at' => '2024-03-26 07:48:24',
                'updated_at' => '2024-03-26 07:48:24',
            ),
            30 => 
            array (
                'per_id' => 90,
                'per_name' => 'user',
                'per_display_name' => 'user',
                'per_parent_id' => 0,
                'created_at' => '2024-03-26 07:50:02',
                'updated_at' => '2024-03-26 07:50:02',
            ),
            31 => 
            array (
                'per_id' => 91,
                'per_name' => 'List',
                'per_display_name' => 'List',
                'per_parent_id' => 90,
                'created_at' => '2024-03-26 07:50:02',
                'updated_at' => '2024-03-26 07:50:02',
            ),
            32 => 
            array (
                'per_id' => 92,
                'per_name' => 'Add',
                'per_display_name' => 'Add',
                'per_parent_id' => 90,
                'created_at' => '2024-03-26 07:50:02',
                'updated_at' => '2024-03-26 07:50:02',
            ),
            33 => 
            array (
                'per_id' => 93,
                'per_name' => 'Edit',
                'per_display_name' => 'Edit',
                'per_parent_id' => 90,
                'created_at' => '2024-03-26 07:50:02',
                'updated_at' => '2024-03-26 07:50:02',
            ),
            34 => 
            array (
                'per_id' => 94,
                'per_name' => 'Delete',
                'per_display_name' => 'Delete',
                'per_parent_id' => 90,
                'created_at' => '2024-03-26 07:50:02',
                'updated_at' => '2024-03-26 07:50:02',
            ),
            35 => 
            array (
                'per_id' => 95,
                'per_name' => 'user',
                'per_display_name' => 'user',
                'per_parent_id' => 0,
                'created_at' => '2024-03-26 09:21:56',
                'updated_at' => '2024-03-26 09:21:56',
            ),
            36 => 
            array (
                'per_id' => 96,
                'per_name' => 'List',
                'per_display_name' => 'List',
                'per_parent_id' => 95,
                'created_at' => '2024-03-26 09:21:56',
                'updated_at' => '2024-03-26 09:21:56',
            ),
            37 => 
            array (
                'per_id' => 97,
                'per_name' => 'Add',
                'per_display_name' => 'Add',
                'per_parent_id' => 95,
                'created_at' => '2024-03-26 09:21:56',
                'updated_at' => '2024-03-26 09:21:56',
            ),
            38 => 
            array (
                'per_id' => 98,
                'per_name' => 'Edit',
                'per_display_name' => 'Edit',
                'per_parent_id' => 95,
                'created_at' => '2024-03-26 09:21:56',
                'updated_at' => '2024-03-26 09:21:56',
            ),
            39 => 
            array (
                'per_id' => 99,
                'per_name' => 'Delete',
                'per_display_name' => 'Delete',
                'per_parent_id' => 95,
                'created_at' => '2024-03-26 09:21:56',
                'updated_at' => '2024-03-26 09:21:56',
            ),
        ));
        
        
    }
}