<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAssigned extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function($table) {
        $table->string('description')->after('name');    
        $table->string('assigned_to')->after('description');
        $table->string('status')->after('assigned_to');
        $table->string('scope')->after('status');
        $table->string('group')->after('scope');
        $table->string('priority')->after('group');
        $table->string('due_date')->after('priority');
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
        $table->dropColumn('assigned_to');
        $table->dropColumn('status');
        $table->dropColumn('scope');
        $table->dropColumn('group');
        $table->dropColumn('priority');
        $table->dropColumn('due_date');
    });
    }
}
