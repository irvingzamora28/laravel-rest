 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('dni', 45)->comment('Documento de Identidad');
            $table->integer('id_reg');
            $table->integer('id_com');
            $table->string('email', 120)->comment('Correo Electrónico');
            $table->string('name', 45)->comment('Nombre');
            $table->string('last_name', 45)->comment('Apellido');
            $table->string('address', 255)->nullable()->comment('Dirección');
            $table->dateTime('date_reg')->comment('Fecha y hora del registro');
            $table->enum('status', ['A', 'I', 'trash'])->default('A')->comment('estado del registro:\nA
            : Activo\nI : Desactivo\ntrash : Registro eliminado');
            $table->softDeletes();
            $table->unique(['dni', 'id_reg', 'id_com']);
            $table->index(['id_com', 'id_reg'], 'fk_customers_communes1_idx');
            $table->unique('email', 'email_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
