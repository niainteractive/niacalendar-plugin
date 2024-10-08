<?php namespace NiaInteractive\NiaCalendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNiainteractiveNiaCalendarCategories extends Migration
{
    public function up()
    {
        Schema::create('niainteractive_niacalendar_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('color', 255)->nullable();
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('niainteractive_niacalendar_categories');
    }
}
