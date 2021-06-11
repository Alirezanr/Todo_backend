<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'Laravel Personal Access Client',
                'secret' => '1XBMBRKuCd0ghbRKEzWXS5Oa9dQ0HcXzB1omXfSD',
                'provider' => NULL,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2021-06-11 11:17:04',
                'updated_at' => '2021-06-11 11:17:04',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'Laravel Password Grant Client',
                'secret' => 'uNMESigjnfsZzwxusdMNHPjRmMtpfHFONTfuaOvn',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2021-06-11 11:17:04',
                'updated_at' => '2021-06-11 11:17:04',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => NULL,
                'name' => 'Laravel Personal Access Client',
                'secret' => 'R3VHqCYJdiK7tuVKoCUct8AcvEBNAYQrhI8ptLWK',
                'provider' => NULL,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2021-06-11 11:17:13',
                'updated_at' => '2021-06-11 11:17:13',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => NULL,
                'name' => 'Laravel Password Grant Client',
                'secret' => '4HAiplI8AAt2Wgy4BGwPjv4NA47ibryKOHqxCCps',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2021-06-11 11:17:13',
                'updated_at' => '2021-06-11 11:17:13',
            ),
        ));
        
        
    }
}