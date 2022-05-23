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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->nullable();
            $table->foreignId("user_id")->nullable();
            $table->string('title');
            $table->string("keywords")->nullable();
            $table->string("description")->nullable();
            $table->string("company")->nullable();
            $table->string("image")->nullable();
            $table->string("experience")->nullable();
            $table->string("education")->nullable();
            $table->string("job_type")->nullable();
            $table->string("location")->nullable();
            $table->string("detail")->nullable();
            $table->string("status",6)->default('False');
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
        Schema::dropIfExists('jobs');
    }
};
