<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('proposals', function (Blueprint $table) {
            $table->unsignedInteger('position')->nullable();
            $table->string('position_status')->nullable();
        });
    }


    public function down(): void
    {
        Schema::table('proposals', function (Blueprint $table) {
            $table->dropColumn(['position', 'position_status']);
        });
    }
};
