<?php

use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('packages')->insert([
          'sender_id' => int_random(2),
          'receiver_id' => int_random(3),
          'delivery_method' => "Standard",
          'delivery_status' => "Onderweg";
      ]);

      DB::table('packages')->insert([
          'sender_id' => int_random(1),
          'receiver_id' => int_random(2),
          'delivery_method' => "Express",
          'delivery_status' => "In verwerking";
          'message' => "Leg maaar aan de deur."
      ]);

      DB::table('packages')->insert([
          'sender_id' => int_random(3),
          'receiver_id' => int_random(1),
          'delivery_method' => "Standard",
          'delivery_status' => "Afgeleverd";
      ]);
    }
}
