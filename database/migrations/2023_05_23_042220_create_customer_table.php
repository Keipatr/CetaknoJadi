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
        Schema::create('CUSTOMER', function (Blueprint $table) {
            $table->string('ID_CUSTOMER', 15)->primary();
            $table->string('ID_WISHLIST', 15)->nullable();
            $table->string('ID_CART', 15)->nullable();
            $table->text('NAME_CUST');
            $table->text('TELP_CUST');
            $table->text('ADDRESS_CUST');
            $table->text('CITY_CUST');
            $table->text('POSTAL_CUST');
            $table->text('USERNAME_CUST');
            $table->text('PASSWORD_CUST');
            $table->text('EMAIL_CUST');
            $table->string('STATUS_DELETE', 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
