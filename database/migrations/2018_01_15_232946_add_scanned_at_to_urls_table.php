<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddScannedAtToUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('urls', function (Blueprint $table) {
            $table->dateTime('scanned_at')->default(\Illuminate\Support\Carbon::parse('2017-01-01'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('urls', function (Blueprint $table) {
            $table->dropColumn('scanned_at');
        });
    }
}
