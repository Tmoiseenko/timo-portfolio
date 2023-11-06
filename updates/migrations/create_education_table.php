<?php namespace Timo\Portfolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateEducationTable Migration
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
        Schema::create('timo_portfolio_education', function(Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('institution');
            $table->longText('description');
            $table->timestamp('date_to');
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
        Schema::dropIfExists('timo_portfolio_education');
    }
};
