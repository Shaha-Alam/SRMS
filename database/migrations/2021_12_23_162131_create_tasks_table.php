<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
         $table->id();
            // $table->foreignId('employee_id')->constrained()->restrictOnDelete();
            // $table->foreignId('product_id')->constrained()->restrictOnDelete();
            // $table->double('total_price');
            // $table->double('target_quantity');
            // $table->date('start_date');
            // $table->date('end_date');
            // $table->string('status')->default('pending');
            // $table->timestamps();  
           
                $table->string('serial');
                $table->string('employee_name');
                $table->string('employee_email');
                $table->string('product_name');
                $table->string('product_image')->nullable();
                $table->string('total_price');
                $table->string('target_quantity');
                $table->string('start_date');
                $table->string('end_date');
                $table->string('status'); //->default('Active')
                // $table->string('Action');

                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
