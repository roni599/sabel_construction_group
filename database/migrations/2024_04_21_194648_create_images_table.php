<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id('img_id'); // Primary key using auto-incrementing integer
            $table->string('image_name');
            $table->unsignedBigInteger('project_id'); // Foreign key column referencing projects table
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('project_id')->references('project_id')->on('projects')->onDelete('cascade');
            // Assuming 'projects' is the table name and 'project_id' is the primary key column of 'projects'
            // 'onDelete('cascade') will delete related images when a project is deleted
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign(['project_id']);
        });
        Schema::dropIfExists('images');
    }
}
