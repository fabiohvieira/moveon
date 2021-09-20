<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addressbook', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tax_id',50);
            $table->string('search_type', 5);
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('address_line3');
            $table->string('address_line4');
            $table->string('postal_code', 15);
            $table->string('city', 25);
            $table->string('country', 25);
            $table->string('state', 3);
            $table->string('phone_prefix', 6);
            $table->string('phone_number', 20);
            $table->string('email');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addressbook');
    }
}
