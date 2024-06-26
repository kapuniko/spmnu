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
        Schema::create('work_objects', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('address')->nullable();
            $table->text('contragent_id')->nullable();
            $table->timestamp('date_created')->nullable();
            $table->dateTime('deadline')->nullable();
            $table->bigInteger('creator')->nullable();
            $table->text('status')->nullable();
            $table->text('description')->nullable();
            $table->integer('performer')->nullable();
            $table->json('members')->nullable();
            $table->json('files')->nullable();
            $table->json('contract_files')->nullable();
            $table->json('project_files')->nullable();
            $table->json('chat')->nullable();
            $table->boolean('is_archived')->default('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_objects');
    }
};
