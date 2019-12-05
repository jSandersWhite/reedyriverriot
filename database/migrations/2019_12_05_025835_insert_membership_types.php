<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertMembershipTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $membershipTypes = [
            [
                'name' => 'Bronze',
                'description' => '2020 Reedy River Riot Membership, 10% off the Greenville Triumph online store & an exclusive Reedy River Riot supporters scarf - $5/game parking in the Riot only lot on game day',
                'price' => 25.00
            ],
            [
                'name' => 'Silver',
                'description' => 'Includes Bronze perks and a 2020 Reedy River Riot member t-shirt - $5/game parking in the Riot only lot on game day',
                'price' => 50.00
            ],
            [
                'name' => 'Gold',
                'description' => 'Includes Bronze & Silver perks - Free parking in the Riot only lot on game day',
                'price' => 75.00
            ],
            [
                'name' => 'Diamond',
                'description' => 'Includes Bronze, Silver, & Gold perks and an amazing exclusive perk (details coming soon)',
                'price' => 100.00
            ],
            [
                'name' => 'Youth',
                'description' => 'We can’t forget the kids! Includes Reedy River Riot 
                membership and a scarf - Must be 18 or under!*',
                'price' => 15.00
            ]
        ];

        foreach ($membershipTypes as $type) {
            DB::table('membership_type')->insert([
                'name' => $type['name'],
                'description' => $type['description'],
                'price' => $type['price']
            ]);
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
