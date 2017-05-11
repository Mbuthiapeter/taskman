<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TasksCreateExtraFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function($table) {
        $table->text('description')->after('name');    
        $table->string('status')->after('due_date')->nullable();
        $table->text('tagged')->after('status')->nullable();
        $table->string('category')->after('description');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function($table) {
        $table->dropColumn('description');
        $table->dropColumn('status');
        $table->dropColumn('tagged');
        $table->dropColumn('category');
    });
    }
}
