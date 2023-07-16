<?php

namespace App\Trait;

use Illuminate\Database\Schema\Blueprint;

trait DatabaseTableTrait
{
    /**
     * @param Blueprint $table
     * @return Blueprint
     */
    public function defaultTableColumns(Blueprint $table): Blueprint
    {
         $table->id();
         $table->timestamps();
         $table->softDeletes();
         $table->boolean('status')->default(true);
         $table->boolean('archive')->default(false);
         $table->unsignedBigInteger('created_by')->nullable();
         $table->unsignedBigInteger('updated_by')->nullable();

         return $table;
    }
}
