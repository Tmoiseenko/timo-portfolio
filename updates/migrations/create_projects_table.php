<?php namespace Timo\Portfolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateProjectsTable Migration
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
        Schema::create('timo_portfolio_projects', function(Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('link_url');
            $table->text('link_title');
            $table->longText('description');
            $table->unsignedBigInteger('technologies_id');
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
        Schema::dropIfExists('timo_portfolio_projects');
    }
};
