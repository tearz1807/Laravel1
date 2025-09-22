<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('value');
            $table->string('module')->default('general');
            $table->string('icon')->nullable();
            $table->string('title');
            $table->text('subtext')->nullable();
            $table->string('permission_level')->default('user');
            $table->timestamps();
            
            $table->unique(['name', 'module']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
};