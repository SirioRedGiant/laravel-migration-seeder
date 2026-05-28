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
        Schema::table('trains', function (Blueprint $table) {
            $table->unsignedSmallInteger('delay_minutes')->default(0)->after('is_on_time'); // i minuti di ritardo. Di base 0 (in orario).

            $table->string('platform', 10)->nullable()->after('train_code'); // nullable() così se la stazione non lo ha ancora assegnato, può rimanere vuoto.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {

            $table->dropColumn(['delay_minutes', 'platform']);
        });
    }
};
