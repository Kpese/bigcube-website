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
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('customer_phone');
            $table->dropColumn('customer_address');
            $table->dropColumn('receipt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->string('customer_phone')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('receipt')->nullable();
        });
    }
};
