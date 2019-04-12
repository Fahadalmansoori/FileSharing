<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('course_id')->unsigned()->index()->nullable();
                $table->integer('school_id')->unsigned()->index()->nullable();
                $table->string('first_name');
                $table->string('last_name');
                $table->string('student_number')->unique()->nullable();
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
                $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
