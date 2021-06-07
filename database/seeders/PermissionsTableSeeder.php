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
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 05:13:54',
                'updated_at' => '2021-01-19 05:13:54',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 05:13:55',
                'updated_at' => '2021-01-19 05:13:55',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 05:13:55',
                'updated_at' => '2021-01-19 05:13:55',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-19 05:14:04',
                'updated_at' => '2021-01-19 05:14:04',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-19 05:14:04',
                'updated_at' => '2021-01-19 05:14:04',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-19 05:14:04',
                'updated_at' => '2021-01-19 05:14:04',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-19 05:14:04',
                'updated_at' => '2021-01-19 05:14:04',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-19 05:14:04',
                'updated_at' => '2021-01-19 05:14:04',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-19 05:14:05',
                'updated_at' => '2021-01-19 05:14:05',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-19 05:14:05',
                'updated_at' => '2021-01-19 05:14:05',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-19 05:14:05',
                'updated_at' => '2021-01-19 05:14:05',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-19 05:14:05',
                'updated_at' => '2021-01-19 05:14:05',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-19 05:14:05',
                'updated_at' => '2021-01-19 05:14:05',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-19 05:14:06',
                'updated_at' => '2021-01-19 05:14:06',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-19 05:14:07',
                'updated_at' => '2021-01-19 05:14:07',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-19 05:14:07',
                'updated_at' => '2021-01-19 05:14:07',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-19 05:14:07',
                'updated_at' => '2021-01-19 05:14:07',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-19 05:14:07',
                'updated_at' => '2021-01-19 05:14:07',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-01-19 05:14:10',
                'updated_at' => '2021-01-19 05:14:10',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-19 06:17:21',
                'updated_at' => '2021-01-19 06:17:21',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-19 06:17:21',
                'updated_at' => '2021-01-19 06:17:21',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-19 06:17:21',
                'updated_at' => '2021-01-19 06:17:21',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-19 06:17:21',
                'updated_at' => '2021-01-19 06:17:21',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-19 06:17:21',
                'updated_at' => '2021-01-19 06:17:21',
            ),
        ));
        
        
    }
}