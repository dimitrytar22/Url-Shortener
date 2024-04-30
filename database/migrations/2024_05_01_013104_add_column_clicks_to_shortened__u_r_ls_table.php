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
        Schema::table('shortened_urls', function (Blueprint $table) {
            $table->unsignedBigInteger('clicks')->after('shortened')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shortened_urls', function (Blueprint $table) {
            if(Schema::hasColumn('shortened_urls','clicks'))
                $table->dropColumn('clicks');
        });
    }
};
