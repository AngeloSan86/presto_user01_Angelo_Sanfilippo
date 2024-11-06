<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::table('images', function (Blueprint $table) {
        $table->text('labels')->nullable();
        $table->string('adult')->nullable(); 
        $table->string('spoof')->nullable(); 
        $table->string('medical')->nullable();
        $table->string('violence')->nullable();
        $table->string('racy')->nullable(); 
    });
}

public function down()
{
    Schema::table('images', function (Blueprint $table) {
        // Rimuoviamo le colonne precedentemente aggiunte
        $table->dropColumn(['labels', 'adult', 'spoof', 'racy', 'medical', 'violence']);
    });
}
};