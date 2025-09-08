<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::table('escorts', function (Blueprint $table) {
        $table->string('thumb1')->nullable();
        $table->string('thumb2')->nullable();
        $table->string('thumb3')->nullable();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('escorts', function (Blueprint $table) {
            //
        });
    }
};
