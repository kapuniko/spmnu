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
        Schema::create('contragents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contragent_type_id');
            $table->text('name');
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('address')->nullable();
            $table->text('iin')->nullable();
            $table->text('rnn')->nullable();
            $table->text('bin')->nullable();
            $table->text('gos_reg')->nullable();
            $table->text('bank_detail')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contragents');
    }
};
