<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parfumes', function (Blueprint $table) {
            $table->enum('type', ['fresh', 'floral', 'oriental', 'woody'])->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parfumes', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
