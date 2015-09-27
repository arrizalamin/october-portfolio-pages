<?php namespace ArrizalAmin\PortfolioPages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateItemsTable extends Migration
{

    public function up()
    {
        Schema::table('arrizalamin_portfolio_items', function($table)
        {
            $table->string('slug');
            $table->text('excerpt')->nullable();
        });
    }

    public function down()
    {
        Schema::table('arrizalamin_portfolio_items', function($table)
        {
            $table->dropColumn('slug');
            $table->dropColumn('excerpt');
        });
    }

}
