<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->default(0)->comment('0->Parent, Parent ID');
            $table->string('category_name', length: 100);
            $table->string('bg_color', length: 10)->nullable();
            $table->string('image', length: 100)->nullable();
            $table->tinyInteger('order_by')->nullable();
            $table->enum('status',[0,1])->default(0)->comment('0->Active, 1->InActive');
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
        Schema::dropIfExists('categories');
    }
}
