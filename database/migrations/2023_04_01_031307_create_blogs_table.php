<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('subcategory_id')->constrained('categories');
            $table->string('title',100)->nullable();
            $table->string('short_description',255)->nullable();
            $table->string('intro', 550);
            $table->text('body');
            $table->text('menu');
            $table->string('image',100)->nullable();
            $table->string('slug',255)->nullable();
            $table->tinyInteger('order_by')->nullable();
            $table->enum('is_recommended',[0,1])->default(0)->comment('0->not_recommended, 1->recommended');
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
        Schema::dropIfExists('blogs');
    }
}
