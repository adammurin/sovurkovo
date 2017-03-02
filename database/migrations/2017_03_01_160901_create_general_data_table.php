<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('meta_title');
            $table->text('meta_desc');
            $table->text('meta_keywords');
            $table->string('headline');
            $table->string('address_name');
            $table->string('address_street');
            $table->string('address_city');
            $table->string('address_zip');
            $table->string('company_id');
            $table->string('company_vat');
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('company_web');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general');
    }
}
