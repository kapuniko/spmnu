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
        Schema::create('contragent_persons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contragent_id')->nullable();
            $table->text('post')->nullable();
            $table->text('firstname')->nullable();
            $table->text('secondname')->nullable();
            $table->text('surname')->nullable();
            $table->text('initials')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contragents_persons');
    }
};
