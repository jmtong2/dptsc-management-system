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
        Schema::create('seat_reservations', function (Blueprint $table) {
            $table = $this->defaultTableColumns($table);

            $table->string('name');
            $table->string('contact_number');
            $table->unsignedBigInteger('id_type_id');
            $table->string('id_number');
            $table->datetime('reservation_date');
            $table->integer('number_of_seats');
            $table->unsignedBigInteger('trip_id');

            //foreign keys
            $table->foreign('id_type_id')->references('id')->on('id_types');
            $table->foreign('trip_id')->references('id')->on('trips');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_reservations');
    }
};
