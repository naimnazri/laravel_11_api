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
        Schema::create('vacancy', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title');
            $table->string('type');
            $table->string('description');
            $table->string('location', 100);
            $table->string('salary', 10);
            $table->string('company_name', 100);
            $table->string('company_description');
            $table->string('company_email', 100);
            $table->string('company_phone', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancy');
    }
};
