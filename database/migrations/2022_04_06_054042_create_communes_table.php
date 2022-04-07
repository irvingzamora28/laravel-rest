<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->integer('id_com');
            $table->integer('id_reg');
            $table->string('description', 90);
            $table->enum('status', [config('constants.statuses.active'), config('constants.statuses.inactive'), config('constants.statuses.trash')])->default(config('constants.statuses.active'));
            $table->primary(['id_com', 'id_reg']);
            $table->index('id_com', 'fk_communes_region_idx');

        });
        if (env('DB_CONNECTION', 'mysql') == 'mysql') {
            DB::statement('ALTER TABLE communes MODIFY id_com INT NOT NULL AUTO_INCREMENT');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communes');
    }
}
