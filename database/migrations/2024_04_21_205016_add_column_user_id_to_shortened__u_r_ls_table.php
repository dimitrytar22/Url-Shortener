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
        Schema::table('shortened_URLs', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->index('user_id', 'shortened_URL_user_idx');
            $table->foreign('user_id', 'shortened_URL_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shortened_URLs', function (Blueprint $table) {
            if(Schema::hasColumn('shortened_URLs', 'user_id')){
                $table->dropForeign('shortened_URL_user_fk');
                $table->dropIndex('shortened_URL_user_idx');
                $table->dropColumn('user_id');
            }
        });
    }
};
