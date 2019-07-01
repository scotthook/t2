<?php namespace AndrewPe\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndrewpeCrmCampaigns extends Migration
{
    public function up()
    {
        Schema::table('andrewpe_crm_campaigns', function($table)
        {
            $table->text('page_url');
        });
    }
    
    public function down()
    {
        Schema::table('andrewpe_crm_campaigns', function($table)
        {
            $table->dropColumn('page_url');
        });
    }
}
