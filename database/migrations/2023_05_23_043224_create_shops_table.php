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
        Schema::create('SHOP', function (Blueprint $table) {
            $table->string('ID_SHOP', 15)->primary();
            $table->text('NAME_SHOP');
            $table->text('EMAIL_SHOP');
            $table->text('PASSWORD_SHOP');
            $table->text('TELP_SHOP');
            $table->text('ADDRESS_SHOP');
            $table->text('POSTAL_SHOP');
            $table->text('CITY_SHOP');
            $table->date('TGL_DIBUAT');
            $table->string('STATUS_SHOP', 1);
            $table->string('STATUS_DELETE', 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SHOP');
    }
};
