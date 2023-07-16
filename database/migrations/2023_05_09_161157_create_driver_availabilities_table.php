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
        Schema::create('driver_availabilities', function (Blueprint $table) {
            $table = $this->defaultTableColumns($table);

            $table->unsignedBigInteger('driver_id');
            $table->date('availability_week_start_date');
            $table->date('availability_week_end_date');

            //foreign keys
            $table->foreign('driver_id')->references('id')->on('drivers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_availabilities');
    }
};
