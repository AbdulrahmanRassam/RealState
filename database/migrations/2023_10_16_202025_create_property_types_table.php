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
        Schema::create('property_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        \App\Models\PropertyType::create( [
            'name' => 'House',
        ]);
        \App\Models\PropertyType::create( [
            'name' => 'Apartment',
        ]);
        \App\Models\PropertyType::create( [
            'name' => 'Office',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_types');
    }
};
