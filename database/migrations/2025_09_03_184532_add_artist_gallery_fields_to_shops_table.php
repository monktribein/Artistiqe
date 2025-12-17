<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->string('type')->after('id'); // artist/gallery
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gallery_name')->nullable();
            $table->string('gallery_location')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->dropColumn([
                'type',
                'first_name',
                'last_name',
                'gallery_name',
                'gallery_location',
                'country',
                'city',
                'state',
            ]);
        });
    }
};
