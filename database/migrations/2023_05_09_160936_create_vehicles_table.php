<?php

use App\Trait\DatabaseTableTrait;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use DatabaseTableTrait;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table = $this->defaultTableColumns($table);
            $table->string('registration_number')->unique();
            $table->unsignedBigInteger('vehicle_type_id');
            $table->integer('capacity');

            //foreign keys
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
