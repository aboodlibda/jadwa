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
        Schema::create('project_types', function (Blueprint $table) {
            $table->id();
            $table->string('title');
<<<<<<< HEAD:database/migrations/2022_09_24_193920_create_project_types_table.php
=======
            $table->enum('status',['active','inactive'])->default('active');
>>>>>>> b9d2306be0d66959f7908970fa73b6c221b6c631:database/migrations/2022_09_25_193920_create_project_types_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_types');
    }
};
