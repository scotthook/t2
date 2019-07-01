<?php namespace AndrewPe\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndrewpeCrmCampaigns extends Migration
{
    public function up()
    {
        Schema::create('andrewpe_crm_campaigns', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->text('description');
            $table->integer('lead_count');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andrewpe_crm_campaigns');
    }
}
