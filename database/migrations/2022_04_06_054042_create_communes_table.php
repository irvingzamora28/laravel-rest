<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communes', function (Blueprint $table) {
            $table->integer('id_com')->autoIncrement();
            $table->integer('id_reg');
            $table->string('description', 90);
            $table->enum('status', ['A', 'I', 'trash'])->default('A');
            $table->dropPrimary();
            $table->primary(['id_com', 'id_reg']);
            $table->index('id_com', 'fk_communes_region_idx');
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communs');
    }
}
