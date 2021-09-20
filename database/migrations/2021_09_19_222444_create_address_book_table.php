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
            $table->string('search_type', 5)->nullable();
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('address_line3')->nullable();
            $table->string('address_line4')->nullable();
            $table->string('postal_code', 15)->nullable();
            $table->string('city', 25)->nullable();
            $table->string('country', 25)->nullable();
            $table->string('state', 3)->nullable();
            $table->string('phone_prefix', 6)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('email')->nullable();


            $table->timestamps();
            $table->softDeletes();
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
