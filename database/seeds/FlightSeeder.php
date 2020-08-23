<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->delete();
        DB::table('flights')->insert([
            [
                'user_id' => 1,
                'airline_id' => 1,
                'flightNumber' => 'QF400',
                'departurePort' => 'MEL',
                'arrivalPort' => 'SDY',
                'departureTime' => Carbon::now(),
                'arrivalTime' => Carbon::now()->add(1, 'day'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'airline_id' => 2,
                'flightNumber' => 'EM120',
                'departurePort' => 'SDY',
                'arrivalPort' => 'MEL',
                'departureTime' => Carbon::now(),
                'arrivalTime' => Carbon::now()->add(1, 'day'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'airline_id' => 3,
                'flightNumber' => 'CX500',
                'departurePort' => 'SDY',
                'arrivalPort' => 'MEL',
                'departureTime' => Carbon::now(),
                'arrivalTime' => Carbon::now()->add(1, 'day'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
