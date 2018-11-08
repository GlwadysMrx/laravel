<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('actors')->insert([
          [
            "name" => "Cillian",
            "surname" =>"Murphy",
          ],
          [
            "name" => "Tom",
            "surname" =>"Hardy",
          ],
          [
            "name" => "Evan",
            "surname" =>"Peters",
          ],
          [
            "name" => "Charlie",
            "surname" =>"Hunnam",
          ],
          [
            "name" => "Jake",
            "surname" =>"Johnson",
          ],
      ]);
    }
}
