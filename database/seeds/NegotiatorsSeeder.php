<?php

use App\Negotiators;
use Illuminate\Database\Seeder;

class NegotiatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Negotiators::class, 10)->create();
    }
}
