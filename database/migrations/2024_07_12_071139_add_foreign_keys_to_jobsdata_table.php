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
        Schema::table('jobsdata', function (Blueprint $table) {
            $table->foreign(['company_id'], 'jobsdata_ibfk_1')->references(['id'])->on('companies')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobsdata', function (Blueprint $table) {
            $table->dropForeign('jobsdata_ibfk_1');
        });
    }
};