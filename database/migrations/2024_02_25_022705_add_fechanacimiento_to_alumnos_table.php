<?php  

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('alumnos', function (Blueprint $table) { //aqui se usa el metodo table cuando es una alateracion 
            //
            $table->timestamp('fechaNacimiento');
            $table->integer('numeroCuenta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alumnos', function (Blueprint $table) {
            //
            $table->dropColumn('fechaNacimiento');
            $table->dropColumn('numeroCuenta');
        });
    }
};
