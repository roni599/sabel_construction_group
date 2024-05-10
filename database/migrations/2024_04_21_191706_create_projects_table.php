<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id('project_id'); // Primary key using auto-incrementing integer
            $table->string('project_name');
            $table->string('description');
            $table->string('location');
            $table->string('employee');
            $table->string('type');
            $table->date('doc'); // Assuming 'Doc' is the date field
            $table->float('value', 8, 2); // Floating point number with 8 digits total and 2 decimal places
            $table->string('status');
            // $table->foreign('pro_id')->references('project_id')->on('images')->onDelete('cascade');
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns for tracking timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
