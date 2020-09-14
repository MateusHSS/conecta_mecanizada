<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checklists', function (Blueprint $table){
            $table->dropForeign('equipment_model_id');
            $table->dropColumn('equipment_model_id');

            $table->foreignId('checklist_model_id');

            $table->foreign('checklist_model_id')->references('id')->on('checklist_models')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('checklist_model_id');
        $table->dropColumn('checklist_model_id');

        $table->foreignId('equipment_model_id');

        $table->foreign('equipment_model_id')->references('id')->on('equipment_models')->onUpdate('cascade');
    }
}
