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
        Schema::create('driver_schedules', function (Blueprint $table) {
            $table = $this->defaultTableColumns($table);

            $table->unsignedBigInteger('driver_id');
            $table->datetime('start_time');
            $table->datetime('end_time');

            //foreign keys
            $table->foreign('driver_id')->references('id')->on('drivers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_schedules');
    }
};
