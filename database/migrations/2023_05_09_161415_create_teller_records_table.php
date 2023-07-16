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
        Schema::create('teller_records', function (Blueprint $table) {
            $table = $this->defaultTableColumns($table);

            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->datetime('dispatch_time');
            $table->datetime('terminal_exit_time');

            //foreign keys
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teller_records');
    }
};
