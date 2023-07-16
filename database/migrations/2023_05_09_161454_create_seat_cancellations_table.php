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
        Schema::create('seat_cancellations', function (Blueprint $table) {
            $table = $this->defaultTableColumns($table);

            $table->unsignedBigInteger('reservation_id')->unique();
            $table->datetime('cancellation_date');
            $table->string('cancellation_reason');

            //foreign keys
            $table->foreign('reservation_id')->references('id')->on('seat_reservations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_cancellations');
    }
};
