<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('g_id')->unsigned()->nullable();
            $table->integer('g_iid')->unsigned()->nullable();
            $table->integer('project_id')->unsigned();
            $table->integer('assignee_id')->unsigned()->nullable();
            $table->integer('author_id')->unsigned()->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->boolean('status')->default(false);
            $table->smallInteger('weight')->nullable();
            $table->date('due_date')->nullable();
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
        Schema::dropIfExists('issues');
    }
}
