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
        Schema::table('pagos_o_i_s', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('id_obra_impuesto')->nullable()->after('id_empresa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pagos_o_i_s', function (Blueprint $table) {
            //
        });
    }
};
