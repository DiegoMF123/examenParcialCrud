<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleFactura', function (Blueprint $table) {
            $table->id();
            $table->morphs('detalleProducto');
            $table->string('cantidad');
            $table->string('precio', 64)->unique();
            $table->text('sub_total')->nullable();
            $table->timestamp('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
