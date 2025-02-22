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
        Schema::create('backoffice_users', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('email', 50);
            $table->string('name', 30);
            $table->string('pass');
            $table->unsignedTinyInteger('rol_id');
            $table->string('avatar')->nullable();
            $table->string('activation_token', 50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backoffice_users');
    }
};
