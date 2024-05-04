<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_interactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained();
            $table->unsignedBigInteger('views')->nullable();
            $table->integer('likes')->nullable();
            $table->integer('earnings')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_interactions');
    }
}
