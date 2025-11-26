<?php

namespace Database\Seeders;

use App\Models\Policy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $policy = [
            [
                'privacy_policy' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis iure earum, eos placeat ratione consequuntur exercitationem rem sunt omnis facilis quam nam ad laborum repellat quae molestiae eligendi qui dignissimos',
                'terms_conditions' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis iure earum, eos placeat ratione consequuntur exercitationem rem sunt omnis facilis quam nam ad laborum repellat quae molestiae eligendi qui dignissimos',
                'refund_policy' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis iure earum, eos placeat ratione consequuntur exercitationem rem sunt omnis facilis quam nam ad laborum repellat quae molestiae eligendi qui dignissimos',
                'payment_policy' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'about_us' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'return_process' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            ]
        ];

        Policy::insert($policy);
    }
}
