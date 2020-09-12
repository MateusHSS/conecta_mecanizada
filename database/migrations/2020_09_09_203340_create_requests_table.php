<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id');
            $table->foreignId('request_criticality_id');
            $table->foreignId('request_status_id');
            $table->foreignId('equipment_id');
            $table->foreignId('plan_id')->nullable();
            $table->timestamp('date')->useCurrent();
            $table->string('reference')->nullable();
            $table->string('term')->nullable();
            $table->string('progress')->nullable();
            $table->string('responsible')->nullable();
            $table->string('position')->nullable();
            $table->text('description')->nullable();
            $table->text('observations')->nullable();
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')->onUpdate('cascade');
            $table->foreign('request_criticality_id')->references('id')->on('request_criticalities')->onUpdate('cascade');
            $table->foreign('request_status_id')->references('id')->on('request_statuses')->onUpdate('cascade');
            $table->foreign('equipment_id')->references('id')->on('equipments')->onUpdate('cascade');
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
        Schema::dropIfExists('requests');
    }
}
