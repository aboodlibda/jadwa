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
        Schema::create('project_product_details', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2022_09_25_211159_create_project_product_details_table.php
=======
            $table->string('name');
            $table->text('details');
>>>>>>> b9d2306be0d66959f7908970fa73b6c221b6c631:database/migrations/2022_09_25_211159_create_project_details_table.php
            $table->unsignedBigInteger('project_id');
            $table->string('name');
            $table->text('details');
            $table->foreign('project_id')->references('id')->on('projects')->cascadeOnDelete();
            $table->timestamps();
<<<<<<< HEAD:database/migrations/2022_09_25_211159_create_project_product_details_table.php
=======
            $table->softDeletes();

>>>>>>> b9d2306be0d66959f7908970fa73b6c221b6c631:database/migrations/2022_09_25_211159_create_project_details_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_product_details');
    }
};
