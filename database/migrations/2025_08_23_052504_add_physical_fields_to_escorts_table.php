<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('escorts', function (Blueprint $table) {
        $table->string('height')->nullable()->after('age');
        $table->string('bust')->nullable()->after('height');
        $table->string('nationality')->nullable()->after('languages_spoken');
        $table->string('orientation')->nullable()->after('nationality');
        $table->string('ethnicity')->nullable()->after('orientation');
        $table->string('shaved')->nullable()->after('ethnicity');
        $table->string('hair_color')->nullable()->after('shaved');
        $table->boolean('smokes')->default(false)->after('hair_color');
        $table->decimal('outcall_rate', 10, 2)->nullable()->after('rate_per_hour');
    });
}

public function down()
{
    Schema::table('escorts', function (Blueprint $table) {
        $table->dropColumn([
            'height', 'bust', 'nationality', 'orientation', 'ethnicity',
            'shaved', 'hair_color', 'smokes', 'outcall_rate'
        ]);
    });
}

};
