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
        Schema::table('offices', function (Blueprint $table) {
            $table->string('address'); // إضافة عمود address من نوع string
            $table->decimal('balance', 10, 2)->default(0.00); // إضافة عمود balance من نوع decimal مع قيمة افتراضية 0.00
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('offices', function (Blueprint $table) {
            $table->dropColumn('address'); // إلغاء عمود address
            $table->dropColumn('balance'); // إلغاء عمود balance
        });
    }
};
