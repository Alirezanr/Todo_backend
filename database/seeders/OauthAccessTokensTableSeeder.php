<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_access_tokens')->delete();
        
        \DB::table('oauth_access_tokens')->insert(array (
            0 => 
            array (
                'id' => '3a7597a2885b358010c0b72ef2438bfd6a80465cff7ca8a9556881b3b99f7fa01100b2bfabcbeeed',
                'user_id' => NULL,
                'client_id' => 3,
                'name' => 'Access Token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-06-11 11:17:32',
                'updated_at' => '2021-06-11 11:17:32',
                'expires_at' => '2022-06-11 11:17:32',
            ),
        ));
        
        
    }
}