<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InsertUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->string('title');
        });
        $users = [
            [
                'name' => 'Andrew Phillips',
                'email' => 'andrew@reedyriverriot.com',
                'title' => 'President',
            ],
            [
                'name' => 'Ryan Nowland',
                'email' => 'ryan@reedyriverriot.com',
                'title' => 'Vice President',
            ],
            [
                'name' => 'Rebecca Krouchik',
                'email' => 'becca@reedyriverriot.com',
                'title' => 'Community and Membership Chair',
            ],
            [
                'name' => 'Jonathan Anderson',
                'email' => 'jonathan@reedyriverriot.com',
                'title' => 'Marketing Chair',
            ],
            [
                'name' => 'Jonah Deuerling',
                'email' => 'jonah@reedyriverriot.com',
                'title' => 'Matchday Chair',
            ],
            [
                'name' => 'James Sides',
                'email' => 'james@reedyriverriot.com',
                'title' => 'Event Chair',
            ],
            [
                'name' => 'Josh White',
                'email' => 'josh@reedyriverriot.com',
                'title' => 'Board Member-at-Large',
            ],
            [
                'name' => 'Charles Hill',
                'email' => 'chaz@reedyriverriot.com',
                'title' => 'Board Member-at-Large',
            ],
            [
                'name' => 'Tommy Chambers',
                'email' => 'tommy@reedyriverriot.com',
                'title' => 'Board Member-at-Large',
            ],
            [
                'name' => 'Andy Martin',
                'email' => 'andy@reedyriverriot.com',
                'title' => 'Board Member-at-Large',
            ],
            [
                'name' => 'Zach Ewen',
                'email' => 'zach@reedyriverriot.com',
                'title' => 'Board Member-at-Large'
            ]   
        ];

        foreach ($users as $user) {
            DB::table('user')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'title' => $user['title'],
                'password' => Hash::make('password')
            ]);
            echo $user['name'].PHP_EOL;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
