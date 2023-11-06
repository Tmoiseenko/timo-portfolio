<?php namespace Timo\Portfolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateExperiencesTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('timo_portfolio_experiences', function(Blueprint $table) {
            $table->id();
            $table->text('position');
            $table->text('employer');
            $table->text('employer_link');
            $table->longText('description');
            $table->boolean('current');
            $table->text('logo');
            $table->timestamp('date_from');
            $table->timestamp('date_to')->nullable();
            $table->integer('site_id')->nullable()->index();
            $table->integer('site_root_id')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('timo_portfolio_experiences');
    }
};
