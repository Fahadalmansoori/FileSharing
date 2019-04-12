<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('files')) {
            Schema::create('files', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned()->index();
                $table->integer('approved_by')->nullable()->default('0');
                $table->integer('module_id')->unsigned()->index();
                $table->string('title');
                $table->string('keywords', 3000);
                $table->text('about');
                $table->decimal('price', 6, 2);
                $table->decimal('mark', 6, 2);
                $table->boolean('live')->default(false);
                $table->boolean('approved')->default(false);
                $table->boolean('finished')->default(false);
                $table->boolean('owner')->default(false);
                $table->softDeletes();
                $table->timestamps();
                $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('files');
    }
}
