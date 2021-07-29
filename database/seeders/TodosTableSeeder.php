<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('todos')->delete();

        \DB::table('todos')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 3,
                'title' => 'Maiores praesentium.',
                'description' => 'Optio nihil voluptatem omnis dolorem facilis porro dolorem consequuntur adipisci error et fuga ipsam qui deleniti ipsam ut iusto praesentium repudiandae minus fugiat quam culpa aut.',
                'priority' => 'medium',
                'image_url' => NULL,
                'location_lang' => '485',
                'location_lat' => '366',
                'created_at' => '2021-06-11 11:10:39',
                'updated_at' => '2021-06-11 11:10:39',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 1,
                'title' => 'Qui sit soluta rerum.',
                'description' => 'Saepe delectus autem quisquam voluptas facilis in officia ea aut eligendi qui distinctio veritatis omnis eveniet in qui culpa sapiente neque deserunt ut est enim architecto voluptas sit facere aut.',
                'priority' => 'medium',
                'image_url' => NULL,
                'location_lang' => '380',
                'location_lat' => '326',
                'created_at' => '2021-06-11 11:10:39',
                'updated_at' => '2021-06-11 11:10:39',
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 3,
                'title' => 'Eveniet sapiente amet in.',
                'description' => 'Suscipit atque nobis sed ut beatae quam odit modi suscipit quaerat aut adipisci et cupiditate beatae sed aperiam ea nostrum minus earum repellendus deserunt veritatis qui facilis veniam in.',
                'priority' => 'medium',
                'image_url' => NULL,
                'location_lang' => '261',
                'location_lat' => '386',
                'created_at' => '2021-06-11 11:10:39',
                'updated_at' => '2021-06-11 11:10:39',
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 1,
                'title' => 'Ea aut ducimus doloribus.',
                'description' => 'Reprehenderit quia rem in beatae deserunt dolor qui et dignissimos est quibusdam nihil voluptates voluptates aut itaque consequatur dolores.',
                'priority' => 'medium',
                'image_url' => NULL,
                'location_lang' => '408',
                'location_lat' => '262',
                'created_at' => '2021-06-11 11:10:39',
                'updated_at' => '2021-06-11 11:10:39',
            ),
            4 =>
            array (
                'id' => 5,
                'user_id' => 1,
                'title' => 'Sunt ad impedit.',
                'description' => 'Nostrum totam distinctio sed sunt sed enim eius est aliquid nesciunt enim atque aliquid voluptatibus officia delectus officia pariatur corporis eum sunt excepturi sequi provident sed.',
                'priority' => 'medium',
                'image_url' => NULL,
                'location_lang' => '479',
                'location_lat' => '487',
                'created_at' => '2021-06-11 11:10:39',
                'updated_at' => '2021-06-11 11:10:39',
            ),
            5 =>
            array (
                'id' => 6,
                'user_id' => 2,
                'title' => 'Culpa magnam id.',
                'description' => 'Molestias saepe eum est fugit maxime rerum voluptatem est explicabo aut autem aliquid nobis cumque voluptate architecto neque et ipsa consequuntur non nesciunt sit modi.',
                'priority' => 'medium',
                'image_url' => NULL,
                'location_lang' => '425',
                'location_lat' => '393',
                'created_at' => '2021-06-11 11:10:39',
                'updated_at' => '2021-06-11 11:10:39',
            )
        ));


    }
}
