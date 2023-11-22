<?php

use App\Models\organisators;
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
        Schema::create('organisators', function (Blueprint $table) {
            $table->id('org_id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        organisators::create([
            'name' => 'Passz',
            'description' => 'NyimNyam'
        ]);
        organisators::create([
            'name' => 'Possz',
            'description' => 'NyamNyam'
        ]);

        organisators::create([
            'name' => 'Pessz',
            'description' => 'NyimNyim'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisators');
    }
};
