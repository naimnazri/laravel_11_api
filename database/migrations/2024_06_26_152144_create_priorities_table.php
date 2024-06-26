<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('priorities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description');
            $table->timestamps();
        });

        DB::table('priorities')->insert([
            [
                'name' => 'high',
                'description' => 'High priority',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'medium',
                'description' => 'Medium priority',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'low',
                'description' => 'Low priority',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('priorities');
    }

};
