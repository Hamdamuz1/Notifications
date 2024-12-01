<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageUrlToNotificationsTable extends Migration
{
    public function up()
    {
        Schema::table('notifications', function (Blueprint $table) {
            // image_url ustunini qo'shish
            $table->string('image_url')->nullable();
        });
    }

    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            // image_url ustunini o'chirish
            $table->dropColumn('image_url');
        });
    }
}
