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
        Schema::create('event_attendees', function (Blueprint $table) {
            $table = $this->defaultTableColumns($table);

            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('driver_reliever_id');

            //foreign keys
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->foreign('driver_reliever_id')->references('id')->on('drivers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_attendees');
    }
};
