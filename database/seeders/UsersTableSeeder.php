<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tommie Ward III',
                'email' => 'dax96@example.com',
                'profile_image_url' => NULL,
                'email_verified_at' => '2021-06-11 11:10:39',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Sv6vGM0TkZ',
                'created_at' => '2021-06-11 11:10:39',
                'updated_at' => '2021-06-11 11:10:39',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Vidal Collins',
                'email' => 'jammie.hirthe@example.net',
                'profile_image_url' => NULL,
                'email_verified_at' => '2021-06-11 11:10:39',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'iSAiGEEbQ6',
                'created_at' => '2021-06-11 11:10:39',
                'updated_at' => '2021-06-11 11:10:39',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Carrie Effertz',
                'email' => 'edwin77@example.net',
                'profile_image_url' => NULL,
                'email_verified_at' => '2021-06-11 11:10:39',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'xzoxnYVOsB',
                'created_at' => '2021-06-11 11:10:39',
                'updated_at' => '2021-06-11 11:10:39',
            ),
        ));
        
        
    }
}