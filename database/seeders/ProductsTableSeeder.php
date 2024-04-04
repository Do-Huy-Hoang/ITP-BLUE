<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'pro_id' => 1,
            'pro_name' => 'Laptop AI ACER Swift Go 14 SFG14-72-73YV (Ultra 7-155H/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core Ultra 7-155H
Screen: 14 IPS (2240 x 1400)
RAM: 16GB Onboard LPDDR5x 6400MHz
Graphics: Onboard Intel Arc Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 65 Wh Integrated Battery
Weight: 1.3kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 1,
                'pro_img' => '',
                'created_at' => '2024-04-02 07:50:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'pro_id' => 2,
            'pro_name' => 'Laptop Acer Nitro 5 Tiger AN515-58-52SP (i5-12500H/RAM 8GB/RTX 3050/512GB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i5-12500H
Screen: 15.6 IPS (1920 x 1080),144Hz
RAM: 1 x 8GB DDR4 3200MHz
Graphics: RTX 3050 4GB GDDR6 / Intel UHD Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell 57 Wh
Weight: 2.5kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'pro_id' => 3,
            'pro_name' => 'MacBook Air M1 2020 13 inch (8GB/256GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M1
- Display: 13.3" (2560 x 1600) Retina
- RAM: 8GB / 256GB SSD
- Operating System: macOS
- Battery: 50 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'pro_id' => 4,
            'pro_name' => 'MacBook Pro M3 Pro 2023 16 inch (18GB/ 1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3 Pro
- Screen: 16" (3456 x 2234) Liquid Retina XDR
- RAM: 18GB / 1TB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'pro_id' => 5,
            'pro_name' => 'Apple MacBook Pro M3 14" (16GB/512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3
- Display: 14" (3024 x 1964) Liquid Retina XDR
- RAM: 16GB / 512GB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'pro_id' => 6,
            'pro_name' => 'MacBook Pro M3 Pro 2023 14 inch (18GB/ 512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3 Pro
- Screen: 14" (3024 x 1964) Liquid Retina XDR
- RAM: 18GB / 512GB SSD
- Operating System: macOS
- Battery: 72 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'pro_id' => 7,
            'pro_name' => 'Laptop MacBook Air 2023 15.3 inch (M2/8GB/512GB)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Display: 15.3" (2880 x 1864) Liquid Retina
- RAM: 8GB / 512GB SSD
- Operating System: macOS
- Battery: 53 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'pro_id' => 8,
            'pro_name' => 'MacBook Air 15.3 inch (M2/ 16GB/ 512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 15.3" (2880 x 1864) Liquid Retina
- RAM: 16GB / 512GB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'pro_id' => 9,
                'pro_name' => 'MacBook Air 15.3 inch M2/8C CPU/10C GPU/16GB/ 256GB SSD',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 15.3" (2880 x 1864) Liquid Retina
- RAM: 16GB / 256GB SSD
- Operating System: macOS
- Battery: 53 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'pro_id' => 10,
                'pro_name' => 'MacBook Air 15.3 inch M2/8C CPU/10C GPU/8GB/ 256GB SSD',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 15.3" (2880 x 1864) Liquid Retina
- RAM: 8GB / 256GB SSD
- Operating System: macOS
- Battery: 53 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'pro_id' => 11,
            'pro_name' => 'Laptop MacBook Air 13.6 inch (M2/ 8GB/ SSD 256GB)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 13.6" (2560 x 1664) Liquid Retina
- RAM: 8GB / 256GB SSD
- Operating System: macOS
- Battery: 53 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'pro_id' => 12,
            'pro_name' => 'MacBook Pro M3 Max 2023 14 inch (36GB/1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3 Max
- Screen: 14" (3024 x 1964) Liquid Retina XDR
- RAM: 36GB / 1TB SSD
- Operating System: macOS
- Battery: 72 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'pro_id' => 13,
            'pro_name' => 'MacBook Pro M2 Pro 2023 14 inch (16GB/1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Pro
- Screen: 14.2" (3024 x 1964) Liquid Retina XDR
- RAM: 16GB / 1TB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'pro_id' => 14,
            'pro_name' => 'Apple MacBook Pro M3 Pro 16" (64GB/1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3 Pro
- Screen: 16" (3456 x 2234) Liquid Retina XDR
- RAM: 64GB / 1TB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'pro_id' => 15,
            'pro_name' => 'MacBook Pro M3 Pro 2023 16 inch (18GB/ 512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3 Pro
- Screen: 16" (3456 x 2234) Liquid Retina XDR
- RAM: 18GB / 512GB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'pro_id' => 16,
            'pro_name' => 'MacBook Pro M2 Pro 2023 16 inch (16GB/512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Pro
- Screen: 16.2" (3456 x 2234) Liquid Retina XDR
- RAM: 16GB / 512GB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'pro_id' => 17,
            'pro_name' => 'Apple MacBook Air M2 15.3" (16GB/256GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 15.3" (2880 x 1864) Liquid Retina
- RAM: 16GB / 256GB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'pro_id' => 18,
            'pro_name' => 'MacBook Pro 14 inch 2023 M3 (16GB/1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3
- Screen: 14" (3024 x 1964) Liquid Retina XDR
- RAM: 16GB / 1TB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'pro_id' => 19,
            'pro_name' => 'MacBook Air M2 2022 13 inch (16GB/256GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 13.6" (2560 x 1664) Liquid Retina
- RAM: 16GB / 256GB SSD
- Operating System: macOS
- Battery: 53 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'pro_id' => 20,
            'pro_name' => 'MacBook Pro 14 inch (M2 Pro/ 16GB/ SSD 512GB)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 14.2" (3024 x 1964) Liquid Retina XDR
- RAM: 16GB / 512GB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'pro_id' => 21,
                'pro_name' => 'MacBook Pro 14.2 inch M2 MAX/12C CPU/30C GPU/32GB/1TB SSD',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Max
- Screen: 14.2" (3024 x 1964) Liquid Retina XDR
- RAM: 32GB / 1TB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'pro_id' => 22,
            'pro_name' => 'Laptop MacBook Pro 13 inch (M2/ 16GB/ SSD 512GB)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 13.3" (2560 x 1600) Retina
- RAM: 16GB / 512GB SSD
- Operating System: macOS
- Battery: 58 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'pro_id' => 23,
            'pro_name' => 'Laptop MacBook Air 13.6 inch (M2/ 8GB/ SSD 512GB)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 13.6" (2560 x 1664) Liquid Retina
- RAM: 8GB / 512GB SSD
- Operating System: macOS
- Battery: 53 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'pro_id' => 24,
            'pro_name' => 'MacBook Pro M2 Pro 2023 16 inch (16GB/1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Pro
- Screen: 16.2" (3456 x 2234) Liquid Retina XDR
- RAM: 16GB / 1TB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'pro_id' => 25,
            'pro_name' => 'MacBook Pro M2 Max 2023 16 inch (64GB/1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Max
- Screen: 16.2" (3456 x 2234) Liquid Retina XDR
- RAM: 64GB / 1TB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'pro_id' => 26,
            'pro_name' => 'MacBook Pro M2 Max 2023 16 inch (32GB/1TB SSD/12C CPU/38C GPU)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Max
- Screen: 16.2" (3456 x 2234) Liquid Retina XDR
- RAM: 32GB / 1TB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'pro_id' => 27,
            'pro_name' => 'MacBook Pro M3 Pro 2023 14 inch (18GB/1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3 Pro
- Screen: 14" (3024 x 1964) Liquid Retina XDR
- RAM: 18GB / 1TB SSD
- Operating System: macOS
- Battery: 72 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'pro_id' => 28,
            'pro_name' => 'MacBook Pro M3 2023 14 inch (8GB/512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3
- Screen: 14.2" (3024 x 1964)
- RAM: 8GB / 512GB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'pro_id' => 29,
            'pro_name' => 'MacBook Pro M3 Max 2023 16 inch (48GB/1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3 Max
- Screen: 16" (3456 x 2234) Liquid Retina XDR
- RAM: 48GB / 1TB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'pro_id' => 30,
            'pro_name' => 'MacBook Pro M3 Pro 2023 16 inch (36GB/512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3 Pro
- Screen: 16" (3456 x 2234) Liquid Retina XDR
- RAM: 36GB / 512GB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'pro_id' => 31,
            'pro_name' => 'MacBook Pro M3 Max 2023 16 inch (36GB/ 1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3 Max
- Screen: 16" (3456 x 2234) Liquid Retina XDR
- RAM: 36GB / 1TB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'pro_id' => 32,
            'pro_name' => 'Apple MacBook Pro M2 2022 13 inch (16GB/512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 13.3" (2560 x 1600) Retina
- RAM: 16GB / 512GB SSD
- Operating System: macOS
- Battery: 58 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'pro_id' => 33,
            'pro_name' => 'MacBook Pro M2 Pro 2023 14 inch (32GB/512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Pro
- Screen: 14.2" (3024 x 1964) Liquid Retina XDR
- RAM: 32GB / 512GB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'pro_id' => 34,
            'pro_name' => 'MacBook Pro M2 2022 13 inch (8GB/256GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 13.3" (2560 x 1600) Retina
- RAM: 8GB / 256GB SSD
- Operating System: macOS
- Battery: 53 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'pro_id' => 35,
            'pro_name' => 'MacBook Pro M2 2022 13 inch (8GB/512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 13.3" (2560 x 1600) Retina
- RAM: 8GB / 512GB SSD
- Operating System: macOS
- Battery: 53 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'pro_id' => 36,
            'pro_name' => 'Apple MacBook Air 2019 Core i5 13.3" (8GB/256GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Intel Core i5
- Screen: 13.3" (2560 x 1600) Retina
- RAM: 8GB / 256GB SSD
- Operating System: macOS
- Battery: 50 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'pro_id' => 37,
            'pro_name' => 'MacBook Pro M2 2022 13 inch (16GB/256GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 13.3" (2560 x 1600) Retina
- RAM: 16GB / 256GB SSD
- Operating System: macOS
- Battery: 58 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'pro_id' => 38,
            'pro_name' => 'Apple MacBook Air Apple M3 15.3" (16GB/256GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3
- Screen: 15.3" (2880 x 1864) IPS
- RAM: 16GB / 256GB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'pro_id' => 39,
            'pro_name' => 'Apple MacBook Pro Apple M3 14.2" (16GB/1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3
- Screen: 14.2" (3024 x 1964) Liquid Retina XDR
- RAM: 16GB / 1TB SSD
- Operating System: macOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'pro_id' => 40,
            'pro_name' => 'Apple MacBook Air Apple M3 15.3" (16GB/512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3
- Screen: 15.3" (2880 x 1864) IPS
- RAM: 16GB / 512GB SSD
- Operating System: macOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'pro_id' => 41,
            'pro_name' => 'Apple MacBook Air Apple M3 13.6" (16GB/256GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3
- Screen: 13.6" (2560 x 1664) IPS
- RAM: 16GB / 256GB SSD
- Operating System: macOS
- Battery: 30 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'pro_id' => 42,
            'pro_name' => 'Apple MacBook Air Apple M3 13.6" (16GB/512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3
- Screen: 13.6" (2560 x 1664) IPS
- RAM: 16GB / 512GB SSD
- Operating System: macOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'pro_id' => 43,
            'pro_name' => 'Apple MacBook Air Apple M3 13.6" (8GB/256GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M3
- Screen: 13.6" (2560 x 1664) IPS
- RAM: 8GB / 256GB SSD
- Operating System: macOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'pro_id' => 44,
            'pro_name' => 'MacBook Pro M2 Max 2023 14 inch (64GB/ 1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Max
- Screen: 14.2" (3024 x 1964) Liquid Retina XDR
- RAM: 64GB / 1TB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'pro_id' => 45,
                'pro_name' => 'iPhone 15 Pro Max 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Display: OLED Super Retina XDR
- Rear Camera: 48MP, 12MP
- Front Camera: 12MP
- CPU: Apple A17 Bionic
- Storage: 256GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'pro_id' => 46,
                'pro_name' => 'iPhone 15 Pro 128GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Display: OLED Super Retina XDR
- Rear Camera: 48MP, 12MP
- Front Camera: 12MP
- CPU: Apple A17 Bionic
- Memory: 128GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'pro_id' => 47,
                'pro_name' => 'iPhone 15 128GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Display: OLED Super Retina XDR
- Rear Camera: 48MP, 12MP
- Front Camera: 12MP
- CPU: Apple A16 Bionic
- Memory: 128GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'pro_id' => 48,
                'pro_name' => 'iPhone 15 Pro 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Display: OLED Super Retina XDR
- Rear Camera: 48MP, 12MP
- Front Camera: 12MP
- CPU: Apple A17 Bionic
- Memory: 256GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'pro_id' => 49,
                'pro_name' => 'iPhone 15 Pro Max 512GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Display: OLED Super Retina XDR
- Rear Camera: 48MP, 12MP
- Front Camera: 12MP
- CPU: Apple A17 Bionic
- Memory: 512GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'pro_id' => 50,
                'pro_name' => 'iPhone 15 Plus 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Display: OLED Super Retina XDR
- Rear Camera: 48MP, 12MP
- Front Camera: 12MP
- CPU: Apple A16 Bionic
- Memory: 256GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'pro_id' => 51,
                'pro_name' => 'iPhone 15 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: OLED Super Retina XDR
- Rear Camera: 48MP, 12MP
- Front Camera: 12MP
- CPU: Apple A16 Bionic
- Memory: 256GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'pro_id' => 52,
                'pro_name' => 'iPhone 15 Plus 128GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: OLED Super Retina XDR
- Rear Camera: 48MP, 12MP
- Front Camera: 12MP
- CPU: Apple A16 Bionic
- Memory: 128GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'pro_id' => 53,
                'pro_name' => 'iPhone 15 Pro Max 1TB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: OLED Super Retina XDR
- Rear Camera: 48MP, 12MP
- Front Camera: 12MP
- CPU: Apple A17 Bionic
- Memory: 1TB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'pro_id' => 54,
                'pro_name' => 'iPhone 15 Pro 512GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: OLED Super Retina XDR
- Rear Camera: 48MP, 12MP
- Front Camera: 12MP
- CPU: Apple A17 Bionic
- Memory: 512GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'pro_id' => 55,
                'pro_name' => 'iPhone 15 Pro 1TB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: OLED Super Retina XDR
- Rear Camera: 48MP, 12MP
- Front Camera: 12MP
- CPU: Apple A17 Bionic
- Memory: 1TB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'pro_id' => 56,
                'pro_name' => 'iPhone 15 512GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: OLED Super Retina XDR
- Rear Camera: 48MP, 12MP
- Front Camera: 12MP
- CPU: Apple A16 Bionic
- Memory: 512GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'pro_id' => 57,
                'pro_name' => 'iPhone 14 Pro 1TB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: LTPO Super Retina XDR OLED - 120Hz
- Rear Camera: 48MP, 2 x 12MP
- Front Camera: 12MP
- CPU: A16 Bionic
- Storage: 128GB
- RAM: 6GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'pro_id' => 58,
                'pro_name' => 'iPhone 14 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: Super Retina XDR OLED
- Rear Camera: 2 x 12MP
- Front Camera: 12MP
- CPU: Apple A15 Bionic
- Storage: 256GB
- RAM: 6GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'pro_id' => 59,
                'pro_name' => 'iPhone 14 Pro Max 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: LTPO Super Retina XDR OLED - 120Hz
- Rear Camera: 48MP, 2x 12MP
- Front Camera: 12MP
- CPU: A16 Bionic
- Storage: 256GB
- RAM: 6GB
- Operating System: iOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 20,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'pro_id' => 60,
                'pro_name' => 'iPad Pro 11 inch 2022 M2 Wifi 5G 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: 11" - Liquid Retina display - IPS
- Rear Camera: 12MP, 10MP
- Front Camera: 12MP
- CPU: Apple M2
- Storage: Cellular - 256GB
- RAM: 8GB
- Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'pro_id' => 61,
            'pro_name' => 'iPad Gen 9th (2021) 10.2inch Wifi 64GB (Silver)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: 10.2" - Retina display - IPS
- Rear Camera: 8MP
- Front Camera: 12MP
- CPU: A13 Bionic
- Storage: 64GB
- Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'pro_id' => 62,
            'pro_name' => 'iPad Gen 9th (2021) 10.2inch Wifi 64GB (Space Gray)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: 10.2" - Retina display - IPS
- Rear Camera: 8MP
- Front Camera: 12MP
- CPU: A13 Bionic
- Storage: 64GB
- Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'pro_id' => 63,
                'pro_name' => 'iPad Pro 12.9 inch 2022 M2 Wifi 128GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: 12.9" Liquid Retina XDR mini-LED LCD
- Rear Camera: 12MP, 10MP
- Front Camera: 12MP
- CPU: Apple M2
- Storage: 128GB
- RAM: 8GB
- Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'pro_id' => 64,
                'pro_name' => 'iPad Pro 11 inch 2022 M2 Wifi 5G 128GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: 11" Liquid Retina
- Rear Camera: 12MP
- Front Camera: 12MP
- Storage: Cellular - 128GB
- RAM: 8GB
- Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'pro_id' => 65,
                'pro_name' => 'iPad Pro 11 inch 2022 M2 Wifi 128GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: 11" Liquid Retina
- Rear Camera: 12MP, 10MP
- Front Camera: 12MP
- CPU: Apple M2
- Storage: 128GB
- RAM: 8GB
- Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'pro_id' => 66,
                'pro_name' => 'iPad Air 5 10.9 inch 2022 M1 Wifi 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: 10.9" - Liquid Retina display - IPS
- Rear Camera: 12MP
- Front Camera: 12MP
- CPU: Apple M1
- Storage: 256GB
- RAM: 8GB
- Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'pro_id' => 67,
                'pro_name' => 'iPad Gen 10 10.9 inch 2022 Wifi 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: 10.9" Retina IPS LCD
- Rear Camera: 12MP
- Front Camera: 12MP
- CPU: Apple A14 Bionic
- Storage: 256GB
- RAM: 4GB
- Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'pro_id' => 68,
                'pro_name' => 'iPad Gen 10 10.9 inch 2022 Wifi 64GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: 10.9" Retina IPS LCD
- Rear Camera: 12MP
- Front Camera: 12MP
- CPU: Apple A14 Bionic
- Storage: 64GB
- RAM: 4GB
- Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'pro_id' => 69,
                'pro_name' => 'iPad Air 5 10.9 inch 2022 M1 Wifi 64GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory Sealed
- Screen: 10.9" - Liquid Retina display - IPS
- Rear Camera: 12MP
- Front Camera: 12MP
- CPU: Apple M1
- Storage: 64GB
- RAM: 8GB
- Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'pro_id' => 70,
                'pro_name' => 'iPad Air 2019 10.5 inch Cellular Wifi - Chính hãng VNA',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Retina display 10.5"
- Apple A12 Bionic
- Internal memory: 64 GB
- RAM: 3 GB',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'pro_id' => 71,
                'pro_name' => 'iPad Pro 12.9 inch 2022 M2 Wifi 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 12.9" Liquid Retina XDR mini-LED LCD
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: 256GB
RAM: 8GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'pro_id' => 72,
                'pro_name' => 'iPad Pro 12.9 inch 2022 M2 Wifi 1TB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 12.9" Liquid Retina XDR mini-LED LCD
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: 1TB
RAM: 16GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'pro_id' => 73,
                'pro_name' => 'iPad Pro 11 inch 2022 M2 Wifi 5G 512GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 11" Liquid Retina
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: Cellular - 512GB
RAM: 8GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'pro_id' => 74,
                'pro_name' => 'iPad Pro 11 inch 2022 M2 Wifi 1TB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 11" Liquid Retina
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: 1TB
RAM: 16GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'pro_id' => 75,
                'pro_name' => 'iPad Pro 11 inch 2022 M2 Wifi 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 11" Liquid Retina
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: 256GB
RAM: 8GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'pro_id' => 76,
                'pro_name' => 'iPad Air 5 10.9 inch 2022 M1 Wifi 5G 64GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 10.9" - Liquid Retina display - IPS
Rear Camera: 12MP
Front Camera: 12MP
CPU: Apple M1
Storage: Cellular - 64GB
RAM: 8GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'pro_id' => 77,
                'pro_name' => 'iPad Air 5 10.9 inch 2022 M1 Wifi 5G 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 10.9" - Liquid Retina display - IPS
Rear Camera: 12MP
Front Camera: 12MP
CPU: Apple M1
Storage: Cellular - 256GB
RAM: 8GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'pro_id' => 78,
                'pro_name' => 'iPad Gen 10 10.9 inch 2022 Wifi 5G 64GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 10.9" Retina IPS LCD
Rear Camera: 12MP
Front Camera: 12MP
CPU: Apple A14 Bionic
Storage: Cellular - 64GB
RAM: 4GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'pro_id' => 79,
                'pro_name' => 'iPad mini 6 2021 Wifi 64GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 8.3" LED-backlit IPS LCD
Rear Camera: 12MP
Front Camera: 12MP
CPU: Apple A15 Bionic
Storage: 64GB
RAM: 4GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'pro_id' => 80,
                'pro_name' => 'iPad Pro 12.9 inch 2022 M2 Wifi 5G 1TB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 12.9" Liquid Retina XDR mini-LED LCD
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: Cellular - 1TB
RAM: 16GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'pro_id' => 81,
                'pro_name' => 'iPad Pro 12.9 inch 2022 M2 Wifi 5G 2TB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 12.9" Liquid Retina XDR mini-LED LCD
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: Cellular - 2TB
RAM: 16GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'pro_id' => 82,
                'pro_name' => 'iPad Pro 12.9 inch 2022 M2 Wifi 5G 128GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 12.9" Liquid Retina XDR mini-LED LCD
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: Cellular - 128GB
RAM: 8GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'pro_id' => 83,
                'pro_name' => 'iPad Pro 12.9 inch 2022 M2 Wifi 5G 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 12.9" Liquid Retina XDR mini-LED LCD
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: Cellular - 256GB
RAM: 8GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'pro_id' => 84,
                'pro_name' => 'iPad Pro 12.9 inch 2022 M2 Wifi 2TB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 12.9" Liquid Retina XDR mini-LED LCD
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: 2TB
RAM: 16GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'pro_id' => 85,
                'pro_name' => 'iPad Pro 12.9 inch 2022 M2 Wifi 5G 512GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 12.9" Liquid Retina XDR mini-LED LCD
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: Cellular - 512GB
RAM: 8GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'pro_id' => 86,
                'pro_name' => 'iPad Pro 12.9 inch 2022 M2 Wifi 512GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 12.9" Liquid Retina XDR mini-LED LCD
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: 512GB
RAM: 8GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'pro_id' => 87,
                'pro_name' => 'iPad Pro 11 inch 2022 M2 Wifi 5G 1TB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 11" Liquid Retina
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: Cellular - 1TB
RAM: 16GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'pro_id' => 88,
                'pro_name' => 'iPad Pro 11 inch 2022 M2 Wifi 5G 2TB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 11" Liquid Retina
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: 2TB
RAM: 16GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'pro_id' => 89,
                'pro_name' => 'iPad Pro 11 inch 2022 M2 Wifi 512GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 11" Liquid Retina
Rear Camera: 12MP, 10MP
Front Camera: 12MP
CPU: Apple M2
Storage: 512GB
RAM: 8GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'pro_id' => 90,
                'pro_name' => 'iPad Gen 10 10.9 inch 2022 Wifi 5G 256GB',
                'pro_brand' => 'APPLE',
                'pro_description' => 'Genuine, Brand New 100%, Factory sealed
Display: 10.9" Retina IPS LCD
Rear Camera: 12MP
Front Camera: 12MP
CPU: Apple A14 Bionic
Storage: Cellular - 256GB
RAM: 4GB
Operating System: iPadOS',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 21,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'pro_id' => 91,
            'pro_name' => 'MacBook Pro M2 Max 2023 14 inch (64GB/1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Max
- Display: 14.2" (3024 x 1964) Liquid Retina XDR
- RAM: 64GB / 1TB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'pro_id' => 92,
            'pro_name' => 'MacBook Pro M2 Max 2023 14 inch (64GB/4TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Max
- Display: 14.2" (3024 x 1964) Liquid Retina XDR
- RAM: 64GB / 4TB SSD
- Operating System: macOS
- Battery: 70 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'pro_id' => 93,
            'pro_name' => 'MacBook Pro M2 Max 2023 16 inch (96GB/1TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Max
- Display: 16.2" (3456 x 2234) Liquid Retina XDR
- RAM: 96GB / 1TB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'pro_id' => 94,
                'pro_name' => 'Macbook Air 13.6 inch M2/8C CPU/8C GPU/16GB/512GB SSD',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2
- Screen: 13.6" (2560 x 1664) Liquid Retina
- RAM: 16GB / 512GB SSD
- Operating System: macOS
- Battery: 53 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'pro_id' => 95,
            'pro_name' => 'MacBook Pro M2 Max 2023 16 inch (64GB/4TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Max
- Display: 16.2" (3456 x 2234) Liquid Retina XDR
- RAM: 64GB / 4TB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'pro_id' => 96,
            'pro_name' => 'MacBook Pro M2 Max 2023 16 inch (32GB/512GB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Max
- Display: 16.2" (3456 x 2234) Liquid Retina XDR
- RAM: 32GB / 512GB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'pro_id' => 97,
            'pro_name' => 'MacBook Pro M2 Max 2023 16 inch (32GB/2TB SSD)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Max
- Display: 16.2" (3456 x 2234) Liquid Retina XDR
- RAM: 32GB / 2TB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'pro_id' => 98,
            'pro_name' => 'MacBook Pro M2 Max 2023 16 inch (32GB/1TB SSD/12C CPU/30C GPU)',
                'pro_brand' => 'APPLE',
                'pro_description' => 'CPU: Apple M2 Max
- Display: 16.2" (3456 x 2234) Liquid Retina XDR
- RAM: 32GB / 1TB SSD
- Operating System: macOS
- Battery: 100 Wh',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 19,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'pro_id' => 99,
                'pro_name' => 'Smart Tivi Samsung 4K QLED 65 inch QA65Q70C',
                'pro_brand' => 'SAMSUNG',
                'pro_description' => 'Size: 65"
- Resolution: 3840 x 2160 / Ultra HD (4K)
- Operating System: Tizen
- Network Connectivity: LAN, WiFi, Bluetooth
- Video Output Ports: 4 x HDMI',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 23,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'pro_id' => 100,
                'pro_name' => 'Smart Tivi Samsung 4K QLED 55 inch QA55Q80C',
                'pro_brand' => 'SAMSUNG',
                'pro_description' => 'Size: 55"
- Resolution: 3840 x 2160 / Ultra HD (4K)
- Operating System: Tizen
- Network Connectivity: WiFi, LAN, Bluetooth
- Video Output Ports: 4 x HDMI',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 23,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'pro_id' => 101,
                'pro_name' => 'Smart Tivi Samsung 4K Crystal UHD 65 inch UA65BU8000',
                'pro_brand' => 'SAMSUNG',
                'pro_description' => 'Size: 65"
- Resolution: 3840 x 2160 / Ultra HD (4K)
- Operating System: Tizen
- Network Connectivity: LAN, WiFi, Bluetooth
- Video Output Ports: 3 x HDMI',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 23,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'pro_id' => 102,
                'pro_name' => 'Smart Tivi Samsung 4K Neo QLED 65 inch QA65QN85C',
                'pro_brand' => 'SAMSUNG',
                'pro_description' => 'Size: 65"
- Resolution: 3840 x 2160 / Ultra HD (4K)
- Operating System: Tizen
- Network Connectivity: Bluetooth, WiFi, LAN
- Video Output Ports: 4 x HDMI',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 23,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'pro_id' => 103,
            'pro_name' => 'LCD ASUS 21.45 VY229HE (1920 x 1080/IPS/75Hz/1 ms/FreeSync)',
                'pro_brand' => 'ASUS',
            'pro_description' => 'IPS panel, Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 75Hz, Response Time: 1ms 
Color Display: 16.7 million colors
: Size: 21.45 (1920 x 1080), Aspect Ratio 16:9',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 37,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'pro_id' => 104,
            'pro_name' => 'LCD ASUS 23.8 VA24EHF (1920 x 1080/IPS/100Hz/1 ms/Adaptive Sync)',
                'pro_brand' => 'ASUS',
            'pro_description' => ' Size: 23.8, Aspect Ratio 16:9(1920 x 1080)
IPS panel, Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 100Hz, Response Time: 1ms
Color Display: 16.7 million colors        ',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 37,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'pro_id' => 105,
            'pro_name' => 'LCD ACER 23.8 K243Y E (UM.QX3SV.E01) (1920 x 1080/IPS/100Hz/1 ms/FreeSync)',
                'pro_brand' => 'ACER',
            'pro_description' => 'Size: 23.8 (1920 x 1080), Aspect Ratio 16:9
IPS panel, Viewing Angle: 178° (H) / 178° (V) 
Refresh Rate: 100Hz, Response Time: 1ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 39,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'pro_id' => 106,
            'pro_name' => 'LCD SAMSUNG 24 LS24C310EAEXXV (1920 x 1080/IPS/75Hz/5 ms/FreeSync)',
                'pro_brand' => 'SAMSUNG',
            'pro_description' => 'Size: 24 (1920 x 1080), Aspect Ratio 16:9
IPS panel, Viewing Angle: 178° (H) / 178° (V) 
Refresh Rate: 75Hz, Response Time: 5ms
Color Display: 16.7 million colors ',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 41,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'pro_id' => 107,
            'pro_name' => 'LCD Dell 23.8 SE2422H (1920 x 1080/VA/75Hz/12 ms/FreeSync)',
                'pro_brand' => 'DELL',
            'pro_description' => 'Size: 23.8 (1920 x 1080), Aspect Ratio 16:9 
VA panel, Viewing Angle: 178° (H) / 178° (V) 
Refresh Rate: 75Hz, Response Time: 12ms
Color Display: 16.7 million color ',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 38,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'pro_id' => 108,
            'pro_name' => 'LCD ACER 27 K273E (UM.HX3SV.E01) (1920 x 1080/IPS/100Hz/1 ms/FreeSync)',
                'pro_brand' => 'ACER',
            'pro_description' => 'Size: 27 (1920 x 1080), Aspect Ratio 16:9 
IPS panel, Viewing Angle: 178° (H) / 178° (V) 
Refresh Rate: 100Hz, Response Time: 1ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 39,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'pro_id' => 109,
            'pro_name' => 'LCD ACER 23.8 Nitro KG240Y M5 (UM.QX0SV.501) (1920 x 1080/IPS/180Hz/1 ms/FreeSync Premium)',
                'pro_brand' => 'ACER',
            'pro_description' => 'Size: 23.8 (1920 x 1080), Aspect Ratio 16:9
IPS panel, Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 180Hz, Response Time: 1ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 39,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'pro_id' => 110,
            'pro_name' => 'LCD ASUS 27 TUF GAMING VG27VQ (1920 x 1080/VA/165Hz/1 ms/FreeSync)',
                'pro_brand' => 'ASUS',
            'pro_description' => 'Size: 27 (1920 x 1080), Aspect Ratio 16:9
VA panel, Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 165Hz, Response Time: 1ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 37,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'pro_id' => 111,
            'pro_name' => 'LCD Dell 23.8 inch P2422H (1920x1080, IPS, 60Hz, 5ms GtG)',
                'pro_brand' => 'DELL',
            'pro_description' => 'Size: 23.8 (1920 x 1080), Aspect Ratio 16:9
IPS panel, Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz, Response Time: 5ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 38,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'pro_id' => 112,
            'pro_name' => 'LCD SAMSUNG 27 LS27CG510EEXXV (2560 x 1440/VA/165Hz/1 ms/FreeSync Premium)',
                'pro_brand' => 'SAMSUNG',
            'pro_description' => 'Size: 27 (2560 x 1440), Aspect Ratio 16:9
VA panel, Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 165Hz, Response Time: 1ms
Color Display: 16.7 million colors ',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 41,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'pro_id' => 113,
            'pro_name' => 'LCD LG 27 27GN65R-B.ATV (1920 x 1080/IPS/144Hz/1 ms/FreeSync Premium)',
                'pro_brand' => 'LG',
            'pro_description' => 'Size: 27 (1920 x 1080), Aspect Ratio 16:9
IPS panel, Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 144Hz, Response Time: 1ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 40,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'pro_id' => 114,
            'pro_name' => ' LCD Dell 23.8 P2422HE (1920 x 1080/IPS/60Hz/5 ms)',
                'pro_brand' => 'DELL',
            'pro_description' => 'Size: 23.8 (1920 x 1080), Aspect Ratio 16:9
IPS panel, Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz, Response Time: 5ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 38,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'pro_id' => 116,
            'pro_name' => 'Philips 23.8 inch 243V7QDSB/74 (1920x1080/IPS/75Hz/5ms)',
                'pro_brand' => 'PHILIPS',
                'pro_description' => '  Size: 23.8 
Resolution: 1920 x 1080 (16:9) 
Panel Technology: IPS 
Viewing Angle: 178° (H) / 178° (V)',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 35,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'pro_id' => 117,
            'pro_name' => 'LCD ASUS 27 VY279HF (1920 x 1080/IPS/100Hz/1 ms)',
                'pro_brand' => 'ASUS',
            'pro_description' => 'Size: 27 (1920 x 1080), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 100Hz
Response Time: 1ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 37,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'pro_id' => 118,
            'pro_name' => 'LCD LG 27 27UP600 (3840 x 2160/IPS/60Hz/5 ms/FreeSync)',
                'pro_brand' => 'LG',
            'pro_description' => 'Size: 27 (3840 x 2160), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz
Response Time: 5ms
Color Display: 1 billion colors
Synchronization Technology: FreeSync',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 40,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'pro_id' => 119,
            'pro_name' => ' LCD LG 44.5 45GR95QE-B.ATV (3440 x 1440/OLED/240Hz/0.03 ms/FreeSync Premium)',
                'pro_brand' => 'LG',
            'pro_description' => 'Size: 44.5 (3440 x 1440), Aspect Ratio 21:9
Panel Type: OLED
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 240Hz
Response Time: 0.03ms
Color Display: 1 billion colors ',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 40,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'pro_id' => 120,
            'pro_name' => 'LCD PHILIPS 23.8 241V8B (1920 x 1080/IPS/100Hz/4 ms)',
                'pro_brand' => 'PHILIPS',
            'pro_description' => 'Size: 23.8 (1920 x 1080), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 100Hz
Response Time: 4ms
Color Display: 16.7 million colors  ',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 35,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'pro_id' => 121,
            'pro_name' => 'LCD Dell G3223Q (3840 x 2160/IPS/144Hz/1ms (MPRT) / 4ms (GTG)/G-Sync, FreeSync)',
                'pro_brand' => 'DELL',
            'pro_description' => 'Size: 32 (3840 x 2160), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 144Hz
Response Time: 1ms (MPRT) / 4ms (GTG)
Color Display: 1 billion colors        ',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 38,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'pro_id' => 122,
            'pro_name' => 'LCD LG 21.45 22MR410 (1920 x 1080/VA/100Hz/5 ms/FreeSync)',
                'pro_brand' => 'LG',
            'pro_description' => 'Size: 21.45 (1920 x 1080), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 100Hz
Response Time: 5ms
Color Display: 16.7 million colors        ',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 40,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'pro_id' => 123,
            'pro_name' => 'LCD LG 27 27GR75Q-B (2560 x 1440/IPS/165Hz/1 ms/FreeSync Premium)',
                'pro_brand' => 'LG',
            'pro_description' => 'Size: 27 (2560 x 1440), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 165Hz
Response Time: 1ms
Color Display: 16.7 million colors        ',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 40,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'pro_id' => 124,
            'pro_name' => 'LCD LG 31.5 32UR500-B (3840 x 2160/VA/60Hz/4 ms/FreeSync)',
                'pro_brand' => 'LG',
            'pro_description' => ' Size: 31.5 (3840 x 2160), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz
Response Time: 4ms
Color Display: 1 billion colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 40,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'pro_id' => 125,
            'pro_name' => 'LCD ACER 21.5 EK221Q E3 (UM.WE1SV.301) (1920 x 1080/IPS/100Hz/1 ms/FreeSync)',
                'pro_brand' => 'ACER',
            'pro_description' => 'Size: 21.5 (1920 x 1080), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 100Hz
Response Time: 1ms
Color Display: 16.7 million colors        ',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 39,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'pro_id' => 126,
            'pro_name' => 'LCD ASUS 23.8\'\' PA247CV-P (1920 x 1080/IPS/75Hz/5 ms/Adaptive Sync)',
                'pro_brand' => 'ASUS',
            'pro_description' => 'Size: 23.8 (1920 x 1080), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 75Hz
Response Time: 5ms
Color Display: 16.7 million colors        ',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 37,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'pro_id' => 127,
            'pro_name' => 'LCD Dell 34 UltraSharp U3423WE (3440 x 1440/IPS/60Hz/5 ms)',
                'pro_brand' => 'DELL',
            'pro_description' => 'Size: 21.45 (1920 x 1080), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 75Hz
Response Time: 5ms
Color Display: 16.7 million colors        ',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 38,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'pro_id' => 128,
            'pro_name' => 'LCD SAMSUNG 43 LS43BM702UEXXV (3840 x 2160/VA/60Hz/4 ms)',
                'pro_brand' => 'SAMSUNG',
            'pro_description' => 'Size: 43 (3840 x 2160), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz
Response Time: 4ms
Color Display: 1 billion colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 41,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'pro_id' => 129,
            'pro_name' => 'LCD ACER 31.5 ED320Q X (UM.JE0SV.X01) (1920 x 1080/VA/240Hz/1 ms)',
                'pro_brand' => 'ACER',
            'pro_description' => 'Size: 31.5 (1920 x 1080), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 240Hz
Response Time: 1ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 39,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'pro_id' => 130,
            'pro_name' => 'LCD LG 24 24GN65R-B.ATV (1920 x 1080/IPS/144Hz/1 ms/FreeSync Premium)',
                'pro_brand' => 'Phong Vu',
            'pro_description' => 'Size: 24 (1920 x 1080), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 144Hz
Response Time: 1ms
Color Display: 16.7 million colors
Synchronization Technology: FreeSync Premium',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 40,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'pro_id' => 131,
            'pro_name' => 'LCD ASUS 27 VY279HE - W (1920 x 1080/IPS/75Hz/1 ms/Adaptive Sync)',
                'pro_brand' => 'ASUS',
            'pro_description' => 'Size: 27 (1920 x 1080), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 75Hz
Response Time: 1ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 37,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'pro_id' => 132,
            'pro_name' => 'LCD LG 29 29WQ600-W.ATV (2560 x 1080/IPS/100Hz/5 ms/FreeSync)',
                'pro_brand' => 'LG',
            'pro_description' => 'Size: 29 (2560 x 1080), Aspect Ratio 21:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 100Hz
Response Time: 5ms
Color Display: 16.7 million colors
Synchronization Technology: FreeSync',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 40,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'pro_id' => 133,
            'pro_name' => 'LCD ACER 21.5 EK221Q H (UM.WE1SV.H01) (1920 x 1080/VA/100Hz/1 ms/FreeSync)',
                'pro_brand' => 'ACER',
            'pro_description' => ' Size: 21.5 (1920 x 1080), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 100Hz
Response Time: 1ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 39,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'pro_id' => 134,
            'pro_name' => 'LCD ASUS 31.5 TUF Gaming VG32VQ-J (2560 x 1440/VA/144Hz/1 ms/FreeSync Premium)',
                'pro_brand' => 'ASUS',
            'pro_description' => 'Size: 31.5 (2560 x 1440), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 144Hz
Response Time: 1ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 37,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'pro_id' => 135,
            'pro_name' => 'LCD Dell 19.5 D2020H (1600 x 900/TN/60Hz/5 ms)',
                'pro_brand' => 'DELL',
            'pro_description' => 'Size: 19.5 (1600 x 900), Aspect Ratio 16:9
Panel Type: TN
Viewing Angle: 90° (H) / 50° (V)
Refresh Rate: 60Hz
Response Time: 5ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 38,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'pro_id' => 136,
            'pro_name' => ' LCD Dell 23.8 E2424HS (1920 x 1080/VA/60Hz/5 ms)',
                'pro_brand' => 'DELL',
            'pro_description' => 'Size: 23.8 (1920 x 1080), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz
Response Time: 5ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 38,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'pro_id' => 137,
            'pro_name' => 'LCD ACER 19.5 K202HQL b (UM.IX2SV.001) (1600 x 900/TN/60Hz/5 ms) ',
                'pro_brand' => 'ACER',
            'pro_description' => 'Size: 19.5 (1600 x 900), Aspect Ratio 16:9
Panel Type: TN
Viewing Angle: 90° (H) / 65° (V)
Refresh Rate: 60Hz
Response Time: 5ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 39,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'pro_id' => 138,
            'pro_name' => 'LCD SAMSUNG 27 LS27C360EAEXXV (1920 x 1080/VA/75Hz/4 ms/FreeSync)',
                'pro_brand' => 'SAMSUNG',
            'pro_description' => 'Size: 27 (1920 x 1080), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 75Hz
Response Time: 4ms
Color Display: 16.7 million colors
Synchronization Technology: FreeSync',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 41,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'pro_id' => 139,
            'pro_name' => 'LCD ASUS 27 VZ279HE-J (1920 x 1080/IPS/75Hz/5 ms)',
                'pro_brand' => 'ASUS',
            'pro_description' => 'Size: 27 (1920 x 1080), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 75Hz
Response Time: 5ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 37,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'pro_id' => 140,
            'pro_name' => 'LCD ASUS 23.8 VZ249HR (1920 x 1080/IPS/60Hz/5 ms)',
                'pro_brand' => 'ASUS',
            'pro_description' => 'Size: 23.8 (1920 x 1080), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz
Response Time: 5ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 37,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'pro_id' => 141,
            'pro_name' => 'LCD SAMSUNG 27 LS27BG400EEXXV (1920 x 1080/IPS/240Hz/1 ms/G-Sync compatible, FreeSync Premium)',
                'pro_brand' => 'SAMSUNG',
            'pro_description' => 'Size: 27 (1920 x 1080), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 240Hz
Response Time: 1ms
Color Display: 16.7 million colors
Synchronization Technology: G-Sync compatible, FreeSync Premium',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 41,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'pro_id' => 142,
            'pro_name' => 'LCD SAMSUNG 32 LS32B800PXEXXV (3840 x 2160/IPS/60Hz/5 ms)',
                'pro_brand' => 'SAMSUNG',
            'pro_description' => 'Size: 32 (3840 x 2160), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz
Response Time: 5ms
Color Display: 1 billion colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 41,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'pro_id' => 143,
            'pro_name' => 'LCD Dell 23.8 E2423H (1920 x 1080/VA/60Hz/5 ms)',
                'pro_brand' => 'DELL',
            'pro_description' => 'Size: 23.8 (1920 x 1080), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz
Response Time: 5ms
Color Display: 16.7 million colors',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 38,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'pro_id' => 144,
            'pro_name' => 'LCD PHILIPS 23.8 245E1S (2560 x 1440/IPS/75Hz/4 ms)',
                'pro_brand' => 'PHILIPS',
            'pro_description' => 'Size: 23.8 (2560 x 1440), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 75Hz
Response Time: 4ms
Color Display: 16.7 million colors
Video Ports: 1 x DisplayPort 1.2, 1 x HDMI 1.4, 1 x VGA/D-sub',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 35,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'pro_id' => 145,
            'pro_name' => 'LCD Dell 27 P2723D (2560 x 1440/IPS/60Hz/8 ms)',
                'pro_brand' => 'DELL',
            'pro_description' => 'Size: 27 (2560 x 1440), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz
Response Time: 8ms
Color Display: 16.7 million colors
Video Ports: 1 x DisplayPort 1.2, 1 x HDMI 1.4',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 38,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'pro_id' => 146,
            'pro_name' => 'LCD LG 27 inch 27GQ50F-B.ATV (1920x1080/ VA/ 165Hz/ 5ms)',
                'pro_brand' => 'LG',
            'pro_description' => 'Size: 27 (1920 x 1080), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 165Hz
Response Time: 5ms
Color Display: 16.7 million colors
Synchronization Technology: FreeSync
Video Ports: 1 x DisplayPort, 2 x HDMI',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 40,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'pro_id' => 147,
            'pro_name' => 'LCD SAMSUNG 27 LS27B800PXEXXV (3840 x 2160/IPS/60Hz/5 ms)',
                'pro_brand' => 'SAMSUNG',
            'pro_description' => 'Size: 27 (3840 x 2160), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz
Response Time: 5ms
Color Display: 1 billion colors
Video Ports: 1 x DisplayPort 1.4, 1 x HDMI',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 41,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'pro_id' => 148,
            'pro_name' => 'LCD ASUS 23.6 VP247HAE (1920 x 1080/VA/60Hz/5 ms)',
                'pro_brand' => 'ASUS',
            'pro_description' => 'Size: 23.6 (1920 x 1080), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz
Response Time: 5ms
Color Display: 16.7 million colors
Video Ports: 1 x HDMI 1.4, 1 x VGA/D-sub',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 37,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'pro_id' => 149,
            'pro_name' => 'LCD PHILIPS 24 241V8L6/74 (1920 x 1080/VA/75Hz/4 ms)',
                'pro_brand' => 'PHILIPS',
            'pro_description' => ' Size: 24 (1920 x 1080), Aspect Ratio 16:9
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 75Hz
Response Time: 4ms
Color Display: 16.7 million colors
Video Ports: 1 x HDMI 1.4, 1 x VGA/D-sub',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 35,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'pro_id' => 150,
            'pro_name' => 'LCD LG 27 27UP850N-W.ATV (3840 x 2160/IPS/60Hz/5 ms/FreeSync)',
                'pro_brand' => 'LG',
            'pro_description' => ' Size: 27 (3840 x 2160), Aspect Ratio 16:9
Panel Type: IPS
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 60Hz
Response Time: 5ms
Color Display: 1 billion colors
Synchronization Technology: FreeSync
Video Ports: 1 x DisplayPort 1.4, 2 x HDMI',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 40,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'pro_id' => 151,
            'pro_name' => 'LCD Dell 27 inch S2722DGM (2560 x 1440/ VA/ 165Hz/ 6ms)',
                'pro_brand' => 'DELL',
            'pro_description' => ' Size: 27 (2560 x 1440), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 165Hz
Response Time: 2ms
Color Display: 16.8 Million colors
Synchronization Technology: AMD FreeSync
Video Ports: 1 x DisplayPort, 2 x HDMI',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 38,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'pro_id' => 152,
            'pro_name' => 'LCD Philips 23.8 inch 242E1GAEZ/74 (1920x1080, VA, 165Hz, 4ms)',
                'pro_brand' => 'PHILIPS',
            'pro_description' => ' Size: 23.8 (1920 x 1080), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 165Hz
Response Time: 4ms
Color Display: 16.7 million colors
Video Ports: 1 x DisplayPort, 1 x HDMI',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 38,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'pro_id' => 153,
            'pro_name' => 'LCD PHILIPS 27 271V8LA/74 (1920 x 1080/VA/75Hz/4 ms)',
                'pro_brand' => 'PHILIPS',
            'pro_description' => ' Size: 27 (1920 x 1080), Aspect Ratio 16:9
Panel Type: VA
Viewing Angle: 178° (H) / 178° (V)
Refresh Rate: 75Hz
Response Time: 4ms
Color Display: 16.7 million colors
Video Ports: 1 x HDMI, 1 x VGA/D-sub',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 38,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'pro_id' => 154,
                'pro_name' => 'Wireless gaming mouse Logitech G903 Hero',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Wireless Lightspeed G903 gaming mouse 
Wireless Lightspeed connection
HERO 25K sensor with up to 25,600 DPI resolution
Ambidextrous design, programmable buttons up to 11 buttons',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '/_CklzALMCzCCPNIcxfCIzn_zI5h0gh14xboJRkjJ48NZKO7po3g1jOIAvCZfNszcv2oXpmvDn4PeYZCWiQ=w500-rw',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'pro_id' => 155,
            'pro_name' => 'Wireless computer mouse Fuhlen A09B (Black)',
                'pro_brand' => 'Fuhlen',
                'pro_description' => 'Ergonomic design with 3 function keys
Mini receiver with Nano 2.4Ghz technology
1000DPI resolution, operating range of 10m
Power-saving optical technology',
                'pro_price' => 169000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '/acQeE0s3-2ENXPJYXvMIqVuFIybTLAf2XEGa46XkeTjRP5Fo0jwxh7d2XIAKs_ucRi9O5LnBGUZr68V_IbSs_vbIRANjj53iqA=w500-rw',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'pro_id' => 156,
            'pro_name' => 'Wireless Bluetooth mouse Microsoft Camo (Gray White)',
                'pro_brand' => 'MICROSOFT',
                'pro_description' => 'Wireless frequency: 2.4 GHz band
Operating system support: Windows 11/10/8.1
Device must support Bluetooth® 4.0 or higher',
                'pro_price' => 699000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'pro_id' => 157,
            'pro_name' => 'Wireless Bluetooth mouse Microsoft BlueTrack Modern Mobile (Peach Pink)',
                'pro_brand' => 'MICROSOFT',
                'pro_description' => 'Interface: Bluetooth 4.2
2.4GHz frequency band
BlueTrack technology owned by Microsoft
Unique Swift Pair feature allows for device pairing directly from notifications
Compatibility: Windows 10/10 ARM/8.1, Mac OS 10+, Android 6.0+',
                'pro_price' => 899000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'pro_id' => 158,
            'pro_name' => 'Wireless Bluetooth mouse Microsoft Ergonomic (Black)',
                'pro_brand' => 'MICROSOFT',
                'pro_description' => 'Wireless frequency: 2.4 GHz band
Connection range: 10m in open space, 5m in office environment
Compatibility: Windows 10/8.1, Bluetooth® 4.0 or higher support
Long battery life 
Connects with up to 3 devices simultaneously
Aluminum scroll wheel, Teflon feet, and precise tracking sensor
Includes thumb rest for soft, ergonomic grip',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'pro_id' => 159,
            'pro_name' => 'Wireless Bluetooth mouse Microsoft RJN-00005 (Black)',
                'pro_brand' => 'MICROSOFT',
                'pro_description' => 'Soft, simple design
Flexible Bluetooth wireless connection
High precision, glides on various surfaces
Ergonomic, snug fit for comfortable extended use
Unique Swift Pair feature allows for device pairing directly from notifications',
                'pro_price' => 599000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'pro_id' => 160,
                'pro_name' => 'Wireless gaming mouse Razer Basilisk V3 X HyperSpeed',
                'pro_brand' => 'RAZER',
                'pro_description' => 'Ergonomic design
Wireless connectivity
Razer HyperSpeed 2.4GHz wireless technology
Supports Bluetooth connection
Up to 285 hours of battery life',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'pro_id' => 161,
            'pro_name' => 'Wireless gaming mouse Razer Orochi Wireless V2 (Black)',
                'pro_brand' => 'RAZER',
                'pro_description' => 'Switch lifecycle: 60 million clicks
Connectivity: Dual-mode wireless (2.4GHz and BLE)
Lithium AA battery life: 425 hours (2.4GHz), 950 hours (BLE)
Speed: 450 IPS
Razer 2nd generation mechanical mouse switches',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'pro_id' => 162,
            'pro_name' => 'Gaming mouse Razer DeathAdder Essential - RZ01-03850200-R3M1 (White)',
                'pro_brand' => 'RAZER',
                'pro_description' => 'Independently adjustable Hyperesponse buttons
Razer mechanical switches rated for 10 million clicks
6,400 DPI Optical Sensor
Form Factor: Right-Handed',
                'pro_price' => 749000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'pro_id' => 163,
            'pro_name' => 'Wireless gaming mouse CORSAIR Harpoon RGB Wireless - CH-9311011-AP (Black)',
                'pro_brand' => 'CORSAIR',
                'pro_description' => 'Utilizes premium Omron switches rated for over 50 million clicks
PMW3325 sensor accurate up to 10,000 DPI
Features RGB LED lighting customizable through iCUE software',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'pro_id' => 164,
            'pro_name' => 'Wireless gaming mouse CORSAIR IRONCLAW - CH-9307011-NA (Black)',
                'pro_brand' => 'CORSAIR',
                'pro_description' => 'CORSAIR IRONCLAW RGB gaming mouse designed for FPS and MOBA games
Optical sensor with up to 18,000 DPI
Mouse weight of 105g with a curved design suitable for palm-grip and users with larger hands',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'pro_id' => 165,
                'pro_name' => 'Wireless gaming mouse Corsair Katar Pro Wireless',
                'pro_brand' => 'CORSAIR',
                'pro_description' => 'Connects via ultra-fast SLIPSTREAM WIRELESS or low-latency Bluetooth
Lightweight at just 96g, compact and symmetrical design suitable for both claw and fingertip grips
High-precision PMW3325 sensor
6 programmable buttons',
                'pro_price' => 920000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'pro_id' => 166,
                'pro_name' => 'Corsair Harpoon PRO RGB gaming mouse - CH-9301111-AP',
                'pro_brand' => 'CORSAIR',
                'pro_description' => 'Sporty design with comfortable contoured shape.
High-grip side rubber and lightweight at only 85g.
12,000 DPI optical sensor.
Long-lasting durability with high-performance Omron switches rated for over 20 million clicks.',
                'pro_price' => 499000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'pro_id' => 167,
            'pro_name' => 'DARE-U EM901X Wireless Gaming Mouse (Pink)',
                'pro_brand' => 'DAREU',
                'pro_description' => 'Beautiful design with stunning and bright LED system, includes a premium and convenient charging dock.
Features two durable main buttons with a lifespan of 10 million clicks.
With a 930mAh battery capacity, the mouse operates continuously for up to 30 hours (without LED) and 18 hours (with RGB LED).
Utilizes 2.4GHz wireless frequency technology with ultra-low latency, effective operating range of 10m.
Integrated with Bravo ATG4090 sensor for high accuracy and stable operation on various surfaces.',
                'pro_price' => 888000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'pro_id' => 168,
            'pro_name' => 'Wireless gaming mouse DARE-U EM901X RGB (White Blue)',
                'pro_brand' => 'DAREU',
                'pro_description' => 'Features two durable main buttons with a lifespan of 10 million clicks.
Equipped with a 930mAh battery for continuous operation up to 30 hours (without LED) and 18 hours (with RGB LED).
Utilizes 2.4GHz wireless frequency technology with ultra-low latency, effective operating range of 10m without obstacles.
Integrated with Bravo ATG4090 sensor for high accuracy and stable operation on various surfaces.',
                'pro_price' => 649000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'pro_id' => 169,
            'pro_name' => 'Wireless gaming mouse DareU EM901 (Pink)',
                'pro_brand' => 'DAREU',
                'pro_description' => 'Designed with Optical technology, ensuring durability with a lifespan of up to 10 million clicks.
Equipped with an optical sensor with 6000 DPI.
With a 930mAh battery capacity, the mouse offers up to 18 hours of usage with just 3 hours of charging.
The mouse supports charging via a standard USB cable, with both the cable and mouse featuring USB Type-C connections for added convenience.',
                'pro_price' => 888000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'pro_id' => 170,
            'pro_name' => 'Gaming mouse Fuhlen G90 (Black)',
                'pro_brand' => 'Fuhlen',
                'pro_description' => 'Connection type: Wired
Sensor type: Optical
Resolution: 2000 DPI
Color: Black',
                'pro_price' => 399000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 49,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'pro_id' => 171,
            'pro_name' => 'AKKO 3108 RF One Piece - Luffy Wireless Mechanical Keyboard (AKKO switch v3 - Cream Blue)',
                'pro_brand' => 'AKKO',
                'pro_description' => 'Connectivity: 2.4 GHz Wireless, USB Type-C
Switch: Akko Cream Blue v3
Function keys: Available',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'pro_id' => 172,
            'pro_name' => 'AKKO 3087 RF Dragon Ball Z - Goku Wireless Mechanical Keyboard (AKKO switch v3 - Cream Blue)',
                'pro_brand' => 'AKKO',
                'pro_description' => 'Connectivity: 2.4 GHz Wireless, USB Type-C
Switch: Akko Cream Blue v3
Function keys: Available',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'pro_id' => 173,
            'pro_name' => 'Logitech Bluetooth MX Keys S Wireless Keyboard, Graphite (920-011563)',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Sleek and minimalist design for a tidy workspace appearance.
Sculpted to fit fingertips for smooth typing and reduced noise.
Equipped with intelligent backlighting with modern automatic sensor.
Connectivity: USB 2.4GHz, Bluetooth.
Compatible with Windows, macOS, Linux, ChromeOS, iPadOS, Android systems.
Features fast USB-C charging, providing long usage times.',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'pro_id' => 174,
            'pro_name' => 'ASUS ROG Strix Scope II 96 WL NX Storm Switch Wireless Gaming Keyboard (90MP037B-BKUA00)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'Mechanical keyboard
Connectivity: USB 2.0, Bluetooth 5.1, 2.4GHz
Switch type: Storm Switch
Function keys: Available',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'pro_id' => 175,
            'pro_name' => 'ASUS ROG Falchion RX Low Profile Red Switch Wireless Gaming Keyboard (90MP03EC-BKUA10)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'Mechanical keyboard
Connectivity: USB 2.0, Bluetooth 5.1, 2.4GHz
Switch type: Red Switch
Function keys: Available',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'pro_id' => 176,
                'pro_name' => 'Gaming mechanical keyboard DAREU EK75 White-black_Firefly switch',
                'pro_brand' => 'DAREU',
                'pro_description' => 'Mechanical keyboard
Connectivity: USB-Type C, Bluetooth 5.1, 2.4GHz
Switch type: Firefly Switch
Function keys: Available',
                'pro_price' => 699000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'pro_id' => 177,
            'pro_name' => 'Gaming mechanical keyboard DAREU EK75 Full White with Firefly switches (extra keycaps)',
                'pro_brand' => 'DAREU',
                'pro_description' => 'Mechanical keyboard
Connectivity: USB-Type C, Bluetooth 5.1, 2.4GHz
Switch type: Firefly Switch
Function keys: Available
The accessory set comes with additional keycaps.',
                'pro_price' => 699000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'pro_id' => 178,
            'pro_name' => 'Wireless numeric keypad for computers MOFII X910 Jasper (50226)',
                'pro_brand' => 'MOFII',
                'pro_description' => 'Designed in a classic style with vibrant colors for a youthful look.
18 responsive buttons, quick signal feedback, and noiseless design.
Compatible with most popular operating systems.
Automatic disconnect mode helps increase battery life up to 4 times.',
                'pro_price' => 299000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'pro_id' => 179,
            'pro_name' => 'E-Dra EK375 Alpha Brown Switch Gaming Mechanical Keyboard (EK375-AL-BR)',
                'pro_brand' => 'E-Dra',
                'pro_description' => 'Type: Mechanical keyboard
Keyboard connection: USB
Function keys: Available
Compatible operating systems: Windows 98/2000/ME/NT/XP/Win 7,8,10
Switch type: Brown Switch
Color: Black case, red-black keycaps',
                'pro_price' => 649000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'pro_id' => 180,
            'pro_name' => 'E-Dra EK375 Beta Blue Switch Gaming Mechanical Keyboard (EK375-BE-BL)',
                'pro_brand' => 'E-Dra',
                'pro_description' => 'Type: Mechanical keyboard
Keyboard connection: USB
Function keys: Available
Compatible operating systems: Windows 98/2000/ME/NT/XP/Win 7,8,10
Switch type: Blue Switch
Color: Black case, red-black keycaps',
                'pro_price' => 649000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'pro_id' => 181,
            'pro_name' => 'Wireless mechanical keyboard DAREU EK75 PRO WBC_Dream switch (extra keycaps)',
                'pro_brand' => 'DAREU',
                'pro_description' => 'Mechanical keyboard
Connectivity: USB-Type C, Bluetooth 5.1, 2.4GHz
Switch type: Dream Switch
Function keys: Available
The accessory set comes with additional keycaps.',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'pro_id' => 182,
            'pro_name' => 'Gaming mechanical keyboard Corsair K70 CORE-BLK-CRSR MX-RGB (CH-910971E-NA)',
                'pro_brand' => 'CORSAIR',
                'pro_description' => 'Product type: Mechanical keyboard
Connection: USB 3.0
Keyswitch: Corsair MLX Red linear
Keyboard form factor: Fullsize',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'pro_id' => 183,
                'pro_name' => 'Baseus K01A Tri-Mode Wireless Keyboard - Pink',
                'pro_brand' => 'Baseus',
                'pro_description' => 'Slim and attractive design
Available in various colors
Compatible with operating systems: Windows, Apple OS, Linux, Harmony OS, Android
3 connection modes: Wireless 2.4GHz, Bluetooth 5.0, and Bluetooth 3.0',
                'pro_price' => 790000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'pro_id' => 184,
                'pro_name' => 'Baseus K01B Tri-Mode Wireless Keyboard - Gray',
                'pro_brand' => 'Baseus',
                'pro_description' => 'Slim and attractive design
Available in various colors
Compatible with operating systems: Windows, Apple OS, Linux, Harmony OS, Android
3 connection modes: Wireless 2.4GHz, Bluetooth 5.0, and Bluetooth 3.0',
                'pro_price' => 850000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'pro_id' => 185,
                'pro_name' => 'Rapoo NK1900 black keyboard',
                'pro_brand' => 'Rapoo',
                'pro_description' => 'Stylish keyboard design
Connection port: USB
Laser technology to prevent key fading
Includes wrist rest for fatigue reduction
Water drainage holes to prevent liquid spills from causing damage',
                'pro_price' => 180000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'pro_id' => 186,
            'pro_name' => 'Rapoo V50S RGB gaming keyboard in black (214290V50100841)',
                'pro_brand' => 'Rapoo',
                'pro_description' => 'Striking design with RGB LED backlighting
Connection type: Wired
Keyboard type: Membrane
Size: Full size',
                'pro_price' => 390000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'pro_id' => 187,
                'pro_name' => 'Wireless gaming mechanical keyboard Rapoo V500pro-87 in black with Brown Switch',
                'pro_brand' => 'Rapoo',
                'pro_description' => '2.4GHz wireless connection
FElegant aluminum alloy surface
Floating keycap design for easy cleaning
Dual-color injection molding technology to prevent color fading
Integrated rechargeable Lithium battery',
                'pro_price' => 690000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 51,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'pro_id' => 188,
                'pro_name' => 'E-DRA Yummy EGC232 Gaming Swivel Chair in black',
                'pro_brand' => 'E-DRA',
                'pro_description' => 'Premium chair designed for gamers
Material: PU Leather
Solid rubber padding
Classic integrated armrests
Class 4 hydraulic piston
Classic base support
Load-bearing frame: High-strength ABS plastic
Noiseless design for wheels
Weight capacity in upright position: 150kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'pro_id' => 189,
            'pro_name' => 'ASUS ROG CHARIOT CORE SL300 Gaming Chair in Black (90GC00D0-MSG010)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'Ergonomic design with high-density foam headrest support
Memory foam backrest for maximum comfort
4D armrests and backrest tilt up to 155°
Stylish ROG-inspired rear hanger design
Made from synthetic leather material',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'pro_id' => 190,
            'pro_name' => 'Cougar Chair ARGO Gaming Chair (CHRCR-ARGO)',
                'pro_brand' => 'Cougar',
                'pro_description' => 'Flexible backrest recline
3D adjustable armrests
Adjustable headrest
Premium aluminum frame design with breathable mesh cushion
5-star aluminum base
Large 3\' wheels for enhanced stability
Tilt and sliding depth adjustment via trigger shift control system',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'pro_id' => 191,
            'pro_name' => 'Cougar Sofa Ranger S Royal Gaming Chair (CHRCR-RANGER-S-ROYAL)',
                'pro_brand' => 'Cougar',
                'pro_description' => 'Premium breathable PVC leather material
- 2 side pockets for storage
- Integrated multifunctional swivel table
- Foldable footrest
- Ergonomic support for head and lumbar regions
- Recline backrest adjustable up to 157°',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'pro_id' => 192,
            'pro_name' => 'Cougar Sofa Ranger S Black Gaming Chair (CHRCR-RANGER-S-BK)',
                'pro_brand' => 'Cougar',
                'pro_description' => 'Premium breathable PVC leather material
- 2 side pockets for storage
- Integrated multifunctional swivel tray
- Foldable footrest
- Ergonomic support for head and lumbar regions
- Recline backrest adjustable up to 157°',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'pro_id' => 193,
            'pro_name' => 'The gaming chair Cougar Sofa Ranger S (CHRCR-RANGER-S)',
                'pro_brand' => 'Cougar',
                'pro_description' => 'Premium breathable PVC leather material
- 2 side pockets for storage
- Integrated multifunctional swivel tray
- Foldable footrest
- Ergonomic support for head and lumbar regions
- Recline backrest adjustable up to 157°',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'pro_id' => 194,
            'pro_name' => 'The Cooler Master Caliber R3 Gaming Chair - Black (CHRCM-CMI-GCR3-BK).',
                'pro_brand' => 'Cooler Master',
                'pro_description' => 'Material: PU Leather
- Armrest: 2D
- Hydraulic piston: Class 4
- Frame: Steel
- Weight capacity in upright position: 150kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'pro_id' => 195,
            'pro_name' => 'The gaming chair Cougar Armor EVO Royal (CHRCR-ARMOR-EVO-ROYAL).',
                'pro_brand' => 'Cougar',
                'pro_description' => 'Modern design, 4D lumbar support
Magnetic neck pillow
Adjustable height with Piston lift
Allows reclining up to 180 degrees and tilt adjustment
Sturdy steel frame, supports up to 160kg
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'pro_id' => 196,
            'pro_name' => 'The gaming chair Cougar Armor AIR (CHRCR-ARMOR-AIR).',
                'pro_brand' => 'Cougar',
                'pro_description' => 'Dual design to meet all needs
Height adjustment with Piston lift mechanism
2-directional adjustable armrests
Allows reclining up to 160 degrees and tilt adjustment
Sturdy steel frame, supports up to 120kg
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'pro_id' => 197,
                'pro_name' => 'The swivel ergonomic chair E-DRA EEC218 in black.',
                'pro_brand' => 'E-DRA',
                'pro_description' => 'Material: High-quality mesh for breathability
- Seat cushion material: Fabric
- 2D adjustable headrest for height and angle
- Armrests: integrated height adjustment
- Adjustable height backrest
- Base: Butterfly design, 320mm plastic legs
- Class-3 Bifma hydraulic piston
- 50mm PU Bifma wheels',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'pro_id' => 198,
                'pro_name' => 'The swivel gaming chair E-DRA Yummy EGC232 in black and red color.',
                'pro_brand' => 'E-DRA',
                'pro_description' => 'Premium gaming chair
- Material: PU Leather
- Solid rubber padding
- Integrated classic armrests
- Class 4 hydraulic piston
- Classic base support
- Load-bearing frame: High-strength ABS plastic
- Noiseless design wheels
- Weight capacity in upright position: 150kg
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'pro_id' => 199,
            'pro_name' => 'The gaming chair Cooler Master Caliber X2 Gray (CHRCM-CMI-GCX2-GY)',
                'pro_brand' => 'Cooler Master',
                'pro_description' => 'Large-sized gaming chair, suitable for tall individuals
- Extra-wide seat, extremely comfortable
- Ultra-durable, thick, cold-cured foam seat cushion
- Shaped foam backrest for maximum comfort
- Memory foam head pillow
- Premium frog-style base support
- Durable and luxurious aluminum alloy base
- Class 4 piston supports up to 150kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'pro_id' => 200,
                'pro_name' => 'The gaming chair E-dra EGC229 Level E in Black Gray color.',
                'pro_brand' => 'E-dra',
                'pro_description' => 'Material: PU Leather
- Solid rubber padding
- 2D adjustable armrests
- Class 4 hydraulic piston
- Butterfly base support
- Metal frame
- Noiseless design wheels
- Weight capacity in upright position: 150kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'pro_id' => 201,
                'pro_name' => 'The gaming chair E-dra EGC229 Level E in Black Red color.',
                'pro_brand' => 'E-dra',
                'pro_description' => 'Material: PU Leather
- Solid rubber padding
- 2D adjustable armrests
- Class 4 hydraulic piston
- Butterfly base support
- Metal frame
- Noiseless design wheels
- Weight capacity in upright position: 150kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'pro_id' => 202,
            'pro_name' => 'The gaming chair Razer Enki X (RZ38-03880100-R3U1)',
                'pro_brand' => 'Razer',
                'pro_description' => 'Material: Synthetic EPU Leather
Armrests: 2D
Mechanism: 180° swivel, 152° recline
Support height: 166.5 cm - 204 cm
Maximum load capacity: 136 kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'pro_id' => 203,
            'pro_name' => 'The gaming chair Corsair TC100 RELAXED - Fabric, Black (CF-9010051-WW).',
                'pro_brand' => 'Corsair',
                'pro_description' => 'Soft and breathable Fabric material for comfortable extended use
- Seat cushion, backrest, and reclining mechanism up to 160 degrees
- Flexible 2D adjustable armrests
- Premium Class 4 hydraulic piston supports up to 120 kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'pro_id' => 204,
            'pro_name' => 'The gaming chair Corsair TC100 RELAXED - Fabric, Black/Grey (CF-9010052-WW).',
                'pro_brand' => 'Corsair',
                'pro_description' => 'Soft and breathable Fabric material for comfortable extended use
- Seat cushion, backrest, and reclining mechanism up to 160 degrees
- Flexible 2D adjustable armrests
- Premium Class 4 hydraulic piston supports up to 120 kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 52,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'pro_id' => 205,
            'pro_name' => 'Logitech G240 CHELL GAMING Mouse Pad (943-000787)',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Simple, durable design
Mouse mat size 280 x 340 x 1mm
Performance-tuned fabric surface for precise and stable tracking
Rubber sole keeps in place during intense gaming sessions
Surface texture optimized for Logitech G mouse and ultimate gaming performance',
                'pro_price' => 299000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'pro_id' => 206,
            'pro_name' => 'Logitech AURORA COLLECTION mouse pad - Green (943-000734)',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Minimalist, modern design
Dimensions: 400 x 460 x 3 mm
Weight: 352 g',
                'pro_price' => 499000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'pro_id' => 207,
            'pro_name' => 'Logitech AURORA COLLECTION Mouse Pad - Pink (943-000740)',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Minimalist, modern design
Dimensions: 400 x 460 x 3 mm
Weight: 352 g',
                'pro_price' => 499000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'pro_id' => 208,
            'pro_name' => 'Logitech Studio Series Mouse Pad (Black) (956-000031)',
                'pro_brand' => 'Logitech',
                'pro_description' => '100% Recycled Polyester
72% natural rubber
Fray-resistant Nylon + Polyester seams
Non-slip rubber sole on all surfaces',
                'pro_price' => 249000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'pro_id' => 209,
            'pro_name' => 'Logitech Studio Series Mouse Pad (Pink) (956-000033)',
                'pro_brand' => 'Logitech',
                'pro_description' => '100% Recycled Polyester
72% natural rubber
Fray-resistant Nylon + Polyester seams
Non-slip rubber sole on all surfaces',
                'pro_price' => 249000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'pro_id' => 210,
            'pro_name' => 'Logitech Studio Series Mouse Pad (Blue Gray) (956-000034)',
                'pro_brand' => 'Logitech',
                'pro_description' => '100% Recycled Polyester
72% natural rubber
Fray-resistant Nylon + Polyester seams
Non-slip rubber sole on all surfaces',
                'pro_price' => 249000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'pro_id' => 211,
            'pro_name' => 'Corsair MM100 mouse pad (320mm x 270mm x 3mm)',
                'pro_brand' => 'Corsair',
                'pro_description' => 'MM100 Cloth Gaming Mouse Pad',
                'pro_price' => 220000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'pro_id' => 212,
                'pro_name' => 'CORSAIR MM1000 Qi Charging Mouse Pad - M CH-9440022-AP',
                'pro_brand' => 'Corsair',
                'pro_description' => 'Surface: Plastic
72% natural rubber
Size M
350 x 260 x',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'pro_id' => 213,
            'pro_name' => 'Corsair MM300 PRO Extended Mouse Pad 930(L) x 300(W) x 3.0(H) mm (CH-9413641-WW)',
                'pro_brand' => 'Corsair',
                'pro_description' => 'Textile surface design increases sliding ability and reduces mouse friction
Waterproof material helps liquids slide off the surface immediately upon contact
The rubber base secures the touchpad in all situations
The anti-fray edges are meticulously sewn to increase durability over time',
                'pro_price' => 680000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'pro_id' => 214,
                'pro_name' => 'Corsair MM700 RGB Extended mouse pad',
                'pro_brand' => 'Corsair',
                'pro_description' => 'The MM700 RGB Extended mouse pad is designed with a large size, wide surface
Wrounds the surface of the Mouse Pad in 360° of dynamic three-zone RGB lighting
Equipped with an anti-slip rubber base',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'pro_id' => 215,
            'pro_name' => 'Razer Gigantus V2 Mouse Pad - Soft Gaming Mouse Mat XXL (RZ02-03330400-R3M1)',
                'pro_brand' => 'Razer',
                'pro_description' => 'Material: fabric
Mouse pad size: 940 x 410 x 4mm
The base has thick, high-density rubber foam to increase anti-slip ability
Soft fabric surface helps reduce mouse friction',
                'pro_price' => 799000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'pro_id' => 216,
                'pro_name' => 'Razer Goliathus Control Fissure Extended Mouse Pad - RZ02-01070800-R3M2 - Display item',
                'pro_brand' => 'Razer',
                'pro_description' => 'Surface: Fabric
Size XXL
294 x 920 x 3 mm',
                'pro_price' => 660000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'pro_id' => 217,
                'pro_name' => 'Razer Sphex V2 mouse pad - RZ02-01940100-R3M1 - Display item',
                'pro_brand' => 'Razer',
                'pro_description' => 'Surface: Fabric
Size S
270 x 215 x 0.5 mm',
                'pro_price' => 290000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'pro_id' => 218,
                'pro_name' => 'SteelSeries QcK Mini - S mouse pad',
                'pro_brand' => 'Steelseries',
                'pro_description' => 'Surface: Fabric
Dimensions S
250 x 210 x 2 mm',
                'pro_price' => 180000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'pro_id' => 219,
                'pro_name' => 'SteelSeries QCK Edge Medium mouse pad',
                'pro_brand' => 'Steelseries',
                'pro_description' => 'Steelseries QCK Edge 
Size: Medium
Material: Fabric',
                'pro_price' => 345000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'pro_id' => 220,
                'pro_name' => 'Asus Tuf Gaming P1 mouse pad',
                'pro_brand' => 'Asus',
                'pro_description' => 'Military-grade protective nano coating provides a water-resistant surface
260 x 360 mm mousepad
Premium fabric surface for precise tracking of mouse movements during gaming
Durable, tear-resistant stitching
Anti-slip rubber',
                'pro_price' => 390000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'pro_id' => 221,
                'pro_name' => 'Asus Republic of Gamers mouse pad - Display item',
                'pro_brand' => 'Asus',
                'pro_description' => 'Asus Republic of Gamers mouse pad',
                'pro_price' => 50000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 53,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'pro_id' => 222,
            'pro_name' => 'Ares AR265i Uninterruptible Power Supply/UPS (390W)',
                'pro_brand' => 'Ares',
                'pro_description' => 'Power: 390W
Input voltage: 220V
Output voltage: 220V
Input frequency: 60Hz
Output frequency: 60Hz',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'pro_id' => 223,
                'pro_name' => 'UPS/UPS APC BVX700LUI-MS 700VA, 230V, AVR, USB Charging Universal Sockets',
                'pro_brand' => 'APC',
                'pro_description' => 'Low and high voltage levels to safe levels
Protect your valuable electronic devices from dangerous incidents related to lightning surges, electric shocks or electrical interference',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'pro_id' => 224,
                'pro_name' => 'UPS/UPS APC BVX1200LI-MS 1200VA, 230V, AVR, Universal Sockets',
                'pro_brand' => 'APC',
                'pro_description' => 'Output power: 650Watts/ 1200VA
Input voltage: 230V
Output frequency (synchronized with power source): 50/60 Hz
Waveform type: Sine wave
Charging time: 8 hours',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'pro_id' => 225,
                'pro_name' => 'ARES AR2200 2KVA uninterruptible power supply/UPS',
                'pro_brand' => 'Ares',
                'pro_description' => 'Power: 1200W
Input voltage: 220V
Output voltage: 220V
Input frequency: 60Hz
Output frequency: 60Hz',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'pro_id' => 226,
                'pro_name' => 'ARES AR2120 1200VA UPS/UPS',
                'pro_brand' => 'Ares',
                'pro_description' => '1200VA/720W - Automatic voltage stabilization, 2 PCs load for maximum 20 minutes. 24 month warranty',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'pro_id' => 227,
                'pro_name' => 'SANTAK TG500 500VA UPS/UPS',
                'pro_brand' => 'Santak',
                'pro_description' => 'Power: 300W
Input voltage: 220V
Output voltage: 220V
Input frequency: 46 - 54Hz',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'pro_id' => 228,
                'pro_name' => 'Santak Offline TG1000 uninterruptible power unit/UPS - Display item',
                'pro_brand' => 'Santak',
                'pro_description' => 'Power: 600W
Input voltage: 220V
Output voltage: 220V
Input frequency: 46 - 54Hz',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'pro_id' => 229,
                'pro_name' => 'Uninterruptible power supply/UPS APC BVX900LI-MS 900VA, 230V, AVR, Universal Sockets - Display item',
                'pro_brand' => 'APC',
                'pro_description' => 'Power: 480W
Input voltage: 230V
Output voltage: 230V',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'pro_id' => 230,
                'pro_name' => 'Santak 500TG uninterruptible power supply/ UPS - Display item',
                'pro_brand' => 'Santak',
                'pro_description' => 'Power: 300W
Input voltage: 220V
Output voltage: 220V',
                'pro_price' => 740000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'pro_id' => 231,
            'pro_name' => 'APC Easy UPS On-Line SRV 3000VA 2700W 230V (SRV3KI-E)',
                'pro_brand' => 'Apc',
                'pro_description' => 'Capacity: 3000VA/ 2400W
Maximum retention time: Half load (1200 W) 10 minutes; Full load (2400 W) 4 minutes
Communication port: DB9 RS232 communication port Supports Windows 2000/2003/XP/Vista/2008/7/8, Linux, Unix, and MAC',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'pro_id' => 232,
            'pro_name' => 'Ugreen USB 2.0 to Mini USB Cable (1.5M)',
                'pro_brand' => 'Ugreen',
                'pro_description' => 'Supports data transfer rates up to 480Mbps
2.0 / 1.1 compatible
28 / 24AWG, Oxygen-Free Copper
Triple shielding for enhanced interference protection',
                'pro_price' => 69000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'pro_id' => 233,
            'pro_name' => 'VGA to HDMI conversion cable Ugreen 50945 (Black)',
                'pro_brand' => 'Ugreen',
                'pro_description' => 'Model: 50945
Input: VGA 1080P + AUX 3.5mmnOutput: HDMI (Video + Audio)
Output Resolution: Full HD 1080p@60HZ (Max)
Power port: USB Type-C
Full accessories included: 1 Adapter, 1 3.5mm Cord, 1 USB Type-C Cord, instruction manual.
Color: Black',
                'pro_price' => 400000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'pro_id' => 234,
                'pro_name' => 'Ugreen 40203 1x8, 1 to 8 port HDMI splitter',
                'pro_brand' => 'Ugreen',
                'pro_description' => 'HDCP compliant
Video color up to 12bit, 1080p @ (24/50/60) Hz 1920x1200
HDMI in: 1 female HDMI port
HDMI out: 8 female HDMI ports
Data transfer rate 6.75 Gbps, no interference slow, not slow',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'pro_id' => 235,
                'pro_name' => 'Unitek YC474BK Type C to USB Type B conversion cable',
                'pro_brand' => 'Unitek',
                'pro_description' => 'USB 3.1 data transfer at 10 Gbps.
Capable of powering many mobile devices
Laptops can also be charged via this USB connection
In addition, it can charge, transfer and connect data to many device. Just plug in and run and automatically identify the device
Cable length: 1m',
                'pro_price' => 13200.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'pro_id' => 236,
            'pro_name' => 'Belkin INC004btSGY 11-in-1 USB-C 3.1 Splitter/Dock, Pass-thru 100W (Gray)',
                'pro_brand' => 'Belkin',
                'pro_description' => 'Connect to multiple devices at once
Expand USB-C port to HDMI port, DisplayPort, VGA port, 3 USB-A ports, Gigabit port
Ethernet, SD and MicroSD card reader, 3.5mm audio port and USB-C PD port
Supports up to 100W pass-through charging
Doubles as a laptop stand
5 Gbps bandwidth for fast data transfers
VGA, HDMI, and DisplayPort video ports support resolutions up to 4K on multiple displays',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'pro_id' => 237,
            'pro_name' => 'Type-C -> DisplayPort Unitek conversion cable (1.8m) V400AHW',
                'pro_brand' => 'Asus',
                'pro_description' => 'Converts USB Type-C interface to DisplayPort
Supports 4K 60Hz resolution with DP 1.2 standard
Supports DisplayPort alternate mode
Applies to all USB Type-C enabled devices',
                'pro_price' => 464000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'pro_id' => 238,
                'pro_name' => 'USB conversion cable-> Sound Unitek Y247A',
                'pro_brand' => 'Unitek',
                'pro_description' => 'USB transfer cable-> Sound Unitek Y247A',
                'pro_price' => 264000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 50,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'pro_id' => 239,
                'pro_name' => 'Recording device/Webcam Logitech C505',
                'pro_brand' => 'Logitech',
            'pro_description' => 'Capture video with wide angle and 720P HD resolution (30fps)
Omnidirectional mic uses noise reduction technology for clear, natural sound
2m long USB-A cable and universal clip for many setup possibilities Flexible mounting setup
Easy connection with USB-A port',
                'pro_price' => 649000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'pro_id' => 240,
            'pro_name' => 'Recording device/Webcam Logitech BRIO 105 (Graphite)',
                'pro_brand' => 'Logitech',
            'pro_description' => 'Resolution: 1080p/30fps (1920x1080 pixels) or 720p/30fps (1280x720 pixels)
2 megapixel CMOS image sensor
Diagonal field of view: (dFoV) 58°
Fixed focal length
Optional 4-element plastic lens Adjusted with anti-reflection coating
RightLight 2 automatically balances brightness and adjusts contrast',
                'pro_price' => 710000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'pro_id' => 241,
            'pro_name' => 'Recording device/Webcam Logitech HD BRIO 100 (Graphite)',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Eye-catching design with sophisticated colors
Full HD 1080p resolution gives you clarity for better calls
RightLight increases brightness by up to 50%, reducing shadows
Carefully designed for calls live and work from your home, the built-in privacy curtain gives you reliable privacy
Convenient built-in microphone ensures that you\'re heard clearly on video calls',
                'pro_price' => 675000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'pro_id' => 242,
            'pro_name' => 'Recording device/Webcam Logitech BRIO 300 (Black)',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Resolution up to Full HD 1080p 30fps
1x zoom capability
70-degree diagonal field of view
Single noise canceling mic
USB-C Plug and Play connection
Software support available',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'pro_id' => 243,
                'pro_name' => 'Recording device/Webcam Logitech Brio 4K Stream Edition',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Premium 4K webcam with HDR and Windows Hello support
90-degree wide viewing angle with two options (65 degrees and 78 degrees); 5x digital zoom; Autofocus
Omnidirectional mic with noise reduction
Infrared sensor
Background replaceability
Multiple mounting options
Supports multiple connection types including USB 2.0 Type A, USB 3.0 Type A and Type C',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'pro_id' => 244,
                'pro_name' => 'Recording device/Webcam Logitech C505e',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Mic captures in all directions, at long range, reduces noise
Automatically adjusts light RightLight 2
Diagonal vision 60°
FPS HD resolution 720p/30fps',
                'pro_price' => 649000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'pro_id' => 245,
                'pro_name' => 'Recording device/Webcam Logitech C922',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Webcam for gaming, for streamers
Full HD 1080p / 720p resolution at 60 frames per second, quality video with H.264 compression
Change custom background (2 *).Integrate live images online while streaming on Twitch and YouTube
Automatically adjusts light balance, streams sharp video even in low light, has built-in LED light
Convenient adjustable webcam stand, extends up to 18.5cm 
Microphone has excellent noise cancellation',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'pro_id' => 246,
                'pro_name' => 'Recording device/Webcam Logitech C270',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Still image resolution up to 3.0 megapixels
Video resolution up to 1280 x 720 clear pixels
Image sensor with RightLight technology provides quality images even in low light
Built-in microphone with RightSound technology serves all voice chat needs
USB 2.0 connection',
                'pro_price' => 385000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'pro_id' => 247,
            'pro_name' => 'Recording device/Webcam Logitech C310 (HD)',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Works with Skype, Yahoo Messenger, Microsoft Live Messenger
5 megapixel snapshots
Built-in mic with noise reduction
Automatic ambient light adjustment for sharp, detailed images',
                'pro_price' => 549000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'pro_id' => 248,
                'pro_name' => 'Recording device/Webcam Logitech C930e',
                'pro_brand' => 'Logitech',
                'pro_description' => 'The C930e webcam has a 90-degree field of view, pan, tilt and 4x digital zoom capabilities, allowing you to adjust the frame to suit your environment
Enhancing meeting quality with consistently sharp video - even when bandwidth is limited
Premium image sensor delivers HD quality without jaggies or blur, even when zoomed in
Privacy and mounting options',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'pro_id' => 249,
            'pro_name' => 'Logitech C925E (HD) Webcam/Video Recorder',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Full HD 1080p high-definition video at 30 fps delivers true-to-life clarity
C925e intelligently adjusts to improve image quality in low-light and backlit conditions
Mounting options flexible
C925e has an internal privacy cover to ensure privacy and safety',
                'pro_price' => 649000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'pro_id' => 250,
                'pro_name' => 'Recording device/Webcam Logitech C615',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Widescreen Full HD video calling
Video is always sharp, even on the move
Equipped with HD lighting adjustment feature
Built-in noise reduction mic for clear voice
360-degree rotation for added flexibility to operate at angles',
                'pro_price' => 649000.0,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'pro_id' => 251,
            'pro_name' => 'Recording device/Webcam Logitech BRIO 305 (Rose)',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Resolution up to Full HD 1080p/30fps
1x digital zoom
70-degree diagonal field of view
USB-C connectivity for immediate use
Supported in Logi Tune',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'pro_id' => 252,
            'pro_name' => 'Recording device/Webcam Logitech BRIO 505 (Rose)',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Rightlight 4 with HDR, delivers clear images in a variety of lighting environments
Supported in Logi Tune
Rotate attached lens hood
4x digital zoom
megapixel camera: 4MP',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'pro_id' => 253,
            'pro_name' => 'Recording device/Webcam Logitech BRIO 500 (White)',
                'pro_brand' => 'Logitech',
                'pro_description' => 'Brio 500\'s RightLight 4 technology automatically adjusts lighting according to the environment
1080p HD resolution and AI-based facial retouching
Auto-framing RightSight 4 puts the camera where you are
nMic intelligent noise cancellation; Protective shutter attached',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 54,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'pro_id' => 256,
            'pro_name' => 'Laptop Acer Nitro 16 Phoenix AN16-41-R5M4 (NH.QKBSV.003) (AMD Ryzen 5-7535HS) (Black)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: AMD Ryzen 5 7535HS
Screen: 16 IPS (1920 x 1200), 165Hz
RAM: 1 x 8GB DDR5 4800MHz
Graphics: RTX 4050 6GB GDDR6 / AMD Radeon 660M
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 4 cell 90 Wh Integrated Battery
Weight: 2.6kg
Standard: AMD
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'pro_id' => 257,
            'pro_name' => 'Laptop Acer Swift Go SFG14-72-55HZ (Ultra 5 125H/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core Ultra 5-125H
Screen: 14 IPS (2240 x 1400)
RAM: 16GB Onboard LPDDR5x 6400MHz
Graphics: Intel Arc Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL + Office Home & Student 2021
Battery: 3 cell 65 Wh Integrated Battery
Weight: 1.3kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'pro_id' => 258,
            'pro_name' => 'Laptop Acer Aspire 7 A715-76-53PJ (NH.QGESV.007) (i5-12450H) (Black)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i5-12450H
Screen: 15.6 IPS (1920 x 1080)
RAM: 2 x 8GB DDR4 3200MHz
Graphics: Onboard Intel UHD Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 50 Wh Integrated Battery
Weight: 2.1kg
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'pro_id' => 259,
            'pro_name' => 'Laptop ACER Aspire 7 A715-42G-R05G (Ryzen 5 5500U/RAM 8GB/GTX 1650/512GB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: AMD Ryzen 5 5500U
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 8GB DDR4 3200MHz
Graphics: GTX 1650 4GB GDDR6 / AMD Radeon Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 48 Wh
Weight: 2.1kg
Standard: AMD
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'pro_id' => 260,
            'pro_name' => 'Laptop ACER Aspire 7 A715-43G-R8GA (Ryzen 5 5625U/RAM 8GB/RTX 3050/512GB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: AMD Ryzen 5 5625U
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 8GB DDR4 3200MHz
Graphics: RTX 3050 4GB GDDR6 / AMD Radeon Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 50 Wh Integrated Battery
Weight: 2.1kg
Standard: AMD
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'pro_id' => 261,
            'pro_name' => 'Laptop Acer Aspire 3 A315-59-381E (NX.K6TSV.006) (i3-1215U) (Silver)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: AMD Ryzen 5 5625U
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 8GB DDR4 3200MHz
Graphics: RTX 3050 4GB GDDR6 / AMD Radeon Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 50 Wh Integrated Battery
Weight: 2.1kg
Standard: AMD
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'pro_id' => 262,
            'pro_name' => 'Laptop Acer Aspire 5 A514-56P-35X7 (NX.KHRSV.001) (i3-1315U) (Grey)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i3-1315U
Screen: 14 IPS (1920 x 1200)
RAM: 8GB Onboard LPDDR5 6400MHz
Graphics: Onboard Intel UHD Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 50 Wh Integrated Battery
Weight: 1.3kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'pro_id' => 263,
            'pro_name' => 'Laptop Acer Aspire 3 A314-23M-R4TX (NX.KEXSV.001) (AMD Ryzen 5 7520U) (Silver)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: AMD Ryzen 5 7520U
Screen: 14 IPS (1920 x 1080)
RAM: 8GB Onboard LPDDR5 5200MHz
Graphics: Onboard AMD Radeon 610
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 40 Wh Integrated Battery
Weight: 1.4kg
Standard: AMD
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'pro_id' => 264,
            'pro_name' => 'Laptop Asus Vivobook Pro M3401QA-KM025W (AMD Ryzen 7 5800H) (Silver)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: Ryzen 7 5800H
Screen: 14 OLED (2880 x 1800)
RAM: 8GB Onboard DDR4
Graphics: Onboard AMD Radeon Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 63 Wh
Weight: 1.5kg
Standard: AMD
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'pro_id' => 265,
            'pro_name' => 'Laptop ASUS Vivobook X415EA-EK675W (i3-1115G4/RAM 4GB/256GB SSD/ Windows 11)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: Intel Core i3-1115G4
Screen: 14 (1920 x 1080)
RAM: 1 x 4GB Onboard DDR4 2666MHz
Graphics: Onboard Intel UHD Graphics
Storage: 256GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 2 cell 37 Wh Integrated Battery
Weight: 1.6kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'pro_id' => 266,
            'pro_name' => 'Laptop Asus VivoBook Pro M3401QA-KM006W (AMD Ryzen 5 5600H) (Silver)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: AMD Ryzen 5 5600H
Screen: 14 OLED (2880 x 1800), 90Hz
RAM: 8GB Onboard DDR4
Graphics: Onboard AMD Radeon Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 63 Wh Integrated Battery
Weight: 1.4kg
Standard: AMD
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'pro_id' => 267,
            'pro_name' => 'Laptop ASUS Vivobook 14 X1402ZA-EK098W (i3-1220P/RAM 8GB/256GB SSD/ Windows 11)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: Intel Core i3-1220P
Screen: 14  (1920 x 1080)
RAM: 1 x 8GB DDR4
Graphics: Onboard Intel UHD Graphics
Storage: 256GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 42 Wh Integrated Battery
Weight: 1.5kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'pro_id' => 268,
            'pro_name' => 'Laptop Asus Vivobook Go 15 E1504FA-NJ454W (AMD Ryzen 5-7520U) (Silver)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: AMD Ryzen 5 7520U
Screen: 15.6 (1920 x 1080)
RAM: 16GB Onboard LPDDR5 5500MHz
Graphics: Onboard AMD Radeon 610M
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 42 Wh Integrated Battery
Weight: 1.8kg
Standard: AMD
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'pro_id' => 269,
            'pro_name' => 'Laptop Asus Vivobook S3405VA-KM071W (i9-13900H) (Black)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: AMD Ryzen 5 7520U
Screen: 15.6 (1920 x 1080)
RAM: 16GB Onboard LPDDR5 5500MHz
Graphics: Onboard AMD Radeon 610M
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 42 Wh Integrated Battery
Weight: 1.8kg
Standard: AMD
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'pro_id' => 270,
            'pro_name' => 'Laptop ASUS Vivobook S 14 Flip TP3402VA-LZ118W (i9-13900H/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: Intel Core i9-13900H
Screen: 14 IPS (1920 x 1200)
RAM: 16GB (8GB + 8GB Onboard) DDR4 3200MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 50 Wh Integrated Battery
Weight: 1.5kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'pro_id' => 271,
            'pro_name' => 'Laptop Asus TUF Gaming F15 FX507ZC4-HN074W (i5-12500H) (Grey)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: Intel Core i5-12500H
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 8GB DDR4 3200MHz
Graphics: RTX 3050 4GB GDDR6 / Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell 56 Wh Integrated Battery
Weight: 2.2kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'pro_id' => 272,
            'pro_name' => 'Laptop Dell Vostro 3520 - 71030559 (i5-1235U/RAM 16GB/512GB SSD/ Windows 11 + Office)',
                'pro_brand' => 'DELL',
                'pro_description' => 'CPU: Intel Core i5-1235U
Screen: 15.6 WVA (1920 x 1080), 120Hz
RAM: 2 x 8GB DDR4 2666MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL + Office Home & Student 2021
Battery: 3 cell Integrated Battery
Weight: 1.9kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 15,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'pro_id' => 273,
            'pro_name' => 'Laptop Dell Inspiron 15 3530 - 71026454 (i7-1355U) (Black)',
                'pro_brand' => 'DELL',
                'pro_description' => 'CPU: Intel Core i7-1355U
Screen: 15.6 WVA (1920 x 1080)
RAM: 2 x 8GB DDR4 2666MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL + Office Home & Student 2021
Battery: 3 cell Integrated Battery
Weight: 1.66kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 15,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'pro_id' => 274,
            'pro_name' => 'Laptop Dell Mobile Precision Workstation 3581 - 71023331 (i7-13800H) (Grey)',
                'pro_brand' => 'DELL',
                'pro_description' => 'CPU: Intel Core i7-13800H
Screen: 15.6 IPS (1920 x 1080)
RAM: 1 x 16GB DDR5 4800MHz
Graphics: RTX A500 4GB GDDR6 / Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Ubuntu
Battery: 4 cell Integrated Battery
Weight: 1.8kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 15,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'pro_id' => 275,
            'pro_name' => 'Laptop Dell Vostro 15 3530 (80GG9) (i5-1335U) (Grey)',
                'pro_brand' => 'DELL',
                'pro_description' => 'CPU: Intel Core i7-13800H
Screen: 15.6 IPS (1920 x 1080)
RAM: 1 x 16GB DDR5 4800MHz
Graphics: RTX A500 4GB GDDR6 / Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Ubuntu
Battery: 4 cell Integrated Battery
Weight: 1.8kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 15,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'pro_id' => 276,
            'pro_name' => 'Laptop Dell Vostro 15 3530 - 80GG93 (i5-1335U/RAM 16GB/512GB SSD/ Windows 11 + Office)',
                'pro_brand' => 'DELL',
                'pro_description' => 'CPU: Intel Core i5-1335U
Screen: 15.6 IPS (1920 x 1080), 120Hz
RAM: 1 x 8GB DDR4 3200MHz
Graphics: Onboard Intel UHD Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL + Office Home & Student 2021
Battery: 3 cell 41 Wh Integrated Battery
Weight: 1.6kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 15,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'pro_id' => 277,
            'pro_name' => 'Laptop Dell Inspiron 15 3520 (i5-1235U/RAM 16GB/512GB SSD/ Windows 11 + Office)',
                'pro_brand' => 'DELL',
                'pro_description' => 'CPU: Intel Core i5-1235U
Screen: 15.6 IPS (1920 x 1080), 120Hz
RAM: 2 x 8GB DDR4 2666MHz
Graphics: Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL + Office Home & Student 2021
Battery: 3 cell 41 Wh Integrated Battery
Weight: 1.6kg
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 15,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'pro_id' => 278,
            'pro_name' => 'Laptop Dell Vostro 3430 - 71021669 (i5-1335U/RAM 16GB/512GB SSD/ Windows 11 + Office)',
                'pro_brand' => 'DELL',
                'pro_description' => 'CPU: Intel Core i5-1335U
Screen: 14 WVA (1920 x 1080)
RAM: 2 x 8GB DDR4 2666MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL + Office Home & Student 2021
Battery: 3 cell Integrated Battery
Weight: 1.46kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 15,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'pro_id' => 279,
            'pro_name' => 'Laptop Dell Inspiron 3530 - N5I5791W1 (i5-1335U/RAM 16GB/512GB SSD/ Windows 11 + Office)',
                'pro_brand' => 'DELL',
                'pro_description' => 'CPU: Intel Core i5-1335U
Screen: 15.6 WVA (1920 x 1080), 120Hz
RAM: 2 x 8GB DDR4 2666MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL + Office Home & Student 2021
Battery: 3 cell 41 Wh Integrated Battery
Weight: 1.6kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 15,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'pro_id' => 280,
            'pro_name' => 'Laptop Dell Vostro 3530 - V5I5267W1 (i5-1335U/RAM 8GB/256GB SSD/ Windows 11 + Office)',
                'pro_brand' => 'DELL',
                'pro_description' => 'CPU: Intel Core i5-1335U
Screen: 15.6 WVA (1920 x 1080), 120Hz
RAM: 1 x 8GB DDR4 2666MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 256GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL + Office Home & Student 2021
Battery: 3 cell 41 Wh Integrated Battery
Weight: 1.6kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 15,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'pro_id' => 281,
            'pro_name' => 'Laptop Dell Inspiron 14 5430 - 71015633 (i7-1360P/RAM 16GB/1TB SSD/ Windows 11 + Office)',
                'pro_brand' => 'DELL',
                'pro_description' => 'CPU: Intel Core i7-1360P
Screen: 14 WVA (2560 x 1600), 90Hz
RAM: 16GB Onboard DDR5 4800MHz
Graphics: RTX 2050 4GB GDDR6 / Intel Iris Xe Graphics
Storage: 1TB SSD M.2 NVMe /
Operating System: Windows 11 Home SL + Office Home & Student 2021
Battery: 4 cell Integrated Battery
Weight: 1.8kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 15,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'pro_id' => 282,
            'pro_name' => 'Laptop HP 15s-fq5160TU (7C0S1PA) (i5-1235U) (Grey)',
                'pro_brand' => 'HP',
                'pro_description' => 'CPU: Intel Core i5-1235U
Screen: 15.6 IPS (1920 x 1080)
RAM: 2 x 8GB DDR4 3200MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 3 cell 41 Wh Integrated Battery
Weight: 1.7kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 16,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'pro_id' => 283,
            'pro_name' => 'Laptop HP 15s-fq2712TU (7C0X2PA) (i3-1115G4) (Silver)',
                'pro_brand' => 'HP',
                'pro_description' => 'CPU: Intel Core i3-1115G4
Screen: 15.6 IPS (1920 x 1080)
RAM: 1 x 8GB DDR4 3200MHz
Graphics: Onboard Intel UHD Graphics
Storage: 256GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 3 cell 41 Wh Integrated Battery
Weight: 1.7kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 16,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'pro_id' => 284,
            'pro_name' => 'Laptop HP 14s-DQ5099TU (7C0P9PA) (i5-1235U) (Silver)',
                'pro_brand' => 'HP',
                'pro_description' => 'CPU: Intel Core i5-1235U
Screen: 14 IPS (1920 x 1080)
RAM: 2 x 4GB DDR4 3200MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 3 cell 41 Wh Integrated Battery
Weight: 1.5kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 16,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'pro_id' => 285,
            'pro_name' => 'Laptop HP Pavilion 15-eg2086TU (7C0Q8PA) (i3-1215U) (Gold)',
                'pro_brand' => 'HP',
                'pro_description' => 'CPU: Intel Core i3-1215U
Screen: 15.6 IPS (1920 x 1080)
RAM: 2 x 4GB DDR4 3200MHz
Graphics: Onboard Intel UHD Graphics
Storage: 256GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 3 cell 41 Wh Integrated Battery
Weight: 1.7kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 16,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'pro_id' => 286,
            'pro_name' => 'Laptop HP Victus 16-e1107AX (7C140PA) (AMD Ryzen 5 6600H)',
                'pro_brand' => 'HP',
                'pro_description' => 'CPU: AMD Ryzen 5 6600H
Screen: 16.1 IPS (1920 x 1080), 144Hz
RAM: 1 x 8GB GDDR5 4800MHz
Graphics: RTX 3050 4GB GDDR6 / AMD Radeon 660M
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 4 cell 70 Wh Integrated Battery
Weight: 2.5kg
Standard: AMD
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 16,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'pro_id' => 287,
            'pro_name' => 'Laptop HP Victus 15-fa0115TX (7C0X1PA) (i5-12500H) (Black)',
                'pro_brand' => 'HP',
                'pro_description' => 'CPU: Intel Core i5-12500H
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 8GB DDR4 3200MHz
Graphics: RTX 3050 4GB GDDR6 / Intel UHD Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 4 cell 70 Wh Integrated Battery
Weight: 2.4kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 16,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'pro_id' => 288,
            'pro_name' => 'Laptop HP Pavilion 15-eg2037TX (6K783PA) (i5 1235U) (Vàng)',
                'pro_brand' => 'HP',
                'pro_description' => 'CPU: Intel Core i5-1235U
Screen: 15.6 IPS (1920 x 1080)
RAM: 2 x 4GB DDR4 3200MHz
Graphics: GeForce MX550 2GB GDDR6 / Intel Iris Xe Graphics
Storage: 256GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 3 cell 41 Wh
Weight: 1.7kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 16,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'pro_id' => 289,
            'pro_name' => 'Laptop HP Pavilion 14-dv2070TU (7C0V9PA) (i3-1215U) (Silver)',
                'pro_brand' => 'HP',
                'pro_description' => 'CPU: Intel Core i3-1215U
Screen: 14 IPS (1920 x 1080)
RAM: 1 x 8GB DDR4 3200MHz
Graphics: Onboard Intel UHD Graphics
Storage: 256GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 3 cell 41 Wh Integrated Battery
Weight: 1.4kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 16,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'pro_id' => 290,
            'pro_name' => 'Laptop HP Pavilion 14-dv2073TU (7C0P2PA) (i5-1235U) (Gold)',
                'pro_brand' => 'HP',
                'pro_description' => 'CPU: Intel Core i5-1235U
Screen: 14 IPS (1920 x 1080)
RAM: 2 x 8GB DDR4 3200MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 3 cell 41 Wh Integrated Battery
Weight: 1.4kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 16,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'pro_id' => 291,
            'pro_name' => 'Laptop HP Pavilion 14-dv2071TU (7C0W0PA) (i7-1255U) (Gold)',
                'pro_brand' => 'HP',
                'pro_description' => 'CPU: Intel Core i7-1255U
Screen: 14 IPS (1920 x 1080)
RAM: 2 x 8GB DDR4 3200MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 3 cell 41 Wh Integrated Battery
Weight: 1.4kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 16,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'pro_id' => 292,
            'pro_name' => 'Laptop Lenovo LOQ 15IAX9 - 83GS000RVN (i5-12450HX/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'Lenovo',
                'pro_description' => 'CPU: Intel Core i5-12450HX
Screen: 15.6 IPS (1920 x 1080)
RAM: 2 x 8GB DDR5 4800MHz
Graphics: RTX 4050 6GB GDDR6 / Intel UHD Graphics 710
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell Integrated Battery
Weight: 2.4kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 18,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'pro_id' => 293,
            'pro_name' => 'Laptop Lenovo Yoga Slim 7 14IMH9 - 83CV001VVN (Ultra 7-155H/RAM 32GB/1TB SSD/ Windows 11 + Office)',
                'pro_brand' => 'Lenovo',
                'pro_description' => 'CPU: Intel Core Ultra 7-155H
Screen: 14 OLED (1920 x 1200)
RAM: 32GB Onboard LPDDR5x
Graphics: Onboard Intel Arc Graphics
Storage: 1TB SSD M.2 NVMe /
Operating System: Windows 11 Home SL + Office Home & Student 2021
Battery: 65 Wh Integrated Battery
Weight: 1.4kg
Standard: Intel EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 18,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'pro_id' => 294,
            'pro_name' => 'Laptop Lenovo Ideapad Slim 3 15IRH8 - 83EM003EVN (i7-13620H/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'Lenovo',
                'pro_description' => 'CPU: Intel Core i7-13620H
Screen: 15.6 IPS (1920 x 1080)
RAM: 16GB Onboard LPDDR5 4800MHz
Graphics: Onboard Intel UHD Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 74 Wh Integrated Battery
Weight: 1.6kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 18,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'pro_id' => 295,
            'pro_name' => 'Laptop Lenovo LOQ 15IAX9 - 83GS000FVN (i5-12450HX/RAM 8GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'Lenovo',
                'pro_description' => 'CPU: Intel Core i5-12450HX
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 8GB DDR5 4800MHz
Graphics: RTX 2050 4GB GDDR6 / Intel UHD Graphics 710
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 60 Wh Integrated Battery
Weight: 2.4kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 18,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'pro_id' => 296,
            'pro_name' => 'Laptop Lenovo LOQ 15IRH8 - 82XV00QXVN (i7-13620H/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'Lenovo',
                'pro_description' => 'CPU: Intel Core i7-13620H
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 2 x 8GB DDR5 5200MHz
Graphics: RTX 4050 6GB GDDR6 / Intel UHD Graphics 710
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 60 Wh Integrated Battery
Weight: 2.4kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 18,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'pro_id' => 297,
            'pro_name' => 'Laptop Lenovo LOQ 15IRX9 - 83DV000NVN (i7-13650HX/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'Lenovo',
                'pro_description' => 'CPU: Intel Core i7-13650HX
Screen: 15.6 (1920 x 1080), 144Hz
RAM: 1 x 16GB DDR5 4800MHz
Graphics: RTX 4050 6GB GDDR6 / Intel UHD Graphics 710
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 60 Wh Integrated Battery
Weight: 2.4kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 18,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'pro_id' => 298,
            'pro_name' => 'Laptop Lenovo LOQ 15IRX9 - 83DV0092VN (i7-13650HX/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'Lenovo',
                'pro_description' => 'CPU: Intel Core i7-13650HX
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 16GB DDR5 4800MHz
Graphics: RTX 4060 8GB GDDR6 / Intel UHD Graphics 710
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell Integrated Battery
Weight: 2.4kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 18,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'pro_id' => 299,
            'pro_name' => 'Laptop Lenovo Ideapad 5 - 15IAL7 -82SF006LVN (i5-1235U)',
                'pro_brand' => 'Lenovo',
                'pro_description' => 'CPU: Intel Core i5-1235U
Screen: 15.6 IPS (1920 x 1080)
RAM: 8GB Onboard GDDR4 3200MHz
Graphics: Onboard Intel UHD Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 57 Wh
Weight: 1.8kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 18,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'pro_id' => 300,
            'pro_name' => 'Laptop Lenovo IdeaPad 3 15IAU7 - 82RK001QVN (i5-1235U/RAM 8GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'Lenovo',
                'pro_description' => 'CPU: Intel Core i5-1235U
Screen: 15.6 TN (1920 x 1080)
RAM: 1 x 8GB Onboard DDR4 3200MHz
Graphics: Onboard Intel UHD Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 54 Wh Integrated Battery
Weight: 1.63kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 18,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'pro_id' => 301,
            'pro_name' => 'Laptop Lenovo IdeaPad Slim 5 14IAH8 - 83BF002NVN (i5-12450H) (Grey)',
                'pro_brand' => 'Lenovo',
                'pro_description' => 'CPU: Intel Core i5-12450H
Screen: 14 IPS (1920 x 1200)
RAM: 16GB Onboard LPDDR5 4800MHz
Graphics: Onboard Intel UHD Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell Integrated Battery
Weight: 1.5kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 18,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'pro_id' => 302,
            'pro_name' => 'Laptop MSI Modern 14 C13M - 611VN (i5-1335U/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'MSI',
                'pro_description' => 'CPU: Intel Core i5-1335U
Screen: 14 IPS (1920 x 1080)
RAM: 16GB Onboard DDR4 3200MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 54 Wh Integrated Battery
Weight: 1.4kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 17,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'pro_id' => 303,
            'pro_name' => 'Laptop MSI Cyborg 15 A12VF-267VN (i7-12650H/RAM 8GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'MSI',
                'pro_description' => 'CPU: Intel Core i7-12650H
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 8GB DDR5 4800MHz
Graphics: RTX 4060 8GB GDDR6 / Intel UHD Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 54 Wh Integrated Battery
Weight: 2kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 17,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'pro_id' => 304,
            'pro_name' => 'Laptop MSI Cyborg 15 A12VE-412VN (i5-12450H) (Black)',
                'pro_brand' => 'MSI',
                'pro_description' => 'CPU: Intel Core i7-12650H
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 8GB DDR5 4800MHz
Graphics: RTX 4060 8GB GDDR6 / Intel UHD Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 54 Wh Integrated Battery
Weight: 2kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 17,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'pro_id' => 305,
            'pro_name' => 'Laptop MSI Modern 14 C13M - 609VN (i5-1335U/RAM 8GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'MSI',
                'pro_description' => 'CPU: Intel Core i5-1335U
Screen: 14 IPS (1920 x 1080)
RAM: 1 x 8GB DDR4 3200MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 54 Wh Integrated Battery
Weight: 1.4kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 17,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'pro_id' => 306,
            'pro_name' => 'Laptop MSI Modern 14 C13M - 608VN (i5-1335U/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'MSI',
                'pro_description' => 'CPU: Intel Core i5-1335U
Screen: 14 IPS (1920 x 1080)
RAM: 1 x 16GB DDR4 3200MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 54 Wh Integrated Battery
Weight: 1.4kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 17,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'pro_id' => 307,
            'pro_name' => 'Laptop MSI GF63 12UCX-841VN (i5-12450H/RAM 8GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'MSI',
                'pro_description' => 'CPU: Intel Core i5-12450H
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 8GB DDR4 3200MHz
Graphics: RTX 2050 4GB GDDR6 / Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 53 Wh Integrated Battery
Weight: 1.8kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 17,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'pro_id' => 308,
            'pro_name' => 'Laptop MSI Modern 14 C12MO-660VN (i5-1235U) (Black)',
                'pro_brand' => 'MSI',
                'pro_description' => 'CPU: Intel Core i5-1235U
Screen: 14 IPS (1920 x 1080)
RAM: 16GB Onboard DDR4 3200MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 39 Wh Integrated Battery
Weight: 1.4kg
Standard: Non-EVO
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 17,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'pro_id' => 309,
            'pro_name' => 'Laptop MSI Modern 15 B7M-238VN (AMD Ryzen 7 7730U) (Black)',
                'pro_brand' => 'MSI',
                'pro_description' => 'CPU: AMD Ryzen 7 7730U
Screen: 15.6 IPS (1920 x 1080)
RAM: 1 x 16GB DDR4 3200MHz
Graphics: Onboard AMD Radeon Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 40 Wh Integrated Battery
Weight: 1.7kg
Standard: AMD
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 17,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'pro_id' => 310,
            'pro_name' => 'Laptop MSI Stealth 16 Studio A13VG-057VN (i9-13900H) (Blue)',
                'pro_brand' => 'MSI',
                'pro_description' => 'CPU: Intel Core i9-13900H
Screen: 16 IPS (3840 x 2400), 120Hz
RAM: 2 x 16GB DDR5 5200MHz
Graphics: RTX 4070 8GB GDDR6 / Intel Iris Xe Graphics
Storage: 2TB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell 99 Wh Integrated Battery
Weight: 2kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 17,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'pro_id' => 311,
            'pro_name' => 'Laptop MSI Modern 15 B12MO-628VN (i5-1235U/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'MSI',
                'pro_description' => 'CPU: Intel Core i5-1235U
Screen: 15.6 IPS (1920 x 1080)
RAM: 16GB Onboard DDR4 3200MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD /
Operating System: Windows 11 Home
Battery: 3 cell Integrated Battery
Weight: 1.75kg
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 17,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'pro_id' => 312,
                'pro_name' => 'Electrolux 8.5kg EDS854N3SB steam generator',
                'pro_brand' => 'Electrolux',
                'pro_description' => '- 8.5 kg drying capacity suitable for families of 3 - 5 people
- Steam drying technology dries clothes quickly, saving time
- Smart Sensor optimizes drying cycles, protecting clothes
- Reverse Tumbling technology reverses the drying direction, effectively reducing wrinkles
- Hygiene Care drying kills bacteria, protecting sensitive skin
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'pro_id' => 313,
            'pro_name' => 'Toshiba Inverter washing machine 10.5 Kg TW-BK115G4V (MG)',
                'pro_brand' => 'TOSHIBA',
                'pro_description' => '- Modern and luxurious design with touch-sensitive keys equipped with bilingual English-Vietnamese
- Nano Ultra Fine Bubble super air bubble technology helps air bubbles penetrate quickly and deeply into fabric fibers
- Steam Care technology sterilizes 99.99% and removes odors
- Integrated Origin Inverter technology helps save electricity
- Greatwaves technology preserves the color of clothes
- Adding clothes while washing is extremely convenient
- Automatically restarts when power is restored',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'pro_id' => 314,
            'pro_name' => 'Toshiba Inverter washing machine 13 kg AW-DUM1400LV (MK)',
                'pro_brand' => 'TOSHIBA',
                'pro_description' => '- Minimalist design with a washing capacity of 13kg suitable for families with 7 members or more
- Integrated with 8 prominent washing programs
- UFB NANO super bubble technology swiftly dissolves detergent
- Greatwaves super gloss washing technology
- Equipped with many conveniences: Timer for delayed washing, drum cleaning, automatic restart when power is resumed, Child lock',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'pro_id' => 315,
            'pro_name' => 'Toshiba 8 kg washing machine AW-M905BV(MK)',
                'pro_brand' => 'TOSHIBA',
                'pro_description' => 'Simple, refined design with a washing capacity of 8kg suitable for 3 - 5 members
- Integrated with 8 convenient washing programs
- Fuzzy Logic inference technology adjusts water appropriately during washing
- Convenient features: Delayed washing, Child lock, Hydraulic lid to prevent hand trapping, Automatic restart when power is resumed, Drum cleaning',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'pro_id' => 316,
                'pro_name' => 'LG Inverter 12 kg washing machine FV1412S3B',
                'pro_brand' => 'LG',
                'pro_description' => '- Touch control panel with rotary dial
- Exterior made of electrostatically painted metal
- 14 diverse washing programs available
- Steam washing technology
- AI DD technology detects load, softness, and selects optimal motion for fabric
- TurboWash360 washing technology reaches every garment position
- Inverter technology for energy savings
- Remote control of the washing machine via LG ThinQ app
- Automatic restart when power is restored
- Add clothes during the washing process',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'pro_id' => 317,
                'pro_name' => 'LG TurboDrum Inverter 11.5 kg washing machine T2351VSAB',
                'pro_brand' => 'LG',
                'pro_description' => '- Equipped with 8 washing programs
- Punch+3 water punching technology
- Reduce clothing tangling with Turbo Drum technology
- Smart Inverter energy-saving technology
- PreWash+ feature for pre-washing
- Combination of 3 mixing motions: rotation, spinning, and flipping to clean clothes effectively
- Delayed washing feature
- Child lock
- Smart Diagnosis error diagnosis
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'pro_id' => 318,
                'pro_name' => 'LG Inverter 9 kg washing machine FV1409S4M',
                'pro_brand' => 'LG',
                'pro_description' => '- Washing drum made of stainless steel
- Convenient touch buttons combined with a rotary knob
- Equipped with 14 washing programs
- Inverter technology for smooth operation and energy savings
- AI DD washing technology protects fabric fibers
- Steam washing technology
- Remote control via the LG ThinQ app
',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'pro_id' => 319,
                'pro_name' => 'Galanz DC-80S5C condenser dryer',
                'pro_brand' => 'Galanz',
                'pro_description' => '- Compact, elegant, and sophisticated design
- Equipped with 15 automatic drying programs to meet various drying needs
- Wrinkle prevention feature, reverse tumbling reduces wrinkles, protects clothing durability
- Sensor Dryer humidity sensor adjusts drying temperature accordingly
- Flexible 24-hour delayed drying and child lock for safety
- Convenient interior light for easy observation',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'pro_id' => 320,
                'pro_name' => 'Samsung Inverter 9 kg washing machine WW90T634DLN/SV',
                'pro_brand' => 'Samsung',
                'pro_description' => '- Modern design, minimalist style
- Equipped with AI Control panel for clear, easy-to-use display
- Integrated with 22 convenient washing programs
- Eco Bubble technology helps dissolve detergent effectively
- Hygiene Steam function for antibacterial steam washing
- Equipped with various features: Child lock, delayed washing, self-cleaning drum ...',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'pro_id' => 321,
                'pro_name' => 'Samsung Inverter washing machine 9.5 kg WA95CG4545BDSV',
                'pro_brand' => 'Samsung',
                'pro_description' => '- Maximum washing capacity of 9.5 kg, integrated with 10 automatic washing programs
- Eco Bubble bubble washing technology removes tough stains easily
- Intensive Wash technology helps soap penetrate quickly
- Digital Inverter technology ensures smooth device operation
- Automatic drum cleaning keeps the drum clean',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'pro_id' => 322,
                'pro_name' => 'LG Inverter 12 kg washing machine FV1412S3BA',
                'pro_brand' => 'LG',
                'pro_description' => '- Suitable for families with over 7 members with a 12 kg washing capacity
- Energy-saving and smooth operation with Inverter technology.
- AI DD technology optimizes washing programs and washing time.
- TurboWash360 technology ensures effective cleaning.
- Hot water usage helps eliminate bacteria and allergens on clothes.
- Remote control support via the LG ThinQ app on the phone',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'pro_id' => 323,
                'pro_name' => 'LG Inverter 11 kg washing machine FV1411S4WA',
                'pro_brand' => 'LG',
                'pro_description' => '- Modern, luxurious design
- Equipped with 14 washing programs
- AI DD technology protects fabric fibers
- Steam washing technology (front-loading)
- TurboWash energy-saving washing technology
- Equipped with various features: Child lock, add items during washing, delayed washing',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'pro_id' => 324,
            'pro_name' => 'Toshiba 8 Kg condenser dryer TD-K90MEV (SK) (Silver)',
                'pro_brand' => 'TOSHIBA',
                'pro_description' => '- Drying capacity: 8.0 kg
- Condensation drying technology
- SenseDry technology preserves color, saves electricity
- Reverse tumbling technology reduces wrinkles
- Interior lighting for the drying drum',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'pro_id' => 325,
                'pro_name' => 'LG Inverter 10 kg washing machine FV1410S4W1',
                'pro_brand' => 'LG',
                'pro_description' => '- Modern white design
- Suitable for families of 5 - 7 people
- Energy-saving Inverter
- 14 washing programs
- Fabric fibers are protected and color-fast thanks to AI DD
- TurboWash for quick washing
- Add items during washing
- Remote control via the LG ThinQ app',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'pro_id' => 326,
            'pro_name' => 'Toshiba 10 kg heat pump dryer TD-BK110GHV(MK)',
                'pro_brand' => 'TOSHIBA',
                'pro_description' => 'Toshiba clothes dryer with front-loading design, exuding luxury
Origin Inverter technology and BLDC motor for energy efficiency and quiet operation
Heat pump drying technology for energy savings, effectively protecting clothing fibers
Equipped with ultraviolet antibacterial light, safeguarding skin and health
Reverse tumbling technology to prevent wrinkles and minimize clothing tangling
Stainless steel drum for robustness and easy maintenance',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'pro_id' => 327,
                'pro_name' => 'Aqua washing machine 10 Kg AQW-U100FT.BK',
                'pro_brand' => 'AQUA',
                'pro_description' => '- Tempered glass lid with overflow edges
- Machine lid closing reducer
- Ultrasonic waves
- Nano Ag+ to limit bacteria
- Multi-directional water flow',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'pro_id' => 328,
                'pro_name' => 'Panasonic Inverter washing machine 10.5 kg NA-V105FR1BV',
                'pro_brand' => 'Panasonic',
                'pro_description' => 'Washing capacity of 10.5 kg - drying 2 kg, meeting the needs during rainy days for families of up to 7 members.
Bacteria elimination and allergen removal with StainMaster+ hot water washing technology.
Clothes drying support with air circulation technology.
Smart connectivity, remote control via smartphone.
Automatic drum cleaning feature, eliminating detergent residue and odors in the drum.',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'pro_id' => 329,
                'pro_name' => 'Samsung Inverter 10kg washing machine WW10TA046AE/SV',
                'pro_brand' => 'Samsung',
                'pro_description' => 'EcoBubble™ for deep cleaning, fabric protection
Hygiene Steam kills 99.9% of bacteria, prevents allergies
Quiet Digital Inverter motor',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'pro_id' => 330,
            'pro_name' => 'Galanz Vented Dryer 8 Kg DV-80T5C(W) (White)',
                'pro_brand' => 'Galanz',
                'pro_description' => '- Drying capacity of 8 kg suitable for families of 3 - 5 people - Easy temperature setting function customizable according to needs - Flexible timer function adjusts drying time - Reverse tumbling technology effectively reduces clothing wrinkles',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'pro_id' => 331,
                'pro_name' => 'LG Inverter 10 kg washing machine FV1410S5W',
                'pro_brand' => 'LG',
                'pro_description' => '- Washing capacity of 10 kg, approximately 15 - 16 sets of clothes per wash
- Better clothing protection up to 18% with AI DD sensor technology
- Clothing protection, minimizing damage with 6 Motion DD washing technology
- Steam washing kills bacteria, prevents allergies
- Child lock feature ensures safety',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 25,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'pro_id' => 332,
            'pro_name' => 'Laptop Acer Predator Helios 18 PH18-71-94SJ (NH.QKRSV.002) (i9-13900HX) (Black)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i9-13900HX
Display: 18 IPS (2560 x 1600), 240Hz
RAM: 2 x 16GB DDR5 4800MHz
Graphics: RTX 4080 12GB GDDR6 / Intel UHD Graphics 770
Storage: 1TB SSD + 1TB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 4 cell 90 Wh integrated battery
Weight: 3.1kg
Non-EVO standard',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'pro_id' => 333,
            'pro_name' => 'Laptop Acer Predator Helios Neo PHN16-71-74BA (NH.QLUSV.004) (i7-13700HX) (Black)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i7-13700HX
Display: 16 IPS (2560 x 1600), 165Hz
RAM: 2 x 8GB DDR5 4800MHz
Graphics: RTX 4060 8GB GDDR6 / Intel UHD Graphics 770
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 4 cell 90 Wh integrated battery
Weight: 2.6kg
Non-EVO standard',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'pro_id' => 334,
            'pro_name' => 'Laptop ACER Predator Triton 300 PT315-53-7440 (NH.QDRSV.003) (i7-11800H/RAM 8GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i7-11800H
Display: 15.6 IPS (2560 x 1440), 165Hz
RAM: 8GB DDR4 3200MHz
Graphics: RTX 3050Ti 4GB GDDR6 / Intel UHD Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell 59 Wh integrated battery
Weight: 2kg
Non-EVO standard',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'pro_id' => 335,
            'pro_name' => 'Laptop ACER Predator Helios 16 PH16-71-72BV (NH.QJRSV.001) (i7-13700HX/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i7-13700HX
Display: 16 IPS (2560 x 1600), 240Hz
RAM: 2 x 8GB DDR5 4800MHz
Graphics: RTX 4070 8GB GDDR6 / Intel UHD Graphics 770
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 4 cell 90 Wh integrated battery
Weight: 2.6kg
Non-EVO standard',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'pro_id' => 336,
            'pro_name' => 'Laptop ACER Predator Helios Neo PHN16-71-7460 (NH.QLTSV.004) (i7-13700HX/RAM 8GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i7-13700HX
Screen: 16 IPS (2560 x 1600), 165Hz
RAM: 1 x 8GB DDR5 4800MHz
Graphics: RTX 4050 6GB GDDR6 / Intel UHD Graphics 770
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 4 cell 90 Wh Integrated Battery
Weight: 2.6kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'pro_id' => 337,
            'pro_name' => 'Laptop ACER Predator Triton 500 SE PT516-52s-75E3 (NH.QFQSV.001) (i7-12700H/RAM 16GB/1TB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i7-12700H
Screen: 16 IPS (2560 x 1600), 240Hz
RAM: 16GB LPDDR5
Graphics: RTX 3070Ti 8GB GDDR6 / Intel Iris Xe Graphics
Storage: 1TB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 4 cell 99 Wh Integrated Battery
Weight: 2.4kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'pro_id' => 338,
            'pro_name' => 'Laptop ACER Predator Helios 300 PH315-55-76KG (NH.QGPSV.001) (i7-12700H/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i7-12700H
Screen: 15.6 IPS (2560 x 1440), 165Hz
RAM: 2 x 8GB DDR5 4800MHz
Graphics: RTX 3060 6GB GDDR6 / Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 4 cell 90 Wh
Weight: 2.4kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'pro_id' => 339,
            'pro_name' => 'Laptop ACER Swift 14 SF14-71T-75CV (NX.KERSV.003) (i7-13700H/RAM 32GB/1TB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i7-13700H
Screen: 14 IPS (2560 x 1600)
RAM: 32GB LPDDR5 4800MHz
Graphics: Onboard Intel Iris Xe Graphics
Storage: 1TB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 56 Wh Integrated Battery
Weight: 1.2kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'pro_id' => 340,
            'pro_name' => 'Laptop ACER Gaming Nitro V ANV15-51-72VS (i7-13620H/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i7-13620H
Screen: 15.6 IPS (1920 x 1080),144Hz
RAM: 2 x 8GB DDR5 5200MHz
Graphics: RTX 2050 4GB GDDR6 / Intel UHD Graphics 770
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell 57 Wh Integrated Battery
Weight: 2.1kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'pro_id' => 341,
            'pro_name' => 'Laptop ACER Predator Helios 16 PH16-71-94N1 (NH.QJSSV.002) (i9-13900HX/RAM 32GB/2TB SSD/ Windows 11)',
                'pro_brand' => 'ACER',
                'pro_description' => 'CPU: Intel Core i9-13900HX
Screen: 16 IPS (2560 x 1600), 240Hz
RAM: 2 x 16GB DDR5 4800MHz
Graphics: RTX 4080 12GB GDDR6 / Intel UHD Graphics 770
Storage: 1TB SSD + 1TB SSD M.2 NVMe /
Operating System: Windows 11 Home SL
Battery: 4 cell 90 Wh Integrated Battery
Weight: 2.6kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 13,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'pro_id' => 342,
            'pro_name' => 'Laptop ASUS TUF Gaming A15 FA507NV-LP111W (Ryzen 5 7535HS/RAM 16GB/1TB SSD/ Windows 11)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: AMD Ryzen 5 7535HS
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 2 x 8GB DDR5 4800MHz
Graphics: RTX 4060 8GB GDDR6 / AMD Radeon 660M
Storage: 1TB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell 90 Wh Integrated Battery
Weight: 2.2kg
Standard: Non-EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'pro_id' => 343,
            'pro_name' => 'Laptop ASUS Expertbook B5 B5302CEA-L50916W (i5-1135G7/RAM 8GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: Intel Core i5-1135G7
Screen: 13.3 (1920 x 1080)
RAM: 8GB Onboard DDR4
Graphics: Onboard Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell 66 Wh Integrated Battery
Weight: 1.1kg
Standard: Intel EVO',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'pro_id' => 344,
            'pro_name' => 'Laptop ASUS TUF Gaming FA507RM-HN018W (Ryzen 7 6800H/RAM 8GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: AMD Ryzen 7 6800H
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 8GB DDR5 4800MHz
Graphics: RTX 3060 6GB GDDR6 / AMD Radeon 680M
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell 90 Wh
Weight: 2.2kg
Standard: AMD',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'pro_id' => 345,
            'pro_name' => 'Laptop ASUS TUF Gaming FA507RR-HN835W (Ryzen 7 6800H/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: AMD Ryzen 7 6800H
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 16GB DDR5 4800MHz
Graphics: RTX 3070 8GB GDDR6 / AMD Radeon 680M
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell 90 Wh
Weight: 2.2kg
Standard: AMD',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'pro_id' => 346,
            'pro_name' => 'Laptop ASUS TUF Gaming F15 FX507ZV4-LP042W (i7-12700H/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: Intel Core i7-12700H
Screen: 15.6 IPS (1920 x 1080)
RAM: 2 x 8GB DDR4 3200MHz
Graphics: RTX 4060 8GB GDDR6 / Intel Iris Xe Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell 90 Wh Integrated Battery
Weight: 2.2kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'pro_id' => 347,
            'pro_name' => 'Laptop ASUS ROG Zephyrus G14 GA402NJ-L4056W (Ryzen 7 7735HS/RAM 16GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: AMD Ryzen 7 7735HS
Screen: 14 IPS (1920 x 1200),144Hz
RAM: 16GB (8GB + 8GB Onboard) DDR5 4800MHz
Graphics: RTX 3050 6GB GDDR6 / AMD Radeon 680M
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell 76 Wh Integrated Battery
Weight: 1.7kg
Standard: AMD',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'pro_id' => 348,
            'pro_name' => 'Laptop ASUS TUF Gaming FA506ICB-HN355W (Ryzen 5 4600H/RAM 8GB/RTX 3050/512GB SSD/ Windows 11)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: AMD Ryzen 5 4600H
Screen: 15.6 IPS (1920 x 1080),144Hz
RAM: 1 x 8GB DDR4 3200MHz
Graphics: RTX 3050 4GB GDDR6 / AMD Radeon Graphics
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3 cell 48 Wh Integrated Battery
Weight: 2.3kg
Standard: AMD',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'pro_id' => 349,
            'pro_name' => 'Laptop ASUS TUF Gaming A15 FA507NV-LP046W (Ryzen 7 7735HS/RAM 8GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: AMD Ryzen 7 7735HS
Screen: 15.6 IPS (1920 x 1080),144Hz
RAM: 1 x 8GB DDR5 4800MHz
Graphics: RTX 4060 8GB GDDR6 / AMD Radeon 680M
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 4 cell 90 Wh Integrated Battery
Weight: 2.2kg
Standard: AMD',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'pro_id' => 350,
            'pro_name' => 'Laptop Asus TUF Gaming F15 FX506HF-HN014W (i5-11400H) (Black)',
                'pro_brand' => 'ASUS',
                'pro_description' => 'CPU: Intel Core i7-11800H
Screen: 15.6 IPS (1920 x 1080), 144Hz
RAM: 1 x 8GB DDR4 3200MHz
Graphics: RTX 3050Ti 4GB GDDR6 / Intel UHD Graphics 750
Storage: 512GB SSD M.2 NVMe /
Operating System: Windows 11 Home
Battery: 3-cell 48 Wh Integrated Battery
Weight: 2.3kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'pro_id' => 351,
            'pro_name' => 'Laptop ASUS TUF Gaming FX506HE-HN377W (i7-11800H/RAM 8GB/512GB SSD/ Windows 11)',
                'pro_brand' => 'ASUS',
                'pro_description' => '- CPU: Intel Core i7-11800H
- Display: 15.6 IPS (1920 x 1080),144Hz
- RAM: 1 x 8GB DDR4 3200MHz
- Graphics: RTX 3050Ti 4GB GDDR6 / Intel UHD Graphics 750
- Storage: 512GB SSD M.2 NVMe /
- Operating System: Windows 11 Home
- Battery: 3 cell 48 Wh Integrated Battery
- Weight: 2.3kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'pro_id' => 352,
            'pro_name' => 'Laptop Asus TUF Gaming F15 FX506HE-HN075W (i7-11800H) (Black)',
                'pro_brand' => 'ASUS',
                'pro_description' => '- CPU: Intel Core i7-11800H
- Display: 15.6 IPS (1920 x 1080),144Hz
- RAM: 2 x 8GB DDR4 3200MHz
- Graphics: RTX 3050Ti 4GB GDDR6 / Intel UHD Graphics 750
- Storage: 1TB SSD M.2 NVMe /
- Operating System: Windows 11 Home
- Battery: 3 cell 48 Wh Integrated Battery
- Weight: 2.3kg',
                'pro_price' => 999999.99,
                'pro_quantity' => 0,
                'pro_status' => 0,
                'category_id' => 14,
                'is_featured' => 0,
                'pro_img' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}