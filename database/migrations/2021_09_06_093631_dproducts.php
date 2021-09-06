<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dproducts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("d_product_id");
            $table->string("d_product_key");
            $table->string("d_product_value");
            $table->foreign("d_product_key")
                ->references("id")
                ->on("dproduct")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dproducts');
    }
}
