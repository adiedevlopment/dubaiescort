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
        $table->boolean('vip')->default(false)->after('status');
    });
}

public function down()
{
    Schema::table('escorts', function (Blueprint $table) {
        $table->dropColumn('vip');
    });
}

};
