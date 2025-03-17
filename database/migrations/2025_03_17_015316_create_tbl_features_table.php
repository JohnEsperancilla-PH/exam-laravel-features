<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tbl_features', function (Blueprint $table) {
            $table->id(); // Primary Key (id)
            $table->string('name'); // Feature Name (string)
            $table->text('description'); // Description (text)
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_features');
    }
};