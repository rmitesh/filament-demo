<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(config('filament-fabricator.table_name', 'pages'), function (Blueprint $table) {
            $table->id();
            $table->string('title', 121)->index();
            $table->string('slug', 121)->unique();
            $table->string('layout', 120)->default('default')->index();
            $table->json('blocks');
            $table->foreignId('parent_id')->nullable()->constrained(config('filament-fabricator.table_name', 'pages'))->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists(config('filament-fabricator.table_name', 'pages'));
    }    
};
