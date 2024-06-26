<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->text("description")->nullable();
            $table->bigInteger("updater")->nullable();
            $table->bigInteger("performer")->nullable();
            $table->text("status")->nullable();
            $table->text("tags")->nullable();
            $table->dateTime('deadline')->nullable();
            $table->bigInteger('notification_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
