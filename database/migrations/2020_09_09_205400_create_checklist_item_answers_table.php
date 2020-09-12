<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecklistItemAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist_item_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('checklist_id');
            $table->foreignId('checklist_item_id');
            $table->foreignId('plan_id')->nullable();
            $table->boolean('answer');
            $table->timestamp('date')->useCurrent();
            $table->text('description')->nullable();
            $table->string('reference')->nullable();
            $table->text('observation')->nullable();
            $table->string('position')->nullable();
            $table->timestamps();

            $table->foreign('checklist_id')->references('id')->on('checklists')->onUpdate('cascade');
            $table->foreign('checklist_item_id')->references('id')->on('checklist_items')->onUpdate('cascade');
            $table->foreign('plan_id')->references('id')->on('plans')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklist_item_answers');
    }
}
