<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addressbook')->insert([
            'search_type' => Str::random(2),
            'name' => Str::random(50),
            'tax_id' => Str::random(10),
            'address_line1' => Str::random(30),
            'address_line2' => Str::random(30),
            'address_line3' => Str::random(30),
            'address_line4' => Str::random(30),
            'postal_code' => Str::random(30),
            'city' => Str::random(30),
            'state' => Str::random(2),
            'country' => Str::random(2),
            'phone_prefix' => Str::random(2),
            'phone_number' => Str::random(10),
            'email' => Str::random(50),

        ]);
    }
}
