<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_code');
            $table->string('vat_code');
            $table->string('country', 80)->nullable(true);
            $table->string('city', 80)->nullable(false)->index();
            $table->string('post_code', 7)->nullable(true)->index();
            $table->string('street', 255)->nullable(false)->index();
            $table->string('house', 10)->nullable(false);
            $table->string('flat', 10)->nullable(true);
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
        Schema::dropIfExists('company');
    }
}
