<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('real_state', function (Blueprint $table) {
            $table->unsignedBigInteger('address_id')->nullable();

            $table->foreign('address_id')->references('id')->on('adresses');
        });
    }

    public function down(): void
    {
        Schema::table('real_state', function (Blueprint $table) {
            $table->dropForeign('real_state_address_id_foreign');
            $table->dropColumn('address_id');
        });
    }
};
