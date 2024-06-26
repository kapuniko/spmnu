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
        Schema::create('tasks_log', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('task_id');
            $table->text('action');
            $table->jsonb('data')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    //в самой таблице потом выставить правило для crated_at чтобы DEFAULT CURRENT_TIMESTAMP

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks_log');
    }
};
