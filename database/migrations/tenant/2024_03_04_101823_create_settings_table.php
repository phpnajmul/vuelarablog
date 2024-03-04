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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('heading')->nullable();
            $table->string('title')->nullable();
            $table->string('cholak')->nullable();
            $table->string('image')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('footer_logo_title')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('github')->nullable();
            $table->string('dribble')->nullable();
            $table->tinyInteger('status')->comment('1=active, 0=inactive')->default(1);
            $table->tinyInteger('added_by')->nullable();
            $table->tinyInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
